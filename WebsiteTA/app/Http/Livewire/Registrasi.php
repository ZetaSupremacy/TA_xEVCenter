<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\reservation_session;
use App\Models\reservation_group;

class Registrasi extends Component
{

    public $reservation_group, $date,$sessions,$sessionselected;
    public $kuotaDisabled = True; 

    public $pengunjung = 1;
    public $kuota = 0;
    
    public function render()
    {       
        $this->sessions = reservation_session::all();
        
        return view('livewire.registrasi'
        );
    }

    public function switchroom()
    {
        $this->pengunjung++;
    }

    public function updatedDate($value) {
        $this->date = $value;
      }
      public function updatedDKuota($value) {
        dd($this->kuota);
      }


      public function updatedSessionselected($value) {
        $this->sessionSelected = $value;
        $this->checkKuota($this->date, $this->sessionSelected);
        $this->kuotaDisabled = False;
      }

    public function checkKuota($tanggal, $sesi) {
      $this->reservation_group = reservation_group::where('tanggal', $tanggal)->where('reservation_sessions_id', $sesi)->get();
      $this->reservation_group = collect($this->reservation_group)->sum('total_member');
      // dd($this->reservation_group);
      if ($this->reservation_group == 20){
        $this->kuota == 0;
        return;
      } elseif ($this->reservation_group == 0) {
        $this->kuota = 20;
        return;
      } else {
        $this->kuota = 20 - $this->reservation_group;
        return;
      }
      
    }
}
