<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\EditManagerRequest;
use App\Http\Requests\Admin\EditUserRequest;
use App\Http\Services\InvoicesService;
use App\Invoice;
use App\Permission;
use App\Providers\OwnerProvider;
use App\Site;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller {
    public function info() {
        return view('admin.user.info');
    }

    public function edit() {

        return view('admin.user.edit');
    }

    public function index() {
        $me = auth()->user();
        $users = User::where('parent', OwnerProvider::getOwner())->where('id', '!=', $me->id)->get();
        return view('admin.users.index', compact('users'));
    }

    public function showEditForm($user = null) {
        $user = User::where('id', $user)
            ->where('parent', '!=', 0)
            ->where('id', '!=', auth()->user()->id)
            ->where(function ($q) {
                $q->where('parent', OwnerProvider::getOwner());
            })
            ->first();
        if ($user == null) $user = new User;
        $sites = Site::with(['permissions' => function ($query) use ($user) {
            $query->where('user_id', $user->id);
        }])
            ->current()->get();
        foreach ($sites as &$site) {
            if (!isset($site->permissions[0])) {
                $site->permissions[0] = new Permission();
            }
        }
        return view('admin.users.edit', compact(['user', 'sites']));
    }

    public function storeUserInformation(EditManagerRequest $request) {
        $additional = [
            'parent' => OwnerProvider::getOwner(),
            'auth_token' => str_random(50) . time(),
            'admin' => $request->input('admin', 0),
        ];
        if ($request->input('password') != "") {
            $additional['password'] = Hash::make($request->input('password'));
        }

        $user = User::updateOrCreate(['id' => $request->input('id')], $request->except('_token', 'password') + $additional);

        $sites = Site::with(['permissions' => function ($query) use ($user) {
            $query->where('user_id', $user->id);
        }])
            ->current()->get();
        if ($additional['admin']) {
            Permission::where('user_id', $user->id)->delete();
        } else {
            foreach ($sites as &$site) {
                $permissions = Permission::firstOrNew(['site_id' => $site->id, 'user_id' => $user->id]);
                $permissions->payments = $request->input('site_' . $site->id . '_payments');
                $permissions->invoices = $request->input('site_' . $site->id . '_invoices');
                $permissions->mark_as_paid = $request->input('site_' . $site->id . '_mark_as_paid');
                $permissions->save();
            }
        }
        return redirect('admin/managers')->with('message', 'User updated succesfully');
    }

    public function store(EditUserRequest $request) {

        auth()->user()->update($request->all());
        Session::flash('message', 'User information updated');
        return redirect('admin/user/');
    }

    public function delete($id) {
        if (OwnerProvider::getOwner() != $id) {
            if (User::where('id', $id)->where('parent', '!=', 0)->delete()) {
                return redirect('/admin/managers')->with('message', 'User succesfully deleted');
            }
            return redirect('/admin/managers')->withErrors('Error while deleting user');
        }
    }
}
