<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\setting;
use App\Models\allow_day;

class Seting extends Component
{
    public $dateInterval, $kuota, $allow_days, $days;
    public $memek;

    

    public function render()
    {
        $this->allow_days = allow_day::pluck('allow_days');
        $daysArray = [];
        foreach ($this->allow_days as $day) {
        switch ($day) {
            case '0':
                $daysArray[] = 'Minggu';
                break;
            case '1':
                $daysArray[] = 'Senin';
                break;
            case '2':
                $daysArray[] = 'Selasa';
                break;
            case '3':
                $daysArray[] = 'Rabu';
                break;
            case '4':
                $daysArray[] = 'Kamis';
                break;
            case '5':
                $daysArray[] = "Jum'at";
                break;
            case '6':
                $daysArray[] = "Sabtu";
                break;
        // Tambahkan case untuk nilai lainnya jika diperlukan
    }
}
    $this->memek = implode(',', $daysArray);
    
        return view('livewire.setting');
    }

    public function updateDateInterval()
    {
        
        setting::where('id', '1')->update([
            'date_interval' => $this->dateInterval
        ]);

        session()->flash('success', 'Data Date Interval berhasil disimpan!!!!');

    }

    public function updateKuota()
    {
        
        setting::where('id', '1')->update([
            'kuota' => $this->kuota
        ]);

        session()->flash('success', 'Data Kuota berhasil disimpan!!!!');

    }

    public function updateAllowDays()
    {
        dd($this->memek);
        $this->allow_days = allow_day::pluck('allow_days');
        
        setting::where('id', '1')->update([
            'kuota' => $this->kuota
        ]);

        session()->flash('success', 'Data Kuota berhasil disimpan!!!!');

    }


}
