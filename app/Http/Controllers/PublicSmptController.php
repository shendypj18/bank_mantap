<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Email;
use App\Models\Smtp;
use Encore\Admin\Form;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\SendMailKeluhan;
use Config;
use Illuminate\Support\Facades\Crypt;

class PublicSmptController extends Controller
{
    protected function index()
    {
        // $form = new Form(new Email());

        // $form->text('nama', __('Nama'));
        // $form->email('email', __('Email'));
        // $form->text('telpon', __('Telpon'));
        // $form->textarea('pesan', __('Pesan'));
        // //$form->setAction('/kirim-aduan');

        //return $form;
    }

    public function setEnv()
    {
        $data = Smtp::all()->last();
        Config::set('mail.driver', 'smtp');
        Config::set('mail.host', $data['email_host']);
        Config::set('mail.port', $data['port']);
        Config::set('mail.encryption', 'ssl');
        Config::set('mail.username', $data['username']);
        //Config::set('mail.password', Crypt::decryptString($data['password']));
        Config::set('mail.password', base64_decode($data['password']));

    }

    public function postSendEmail(Request $request)
    {

        $data = Smtp::all()->last();
       Mail::raw($request->email. ' send you message', function ($message)  use($data, $request){
            //$message->to($data['email_host'], 'bank mantap');
            //$message->subject('no telpon ' . $request->telpon .' '. $request->pesan);
            $message->to($data['email_pengirim']);
            $message->subject($request->telpon . ' '. $request->pesan);
        });
        return $data;
    }

    protected function loginValidator(array $data)
    {
        return Validator::make($data, [
            recaptchaFieldName() => recaptchaRuleName()
        ]);
    }
    public function keluhan(Request $request)
    {
        try {
            $this->loginValidator($request->all())->validate();
            $data = Smtp::all()->last();
            $this->setEnv();
            //$nama = "Wildan Fuady";
            //$email = "wildanfuady@gmail.com";
            $kirim = Mail::to($data['username'])
                   ->send(new SendMailKeluhan(
                $request->nama,
                $request->email,
                $request->telp,
                $request->pesan,
            ));
        } catch (\Exception $e) {
            return abort(500, 'custom error');
        }
        $data = [
            'nama' => $request->nama,
        ];

        return view('whistleblowing-system-respond', $data);
        return redirect()->intended('/');
    }

    public function whistle(Request $request)
    {

        try {
            $this->loginValidator($request->all())->validate();

            $data = Smtp::all()->last();
            $this->setEnv();
            $tujuan = 'upg@bankmantap.co.id';
            if ($request->tindakan == 'Gratifikasi') {
                $tujuan = 'upg@bankmantap.co.id';
            }
            //$data['username']
            $kirim = Mail::to($tujuan)
                   ->send(new SendMail(
                $request->nama_pelapor,
                $request->nomer_telepon,
                $request->email,
                $request->tindakan,
                $request->nama_terlapor,
                $request->jabatan_terlapor,
                $request->waktu_kejadian,
                $request->lokasi_kejadian,
                $request->kronologis_kejadian,
                $request->nominal,
            ));
        } catch (\Exception $e) {
            return abort(500, 'custom error');
        }
        $data = [
            'nama' => $request->nama_pelapor,
        ];
        return view('whistleblowing-system-respond', $data);
        return redirect()->intended('article/id-whistleblowing-system/id')->with('succes', 'teling');
    }



}
