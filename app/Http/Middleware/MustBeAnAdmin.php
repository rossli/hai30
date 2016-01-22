<?php

namespace App\Http\Middleware;

use Closure;

class MustBeAnAdmin
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
        // User login && admin
        // $request->user() 相当于 Auth::user() 就是 看看是否登录进来了
        // $request 包含了 User这个类
        if($request->user() && $request->user()->isAdmin())
        {
            return $next($request);
        }
        return redirect('/test');
    }
}
