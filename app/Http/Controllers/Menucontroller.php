<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
//use App\Http\Requests;
//use App\Http\Controllers\Controller;
class Menucontroller extends Controller
{
  public function __construct()
  {

      $this->middleware('auth');

  }

  public function create(Request $request)
  {

  //var_dump( $request->all());
  $name1=$request->name1;
  $name2=$request->nameurl;
  echo DB::insert('insert into menu (id,ten, slug,vitri) values (?, ?,?,?)', [NULL, $name1,$name2,1]);


  }

  public function edit()
  {

    return view('menu_create');

  }

  public function load()
  {

    return view('menu_create');

  }

  public function delete()
  {

    return view('menu_create');

  }

  public function Guiedit()
  {

    return view('menu_create');

  }

  public function Guicreate()
  {

    return view('menu_create');

  }
}
