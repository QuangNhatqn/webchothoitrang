<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            if($user->UserTypes == 2)
                return $next($request);
            else
                return redirect('customer/dangnhap')->with('thongbao', 'Đăng nhập thất bại!!');
        }
        else
            return redirect('customer/dangnhap')->with('thongbao', 'Bạn cần đăng nhập!!');;
    }
}
