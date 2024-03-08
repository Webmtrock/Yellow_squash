<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Expert;
use App\Models\Week;
use App\Models\Time;

class WebinarsController extends Controller
{
   public function index()
   {
    return view('admin.webinar.index');
   }
   public function create()
   { 
      $categories = Category::all();
      $experts = Expert ::all();
      $weeks = Week ::all();
      $times = Time ::all();
      return view('admin.webinar.create',  compact('categories','experts','weeks','times'));
   }
   public function store(Request $request)
   { 
      return $request;
    return view('admin.webinar.create');
   }
}
