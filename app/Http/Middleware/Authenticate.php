<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if ($request->route()->getName() == 'admin.dashboard') {
                return route('admin.auth.login_page');
            } else {
                return route('front.auth.login_page');
            }
        }
    }
}
