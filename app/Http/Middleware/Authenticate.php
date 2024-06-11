<?php

namespace App\Http\Middleware;

use App\Site;
use App\User;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware {
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request $request
     * @return string
     */
    protected function redirectTo($request) {
        return route('login');
    }

    public function handle($request, Closure $next, ...$guards) {
        if ($request->input('auth_token') != "") {
            $user = User::where('auth_token', $request->input('auth_token'))->first();
            if ($user !== null) {
                Auth::loginUsingId($user->id, true);
                return $next($request);
            } else if ($user === null && ($site = Site::where('api_key', $request->input('auth_token'))->first()) !== null) {
                Auth::loginUsingId($site->user_id, true);
            } else {
                throw new HttpResponseException(
                    (response()->json(['status' => false, 'errors' => 'Not authorized'], 422))
                );

            }
        }
        $this->authenticate($request, $guards);

        return $next($request);
    }

}
