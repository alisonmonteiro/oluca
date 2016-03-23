<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    /**
     * Authentication page
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('auth.index');
    }

    /**
     * Check data sent on login and redirect to the correct route
     *
     * @param Request $request
     * @return mixed
     */
    public function postIndex(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Success login
        if (Auth::attempt($credentials)) {
            $notice = [
                'alert' => 'success',
                'message' => trans('auth.success'),
            ];

            return Redirect::intended(route('dashboard'))
                ->with('notice', $notice);
        }

        $notice = [
            'alert' => 'success',
            'message' => trans('auth.failed'),
        ];

        return Redirect::route('auth.index')
            ->with('notice', $notice);
    }

    /**
     * System logout
     *
     * @return Redirect
     */
    public function logout()
    {
        Auth::logout();

        return redirect('/admin');
    }
}
