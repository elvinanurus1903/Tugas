<?php

namespace App\Exports;

use App\Upload;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;

class SiswaExport implements FromView
{
     use Exportable;
    
    public function view(): View
    {
        return view('excel.users', [
            'users' => Upload::all()
        ]);
    }
}
