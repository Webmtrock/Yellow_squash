<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebinarsController extends Controller
{
   public function index()
   {
    return view('admin.webinar.index');
   }
   public function create()
   {
    return view('admin.webinar.create');
   }
}
