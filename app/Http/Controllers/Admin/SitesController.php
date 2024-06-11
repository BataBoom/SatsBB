<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\EditSiteRequest;
use App\Providers\OwnerProvider;
use App\Site;
use App\SiteWalletService;
use App\WalletService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SitesController extends Controller {


    public function index() {
        $sites = Site::current()->withCount('paidInvoices', 'invoices')->get();
        return view('admin.sites.index')->with('sites', $sites);
    }

    public function showEditForm(Site $site) {
        $wallet_services = WalletService::with(['site_wallet_services' => function($query) use ($site) {
            $query->where('site_id', $site->id)->get();
        }])
            ->active()
            ->get();
        return view('admin.sites.edit', compact(['site', 'wallet_services']));
    }

    public function storeSiteInformation(EditSiteRequest $request) {

$site = Site::updateOrCreate(['id' => $request->input('id'), 'user_id' => OwnerProvider::getOwner()], $request->except('_token') + ['user_id' => OwnerProvider::getOwner()]);
        if (!$site->api_key) {
            $site->api_key = str_random(25) . time() . str_random(25);
        }
        $site->save();
        SiteWalletService::where('site_id', $site->id)->delete();
        $sws = [];
        if (!empty($request->input('sws'))) {
            foreach ($request->input('sws') as $service) {
                $sws[] = ['site_id' => $site->id, 'wallet_service_id' => $service];
            }
            SiteWalletService::insert($sws);
        }
        return redirect('admin/sites')->with('message', 'Site updated successfully');
    }

    public function delete($id) {
        if (Site::where('id', $id)->where('user_id',OwnerProvider::getOwner())->delete()) {
            return redirect('admin/sites')->with('message','Site successfully deleted');
        }
        return redirect('admin/sites')->withErrors('Error while deleting site');
    }
    public function details(int $site) {
        $site = Site::where('id',$site)->current()->withCount('paidInvoices', 'invoices')->first();
        if ($site->user_id != OwnerProvider::getOwner()) {
            abort(404);
        } else {
            return view('admin.sites.details', compact('site'));
        }
    }
}
