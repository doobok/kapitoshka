<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();

        $created = $page->created_at;
        $created = Carbon::parse($created);
        $created = $created->diffForHumans();

        return view('layouts.pages.page', [
        'page' => $page,
        'date' => $created,
      ]);
    }

    public function contacts()
    {
      return view('layouts.pages.contacts');
    }
}
