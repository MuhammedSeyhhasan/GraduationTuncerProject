<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class checkForAdmin
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
        // إذا الأدمن غير مسجل دخول، رجّعه إلى صفحة تسجيل دخول الأدمن
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login')->with('error', 'SORRY');
        }
    
        return $next($request);
    }

    
    
}
