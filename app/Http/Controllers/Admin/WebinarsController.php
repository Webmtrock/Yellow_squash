<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Expert;
use App\Models\Week;
use App\Models\Time;
use App\Models\WibinerUser;
use App\Models\WibinerSession;
use App\Models\WibinerWillLearn;
use App\Models\WibinerItFor;

class WebinarsController extends Controller
{
   public function index()
   { 

      $wibineruser = WibinerUser ::all();

      
     return view('admin.webinar.index',compact('wibineruser'));
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
      //return $request;
   //    $request->validate([
   //       'title' => 'required | string | unique:permissions,title,'.$request->id,
   //   ]);

       $imagePath = config('app.profile_image');
       $data = WibinerUser::updateOrCreate(
         [
             'id' => $request->id,
         ],
         [
             'category_id' => $request->category_id,
             'description' => $request->description,
             'title' => $request->title,
             'expert_id' => $request->expert_id,
             'webinar_video' => $request->webinar_video,
             'webinar_start_date' => $request->webinar_start_date,
             'day' => $request->day,
             'duration' => $request->duration,
             'start_time' => $request->start_time,
             'end_time'   => $request->end_time,
             'webinar_price' => $request->webinar_price,
             'whatsapp_link' => $request->whatsapp_link,
             'profile_image' => $request->hasfile('profileImage') ? Helper::storeImage($request->file('profileImage'), $imagePath, $request->profileImageOld) : (isset($request->profileImageOld) ? $request->profileImageOld : ''),
         ]
     );
     
if ($data) {
    $headings = $request->heading;
    $defination = $request->defination;

    if (count($headings) == count($defination)) {
        foreach ($headings as $index => $heading) {
            $session = WibinerSession::create([
                'wibiner_user_id' => $data->id,
                'heading' => $heading,
                'definition' => $defination[$index],
            ]);
        }
        return redirect()->back()->with('success', 'Sessions added successfully.');
    } else {
        return redirect()->back()->with('error', 'Arrays must have the same length.');
    }
}






   //   if ($data) {
   //       return redirect()->back('webinar.index')->with('success', 'created successfully.');

   //   } else {
   //       return redirect()->back()->with('error', 'Something went wrong, please try again.');
   //   }
      // return view('admin.webinar.create');
   }


 public function edit($id)
 { 
   return $id;
   return view('admin.webinar.create');
 }

}
