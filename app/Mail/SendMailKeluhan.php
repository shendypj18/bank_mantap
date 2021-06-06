<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Smtp;

class SendMailKeluhan extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama, $email, $telp, $pesan)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->telp = $telp;
        $this->pesan = $pesan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = Smtp::all()->last();
        return $this->from($data['username'])
                    ->subject('Pesan Keluhan oleh '. $this->nama)
                    ->view('email-keluhan')
                    ->with(
                        [ 'nama' => $this->nama,
                          'telp' => $this->telp,
                          'email' => $this->email,
                          'pesan' => $this->pesan,
                        ]);

    }
}
