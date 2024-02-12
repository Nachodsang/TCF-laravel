<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailContactMd;

class ContactCtrl extends Controller
{
    public function sendEmail(request $request)
    {
        $email = new EmailContactMd;
        $email->company_name = $request->companyName;
        $email->name = $request->name;
        $email->email = $request->email;
        $email->phone = $request->telephone;
        $email->details = $request->detail;

        ////////////// send email and notification line //////////////



        //////////////////////////////////////////////////////////////

        if ($email->save()) {
            return response()->json(['status' => 'success', 'msg' => 'ส่งอีเมลสำเร็จแล้ว เราจะติดต่อกลับโดยเร็วที่สุด']);
        } else {
            return response()->json(['status' => 'danger', 'msg' => 'ส่งอีเมลไม่สำเร็จ กรุณาลองอีกครั้ง']);
        }
    }
}
