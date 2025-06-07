<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShareAdminData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         // تأكد من أن المستخدم مسجل كمسؤول
         if (Auth::guard('admin')->check()) {
            $admin = Auth::guard('admin')->user();
            view()->share('LoggedAdminInfo', $admin);
        }

        return $next($request);
    }
}
