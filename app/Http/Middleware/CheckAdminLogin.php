<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CheckAdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->trangthai == '1' && $user->level == "admin") {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('getLogin')->with('status', 'Chỉ tài khoản admin mới được truy cập');
            }
        } else{
            return redirect()->route('getLogin')->with('status', 'Bạn chưa đăng nhập');
        }
        
    }
}
