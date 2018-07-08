<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class Menucontroller extends Controller
{
  public function __construct()
  {

      $this->middleware('auth');

  }

  public function create(Request $request)
  {

  $name1=$request->name1;
  $name2=$request->nameurl;
  $mot = DB::select('select max(vitri) as vi from menu; ',[1]);
  foreach ($mot as $one);
  if ($one->vi)
  {
  echo DB::insert('insert into menu (id,ten, slug,vitri) values (?, ?,?,?)', [NULL, $name1,$name2,(int)$one->vi+1]);
  }
  else {
  echo DB::insert('insert into menu (id,ten, slug,vitri) values (?, ?,?,?)', [NULL, $name1,$name2,1]);
}
return view('menu_create');
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
