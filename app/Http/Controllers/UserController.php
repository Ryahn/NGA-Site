<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psy\Exception\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Wargaming oauth login
     *
     * @return object
     */
    public function login()
    {
        if (env('APP_ENV') === 'local') {
            $user = User::find(env('ADMIN_USER_ID'));
            Auth::login($user);
            return redirect('/');
        }
        $appURL       = env('APP_URL');
        $redirect_url = urlencode("$appURL/openid/auth");
        $appID        = env('APPLICATION_ID');
        $url          = "https://api.worldoftanks.com/wot/auth/login/?application_id=$appID&redirect_uri=$redirect_url";
        return redirect($url, 302);
    }

    /**
     * Return data from wargaming oauth
     *
     * @return void
     */
    public function openid()
    {
        if (request()->status !== 'ok') {
            throw new Exception('Could not log in as user!');
        }

        $user_id  = (int) request()->account_id;
        $password = Hash::make(str_random(16));

        $data = [
            'username'     => request()->nickname,
            'access_token' => request()->access_token,
            'id'           => $user_id,
            'email'        => request()->nickname . '@ngadev.test',
            'expires_at'   => request()->expires_at,
            'password'     => $password,
        ];

        $u = User::updateOrCreate(['id' => $user_id], $data);
        Auth::login($u, true);
        return redirect('/dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
