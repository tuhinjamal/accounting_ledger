<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;
//use App\Models\DatabaseModel;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
   //query builder===========================================

		 public function index()
    {
    	
		//return DB::select("select * from asset");    	
    	$data=DB::table('assets')->get();    	
    	return view('qdata',['data'=>$data]);
   		//return (array)DB::table('asset')->find(55);
   		//return DB::table('asset')->count();
    }
    	////aggrigate methods by query
    public function operations()
    {
    	//return DB::table('asset')->sum('cash');    	
    	$data=DB::table('assets')->get();    	
    	$dataa=DB::table('assets')->sum(\DB::raw('cash + receivable+equipment'));
    	$dataaa=DB::table('assets')->sum(\DB::raw('note_pyb + acc_pyb +capital+revenue'));
    	return view('summaary',['data'=>$data,'dataa'=>$dataa,'dataaa'=>$dataaa],);
    	//echo $data;
    	//echo $dataa;
    //->where('id', '7')
    


    }
    //aggrigate methods by query---->end

    //model portion
    public function indexmodel()
    {
    	
		//return LedgerModel::all();
        $data = Asset::paginate(11);
        return view('asset',['ledgers'=>$data]);
    }
    public function datainsert(Request $req)
    {
    	$DatabaseModel=new DatabaseModel;
    	$DatabaseModel->cash=$req->cash;
    	$DatabaseModel->receivable=$req->receivable;
    	$DatabaseModel->equipment=$req->equipment;
    	$DatabaseModel->equipment=$req->equipment;
    	$DatabaseModel->note_pyb=$req->note_pyb;
    	$DatabaseModel->acc_pyb=$req->acc_pyb;
    	$DatabaseModel->capital=$req->capital;
    	$DatabaseModel->drawing=$req->drawing;
    	$DatabaseModel->revenue=$req->revenue;
    	$DatabaseModel->expense=$req->expense;
    	$DatabaseModel->save();
    	return redirect('indexmodel');
    }
    public function datadelete($id)
    {
    	
    	$data=DatabaseModel::find($id);
    	$data->delete();
    	return redirect('indexmodel');
    }
     public function dataedit($id)
    {
    	
    	$data=DatabaseModel::find($id);
    	return view('edit',['data'=>$data]);
    }
    public function update(Request $req)
    {	
    	$data=DatabaseModel::find($req->id);
    	$data->cash=$req->cash;
    	$data->receivable=$req->receivable;
    	$data->equipment=$req->equipment;
    	$data->equipment=$req->equipment;
    	$data->note_pyb=$req->note_pyb;
    	$data->acc_pyb=$req->acc_pyb;
    	$data->capital=$req->capital;
    	$data->drawing=$req->drawing;
    	$data->revenue=$req->revenue;
    	$data->expense=$req->expense;
    	$data->save();
    	return redirect('indexmodel');	
    }
}
