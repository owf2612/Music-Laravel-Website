<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    public function handle($request, Closure $next)
    {
        // Kiểm tra xem người dùng đã đăng nhập và có vai trò admin không
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Nếu không phải admin, có thể chuyển hướng hoặc xử lý theo ý bạn
        return redirect('/dashboard')->with('Error', 'You have no access.');
    }
}
