<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Tag;

class NewsController extends Controller
{

    public function index()
    {
      return view('layouts.pages.news');
    }

    public function tags()
    {
      $tags = Tag::all();
      $arr = collect();
      foreach ($tags as $tag) {
        $chunk = $tag->publications;
        $count = count($chunk);
        if ($count > 0) {
          $tag->setAttribute('count', $count);
          $tag = $tag->only(['count', 'id', 'title', 'slug']);
          $arr->push($tag);
        }
      }

      return $arr;
    }

    public function jsonNews(Request $request)
    {

      if ($request->tag != null) {
        $tag = Tag::where('slug', $request->tag)->first();
        if ($tag != null) {
          $news = $tag->publications()->where('status', 'PUBLISHED')
          ->orderBy('id', 'desc')
          ->skip($request->skip)
          ->take(4)->get();
        } else {
          $news = null;
        }

      } else {
        $news = Publication::where('status', 'PUBLISHED')
        ->orderBy('id', 'desc')
        ->skip($request->skip)
        ->take(4)->get();
      }

      return $news;

    }

    public function article($slug)
    {
        $page = Publication::where('slug', $slug)->firstorfail();

        $created = $page->created_at;
        $created = Carbon::parse($created);
        $created = $created->diffForHumans();

        return view('layouts.pages.news-article', [
        'page' => $page,
        'date' => $created,
        'tags' => $page->tags,

      ]);
    }

}
