<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Smtp;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama_pelapor, $nomer_telepon, $email, $tindakan, $nama_terlapor,
    $jabatan_terlapor, $waktu_kejadian, $lokasi_kejadian, $kronologis_kejadian, $nominal)
    {
        $this->nama_pelapor = $nama_pelapor;
        $this->nomer_telepon = $nomer_telepon;
        $this->email = $email;
        $this->tindakan = $tindakan;
        $this->nama_terlapor = $nama_terlapor;
        $this->jabatan_terlapor = $jabatan_terlapor;
        $this->waktu_kejadian = $waktu_kejadian;
        $this->lokasi_kejadian = $lokasi_kejadian;
        $this->kronologis_kejadian = $kronologis_kejadian;
        $this->nominal = $nominal;
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
                    ->subject('Laporan Whistle oleh '. $this->nama_pelapor)
                    ->view('email')
                    ->with(
                        [ 'nama_pelapor' => $this->nama_pelapor,
                          'nomer_telepon' => $this->nomer_telepon,
                          'email' => $this->email,
                          'tindakan' => $this->tindakan,
                          'nama_terlapor' => $this->nama_terlapor,
                          'jabatan_terlapor' => $this->jabatan_terlapor,
                          'waktu_kejadian' => $this->waktu_kejadian,
                          'lokasi_kejadian' => $this->lokasi_kejadian,
                          'kronologis_kejadian' => $this->kronologis_kejadian,
                          'nominal' => $this->nominal,
                        ]);
    }
}
