<?php

namespace App\Livewire;

use Livewire\Component;

class BookingForm extends Component
{
    public $nama_lengkap;
    public $nama_komunitas;
    public $alamat;
    public $desa;
    public $kecamatan;
    public $telepon;
    public $nama_kegiatan;
    public $deskripsi_kegiatan;
    public $tanggal;
    public $start_time;
    public $end_time;

    public $totalPage = 3;
    public $currentPage = 1;

    public function mount(){
        $this->currentPage = 1;
    }
    

    public $pages = [
        1 => [
            'heading' => 'Ketentuan Penggunaan',
            'subheading' => '',
        ],
        2 => [
            'heading' => 'DATA PEMINJAMAN',
            'subheading' => 'Isi data diri dengan benar',
        ],
        3 => [
            'heading' => 'DATA PEMINJAMAN',
            'subheading' => 'Isi kegiatan dengan jelas',
        ],
    ];

    public function goToNextPage() 
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->resetErrorBag();
        $this->validateData(); 
        $this->currentPage--;
    }

    public function validateData(){
        if($this->currentPage == 2){
            $this->validate([
                'nama_lengkap' => 'required|string',
                'nama_komunitas' => 'required|string',
                'alamat' => 'required|string',
                'desa' => 'required|string',
                'kecamatan' => 'required|string',
                'telepon' => 'required',
            ]);
        }
        if($this->currentPage == 3){
            $this->validate([
                'nama_kegiatan' => 'required',
                'deskripsi_kegiatan' => 'required',
                'tanggal' => 'required',
                'start_time' => 'required',
                'end_time' => 'required',
            ]);
        }
    }

    public function submit()
    {
        return redirect('booking-success');
    }

    public function render()
    {
        return view('livewire.booking-form');
    }
}
