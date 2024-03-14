<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmailContactMd;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Mail\NotifyMail;

class ContactCtrl extends Controller
{
    public function sendEmail(request $request)
    {
        $secret = env('GOOGLE_RECAPTCHA_SECRET');
        $captchaId = $request->input('g-recaptcha-response');

        $responseCaptcha = json_decode(file_get_contents(
            'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret .
                '&response=' . $captchaId
        ));

        if ($responseCaptcha->success == true) {
            //sending email
            $data = array(
                'company' => $request->companyName,
                'telephone' => $request->telephone,
                'name' => $request->name,
                'email' => trim($request->email, " "),
                'content' => $request->detail,

            );
            Mail::to(env('MAIL_TO'))->send(new NotifyMail($data));

            $email = new EmailContactMd;
            $email->company_name = $request->companyName;
            $email->name = $request->name;
            $email->email = $request->email;
            $email->phone = $request->telephone;
            $email->details = $request->detail;

            if ($email->save()) {
                return response()->json(['status' => 'success', 'msg' => 'Message Sent Successfully']);
            } else {
                return response()->json(['status' => 'danger', 'msg' => 'Failed, Please Try Again']);
            }
        } else {
            return response()->json(['status' => 'danger', 'msg' => 'Looks like you are a replicant. Sorry but I do not receive emails from non human entities', 'res' => $responseCaptcha]);
        }
    }
}
