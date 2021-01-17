<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\staff;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('staff')->get();
       //return view('user.index',['data'=>$data]);
        return view('home',['data'=>$data]);
    }

    public function create()
    {
        //$data = DB::table('staff')->get();
        //return view('user.create');
        $data = staff::all();
        //$data = login::orderBy('created_at', 'desc')->get();
        return view('user.create', ['data' => $data]);
    }
}
