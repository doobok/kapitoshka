<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller
{

    public function index()
    {
      return view('layouts.pages.news');
    }

    public function jsonNews(Request $request)
    {
      return Publication::where('status', 'PUBLISHED')
        ->orderBy('id', 'desc')
        ->skip($request->skip)
        ->take(4)->get();
    }

    public function article($slug)
    {
        $page = Publication::where('slug', $slug)->first();

        $created = $page->created_at;
        $created = Carbon::parse($created);
        $created = $created->diffForHumans();

        return view('layouts.pages.news-article', [
        'page' => $page,
        'date' => $created,

      ]);
    }

}
