<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Admin\SettingsController;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;




class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $is_forced_authorization_on = SettingsController::get()['forced-authorization'] === 'on';
        $is_not_logged = !Auth::check();

        if ($is_forced_authorization_on and $is_not_logged) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
