<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use App\Models\AddressMd;
use App\Models\ContactMd;
use Illuminate\Http\Request;
use App\Models\EmailContactMd;
use App\Models\TaskMd;
use Illuminate\Support\Facades\Auth;

class ContactCtrl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            return view('webpanel.contact.index', [
                'js' => [
                    'admin/build/contact.js'
                ],
                'module' => 'contact',
                'page' => 'edit',
                'row' => ContactMd::find(1),
                'map' => AddressMd::all()
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $get = ContactMd::find(1);
        $res = [
            'status' => false,
            'message' => 'An error occurred.'
        ];
        if (@$get->id) {
            $get->telephone = $request->telephone;
            $get->mobile = $request->mobile;
            $get->email = $request->email;
            $get->twitter = $request->twitter;
            $get->fb = $request->fb;
            $get->ig = $request->ig;
            $get->yt = $request->yt;
            if ($get->save()) {
                $res = [
                    'status' => true,
                    'message' => 'Data has been Updated.'
                ];
            }
        } else {
            $new_contact = new ContactMd;
            $new_contact->telephone = $request->telephone;
            $new_contact->mobile = $request->mobile;
            $new_contact->email = $request->email;
            $new_contact->twitter = $request->twitter;
            $new_contact->fb = $request->fb;
            $new_contact->ig = $request->ig;
            $new_contact->yt = $request->yt;
            if ($new_contact->save()) {
                $res = [
                    'status' => true,
                    'message' => 'Data has been saved.'
                ];
            }
        }

        return response()->json($res);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $log = new TaskMd;
            $data = EmailContactMd::find($id);

            if ($data->delete()) {
                $log->action = "delete-msg.-$id";
                $log->module = "contact-email";
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

    /**
     * Get Email Contact from storage.
     */
    public function EmailContact()
    {
        try {
            $email = EmailContactMd::where('status', '<>', '1')
                ->where('favourite', '<>', '1')
                ->orderBy('created_at', 'desc')->get();
            // ->paginate(10);
            $favourite = EmailContactMd::where('favourite', '1')
                ->orderBy('created_at', 'desc')->get();
            // ->paginate(10);
            $done = EmailContactMd::where('status', '1')
                ->orderBy('created_at', 'desc')->get();
            // ->paginate(10);
            return view('webpanel.email-contact.index', [
                'module' => 'email-contact',
                'page' => 'page-index',
                'email' => $email,
                'favourite' => $favourite,
                'done' => $done,

            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function status(Request $request)
    {

        try {
            $data = EmailContactMd::find($request->id);
            $log = new TaskMd;
            if ($data->status == null || $data->status == '0') {
                $data->update(['status' => '1']);
                $log->action = "done-contact-email-$request->id";
                $log->module = "contact-email";
                $log->action_by = Auth::user()->id;
                $log->save();
                $email = EmailContactMd::where('status', '<>', '1')
                    ->where('favourite', '<>', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);
                $favourite = EmailContactMd::where('favourite', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);
                $done = EmailContactMd::where('status', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);

                $res = [
                    'email' => $email,
                    'favourite' => $favourite,
                    'done' => $done,
                ];
                return response()->json($res);
            } else {
                $data->update(['status' => '0']);
                $log->action = "undone-contact-email-$request->id";
                $log->module = "contact-email";
                $log->action_by = Auth::user()->id;
                $log->save();
                $email = EmailContactMd::where('status', '<>', '1')
                    ->where('favourite', '<>', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);
                $favourite = EmailContactMd::where('favourite', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);
                $done = EmailContactMd::where('status', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);

                $res = [
                    'email' => $email,
                    'favourite' => $favourite,
                    'done' => $done,
                ];
                return response()->json($res);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function favourite(Request $request)
    {

        try {
            $data = EmailContactMd::find($request->id);
            $log = new TaskMd;
            if ($data->favourite == null || $data->favourite == '0') {
                $data->update(['favourite' => '1']);
                $log->action = "favourite-contact-email-$request->id";
                $log->module = "contact-email";
                $log->action_by = Auth::user()->id;
                $log->save();
                $email = EmailContactMd::where('status', '<>', '1')
                    ->where('favourite', '<>', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);
                $favourite = EmailContactMd::where('favourite', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);
                $done = EmailContactMd::where('status', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);

                $res = [
                    'email' => $email,
                    'favourite' => $favourite,
                    'done' => $done,
                ];
                return response()->json($res);
            } else {
                $data->update(['favourite' => '0']);
                $log->action = "remove-favourite-contact-email-$request->id";
                $log->module = "contact-email";
                $log->action_by = Auth::user()->id;
                $log->save();
                $email = EmailContactMd::where('status', '<>', '1')
                    ->where('favourite', '<>', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);
                $favourite = EmailContactMd::where('favourite', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);
                $done = EmailContactMd::where('status', '1')
                    ->orderBy('created_at', 'desc')->get();
                // ->paginate(10);

                $res = [
                    'email' => $email,
                    'favourite' => $favourite,
                    'done' => $done,
                ];
                return response()->json($res);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function SendEmailContact(request $request)
    {
        try {
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function storeMap(Request $request)
    {
        try {

            $new = new AddressMd;
            $new->name = $request->name;
            $new->address = $request->address;
            $new->map = $request->map;

            if ($new->save()) {
                $response = [
                    'status' => true,
                    'message' => 'Data been stored.',
                    'id' => $new->id
                ];
            } else {
                $response = [
                    'status' => false,
                    'message' => 'An error has occurred.'
                ];
            }
            return response()->json($response);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
    public function updateMap(Request $request, $id = null)
    {
        $data = AddressMd::find($id);
        $res = [
            'status' => false,
            'message' => 'An error occurred.'
        ];
        if (@$data->id) {
            $data->name = $request->name;
            $data->address = $request->address;
            $data->map = $request->map;
            if ($data->save()) {
                $res = [
                    'status' => true,
                    'message' => 'Data has been saved.'
                ];
            }
        }
        return response()->json($res);
    }

    public function deleteMap($id)
    {
        $get = AddressMd::find($id);
        $res = [
            'status' => false,
            'message' => 'An error occurred.'
        ];
        if (@$get->id) {
            AddressMd::where('id', $id)->delete();
            $res = [
                'status' => true,
                'message' => 'Data has been deleted.'
            ];
        }
        return response()->json($res);
    }
}
