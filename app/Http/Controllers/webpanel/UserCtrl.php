<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use App\Models\TaskMd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserCtrl extends Controller
{
    public function __construct()
    {
        $this->folderPrefix = 'webpanel';
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required']
        ];
    }
    public function index(Request $request)
    {
        $user = User::paginate(15);
        return view("$this->folderPrefix.user.index", [
            'module' => 'user',
            'page' => 'all',
            'user' => $user
        ]);
    }
    public function profile()
    {
        $data = \App\Models\User::find(auth()->use()->id);
        return $data;
    }
    public function addUser()
    {
        return view("$this->folderPrefix.user.index", [
            'module' => 'user',
            'page' => 'add'
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'email' => [
                'required',
                'regex:/^(([^<>()[\]\\`.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
                Rule::unique('users', 'email'),
            ],
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
        ], [
            'type.required' => 'Type is required',
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.regex' => 'Invalid email',
            'email.unique' => 'Duplicate email',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Password does not match',
            'password_confirmation.required' => 'Confirm Password is required',
            'password_confirmation.same' => 'Confirm Password does not match',
        ]);
        $new = new User;
        $new->type = $request->type;
        $new->name = $request->name;
        $new->email = $request->email;
        $new->password = Hash::make($request->password);
        if ($new->save()) {
            return redirect('webpanel/user')
                ->with([
                    'status' => 'success',
                    'message' => 'Data has been stored.'
                ]);
        } else {
            return back()
                ->withInput([
                    'status' => 'error',
                    'message' => 'An error has occurred.',
                    'type' => $request->type,
                    'name' => $request->name,
                    'email' => $request->email
                ]);
        }
    }

    public function show(int $id)
    {
        $user = User::find($id);
        return view("$this->folderPrefix.user.index", [
            'module' => 'user',
            'page' => 'edit',
            'user' => $user
        ]);
    }
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'email' => [
                'required',
                'regex:/^(([^<>()[\]\\`.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
                Rule::unique('users', 'email')->ignore($id),
            ],
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
        ], [
            'type.required' => 'Type is required',
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.regex' => 'Invalid email',
            'email.unique' => 'Duplicate email',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Password does not match',
            'password_confirmation.required' => 'Confirm Password is required',
            'password_confirmation.same' => 'Confirm Password does not match',
        ]);

        $data = User::find($id);
        $data->type = $request->type;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);

        if ($data->save()) {
            return redirect()->back()->with([
                'status' => 'success',
                'message' => 'Data has been stored.'
            ]);
        } else {
            return redirect()->back()->with([
                'status' => 'error',
                'message' => 'An error has occurred.',
            ]);
        }
    }

    public function destroy(string $id)
    {
        try {
            $log = new TaskMd;
            $data = User::find($id);
            if ($data->delete()) {
                $log->action = "delete-user-$id";
                $log->module = "user";
                $log->action_by = Auth::user()->id;
                $log->save();
                return response()->json([
                    "status" => 200,
                ], 200);
            } else {
                return response()->json([
                    "status" => 500,
                ], 500);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    function restore()
    {

    }

    function forceDelete()
    {

    }
}
