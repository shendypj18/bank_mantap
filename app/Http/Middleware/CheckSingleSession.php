<?php

namespace App\Http\Middleware;

use App\Models\AdminUser;
use Closure;
use Illuminate\Http\Request;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Carbon;

class CheckSingleSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected function guard()
    {
        return Admin::guard();
    }

    public function handle(Request $request, Closure $next)
    {
        $muser = $this->guard()->user();
        $now = Carbon::now();
        $last_attempt = Carbon::parse($muser->last_attempt_time);
        $different = $now->diffInMinutes($last_attempt);
        if ($muser == null or $different > config('session.lifetime')) {
            $this->guard()->logout();
            $request->session()->invalidate();
            return redirect(config('admin.route.prefix'));

        }
        return $next($request);
    }
}
