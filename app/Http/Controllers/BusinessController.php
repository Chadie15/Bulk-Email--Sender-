<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BusinessesImport;
use App\Models\Business;
use Excel;

class BusinessController extends Controller
{
    public function import_excel()
    {        
        return view('import_excel');
    }
    public function import_excel_post (Request $request)
    {
        Excel::import(new BusinessesImport, $request->file('excel-file'));
        
        return to_route('show_user.post');
        
    }
    /*public function show_business ()
    {
        $businesses = Business::all();
        return view('send-emails', compact('businesses'));

    }*/

    public function remove_email ($id)
    {
        $data = Business::findOrFail($id);

        $data->delete();

        return redirect()->back();
    }
}
