<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\QadhaSholat;
use DateTime;
class SolatController extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth');
    }


        public function edit($id)
    {

        $sholat =  QadhaSholat::find($id);
        return view('qadasolat', compact('sholat'));
    }

 public function update(Request $request, $id)
    {

        $sholat =  QadhaSholat::find($id);
         $sholat -> update([
        'status' => "sudah",
        'tanggal_qadha' => request('t_qadha'),
        'qabliyah' => request('qa'),
        'badiyah' => request('ba'),
    ]);
return redirect()->route('home')->with('message', 'IT WORKS!');

            }
    
    public function create()
    {
        return view('solat');
    }


     public function store(request $request)
    {
    	$start_date = new DateTime(request('tanggal_awal'));
$end_date = new DateTime(request('tanggal_akhir'));
$interval = $start_date->diff($end_date);
$interval1 = "$interval->days";
$interval1 += "1";
$uid = Auth::user()->id;
$sholat = request('sholat');
$tanggal = request('tanggal_awal');
for ($i=1; $i <= $interval1 ; $i++) { 
    	QadhaSholat::create([
		'uid' => $uid,
		'sholat' => $sholat,
		'tanggal_tinggal' => $tanggal++
	]);
    	}
return redirect()->back()->with('message', 'IT WORKS!');


	    }


}
