<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCtrl extends Controller
{
    public function index()
    {
        return view('webpanel/authen/login');
    }

    public function login(Request $request)
    {
        $remember = ($request->remember_me == 'on') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            $user = \App\Models\User::where('email', $request->email)->first();
            $token = $user->createToken($request->password)->plainTextToken;

            $id = Auth::user()->id;
            $log = new \App\Models\TaskMd;
            $log->action = "login-$id";
            $log->module = "user";
            $log->action_by = Auth::user()->id;
            $log->save();

            if ($request->redirect)
                return redirect($request->redirect, 301);
            else
                return redirect('webpanel', 301);
        } else {
            return redirect($request->fullUrl())
                ->with(['status' => 'error', 'message' => 'Username or password is incorrect.']);
        }
    }

    public function logout(Request $request)
    {
        $id = Auth::user()->id;
        $user = \App\Models\User::where('id', $id)->first();
        foreach ($request->user()->tokens as $v) {
            $user->tokens()->where('id', $v->id)->delete();
        }
        if (Auth::logout()) {
            return redirect(url()->previous(1));
        } else {
            $log = new \App\Models\TaskMd;
            $log->action = "logout-$id";
            $log->module = "user";
            $log->action_by = $id;
            $log->save();
            return redirect('webpanel/login');
        }
    }
}
