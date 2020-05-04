<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportsController extends Controller
{
  public function index($category)
  {
    $reports = Report::where('category', $category)->orderBy('created_at', 'desc')->get();

    return view('layouts.pages.reports', [
      'reports' => $reports,
      'category' => $category,
    ]);
  }
}
