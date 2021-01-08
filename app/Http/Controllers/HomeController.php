<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Newcatalog;
use App\Models\Order;
use App\Http\Requests;
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
        $catalogs = Newcatalog::orderBy('name')->get();
        $objs = Order::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(30);
        return view('home', compact('catalogs', 'objs'));
    }

    public function postIndex(Requests\OrderRequest $r){
        $r['user_id']=Auth::user()->id;
        unset($r['_token']);
        $pic = \App::make('\App\libs\Imag')->url($_FILES['picture1']['tmp_name']);
        if(!$pic){
            $pic = '';
        }
        $r['picture'] = $pic;
        Order::create($r->all());
        return redirect()->back();

        //dd($r->all());
    }
}
