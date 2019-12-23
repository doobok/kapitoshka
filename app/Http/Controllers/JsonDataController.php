<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JsonDataController extends Controller
{
  // get Menu items
  public function menu()
  {

    $menu = DB::table('menu_items')->where('menu_id', 2)->select('id', 'title', 'icon_class', 'parent_id', 'url')->orderBy('order')->get();

    return $menu;

  }
}
