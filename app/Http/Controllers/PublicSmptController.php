<?php

namespace App\Http\Controllers;
use App\Models\Email;
use App\Models\Smtp;
use Encore\Admin\Form;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class PublicSmptController extends Controller
{
    protected function index()
    {
        $form = new Form(new Email());

        $form->text('nama', __('Nama'));
        $form->email('email', __('Email'));
        $form->text('telpon', __('Telpon'));
        $form->textarea('pesan', __('Pesan'));
        $form->setAction('/email');

        return $form;
    }

    public function postSendEmail(Request $request)
    {
        $data = Smtp::all()->last();
        config([
            'MAIL_MAILER' => 'smtp',
            'MAIL_HOST' => $data['email_host'],
            'MAIL_PORT' => $data['port'],
            'MAIL_FROM_ADDRESS' => $data['email_pengirim'],
            'MAIL_USERNAME' => $data['username'],
            'MAIL_PASSWORD' => $data['password'],
            ]);
        Mail::raw($request->email. ' send you message', function ($message)  use($data, $request){
            //$message->to($data['email_host'], 'bank mantap');
            //$message->subject('no telpon ' . $request->telpon .' '. $request->pesan);
            $message->to($data['email_pengirim']);
            $message->subject($request->telpon . ' '. $request->pesan);
        });
        return $data;
    }
}
