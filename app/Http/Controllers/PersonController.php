<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    public function index()
    {
      $persons = Person::orderBy('order', 'desc')->get();

      return view('layouts.pages.collective', [
        'persons' => $persons,
      ]);
    }

    public function person($id)
    {
      $persons = Person::findOrFail($id);

      if ($persons->stand === null) {
        return back();
      }

      $stand = date('Y') - 2020 + $persons->stand;

      return view('layouts.pages.person', [
        'page' => $persons,
        'stand' => $stand,
      ]);
    }
}
