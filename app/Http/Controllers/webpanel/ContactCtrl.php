<?php

namespace App\Http\Controllers\Webpanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailContactMd;

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
                'row' =>\App\Models\ContactMd::find(1),
                'map' => \App\Models\AddressMd::all()
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
        $get = \App\Models\ContactMd::find(1);
        $res = [
            'status' => false,
            'message' => 'An error occurred.'
        ];
        if(@$get->id){
            $get->telephone = $request->telephone;
            $get->mobile = $request->mobile;
            $get->email = $request->email;
            $get->x = $request->x;
            $get->fb = $request->fb;
            $get->ig = $request->ig;
            $get->yt = $request->yt;
            if($get->save()){
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
        //
    }

    /**
     * Get Email Contact from storage.
     */
    public function EmailContact()
    {
        try {
            $email = EmailContactMd::all();
            return view('webpanel.email-contact.index', [
                'module' => 'email-contact',
                'page' => 'page-index',
                'email' => $email
            ]);
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
            
            $new = new \App\Models\AddressMd;
            $new->name = $request->name;
            $new->address = $request->address;
            $new->map = $request->map;
    
            if($new->save()){
                $response = [
                    'status' => true,
                    'message' => 'Data been stored.',
                    'id' => $new->id
                ];
            }else{
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
    public function updateMap(Request $request,$id = null)
    {
        $data = \App\Models\AddressMd::find($id);
        $res = [
            'status' => false,
            'message' => 'An error occurred.'
        ];
        if(@$data->id){
            $data->name = $request->name;
            $data->address = $request->address;
            $data->map = $request->map;
            if($data->save()){
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
        $get = \App\Models\AddressMd::find($id);
        $res = [
            'status' => false,
            'message' => 'An error occurred.'
        ];
        if(@$get->id){
            \App\Models\AddressMd::where('id',$id)->delete();
            $res = [
                'status' => true,
                'message' => 'Data has been deleted.'
            ];
        }
        return response()->json($res);
    }
}
