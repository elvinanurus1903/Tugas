<?php

namespace App\Http\Controllers;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use PDF; 
use App\Upload;

class excelController extends Controller
{
      public function export_excel()
    {
        return Excel::download(new SiswaExport, 'siswa.xlsx');
    }

        public function cetak_pdf()
    {
    	$data = Upload::all();
 
    	$pdf = PDF::loadview('data-pdf',['data'=>$data]);
    	return $pdf->download('laporan-data-pdf');
    }
}