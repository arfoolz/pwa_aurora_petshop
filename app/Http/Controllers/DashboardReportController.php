<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

use App\Exports\reportExport;
use Maatwebsite\Excel\Facades\Excel;

class DashboardReportController extends Controller
{
    
    public function index()
    {
        $dtReport = Report::all();
        return view ('Admin.Report.Report', compact('dtReport'));
    }


    public function reportExportExel(){
        return Excel::download(new ReportExport, 'Report.xlsx');
    }

    // public function reportIxportExel(Request $request){
    //     $file = $request->file('file');
    //     $namaFile = $file->getClientOriginalName();
    //     $file->move('DataReport', $namaFile);

    //     Excel::import(new)
    // }
   

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
