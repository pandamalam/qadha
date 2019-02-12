<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
     public function subuh()
    {
    $subuh = Auth::user()->sholat->where('status','=','belum')->where('sholat','=','subuh')->paginate(5);
        return view('solat.subuh',compact('subuh'));
    }   
    public function dzuhur()
    {
    $dzuhur = Auth::user()->sholat->where('status','=','belum')->where('sholat','=','dzuhur')->paginate(5);
        return view('solat.dzuhur',compact('dzuhur'));
    }   
    public function ashar()
    {
    $ashar = Auth::user()->sholat->where('status','=','belum')->where('sholat','=','ashar')->paginate(5);
        return view('solat.ashar',compact('ashar'));
    }   
    public function magrib()
    {
    $magrib = Auth::user()->sholat->where('status','=','belum')->where('sholat','=','magrib')->paginate(5);
        return view('solat.magrib',compact('magrib'));
    }   
    public function isya()
    {
    $isya = Auth::user()->sholat->where('status','=','belum')->where('sholat','=','isya')->paginate(5);
        return view('solat.isya',compact('isya'));
    }   
}
