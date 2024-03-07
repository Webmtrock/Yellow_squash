<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
   
  
  public function index()
  {
    $users = User::all();
    return view('admin.users.index', compact('users'));
}

public function create()
{
    return view('admin.users.create');
}

public function saveUser(Request $request, $id = null)
{
    $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email',
        'phone' => 'required|string|max:20',
    ];

    if ($id !== null) {
        $rules['email'] .= ',' . $id;
    }

    $request->validate($rules);

    $user = $id ? User::findOrFail($id) : new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;

    // Check if 'status' exists in the request and is not null
    if ($request->has('status')) {
        $user->status = $request->status;
    }

    $user->save();

    $message = $id ? 'User Updated successfully' : 'User Added successfully';

    return redirect()->route('users.index')->with('success', $message);
}

public function edit($id)
{
    $user = User::findOrFail($id);
    return view('admin.users.update', compact('user'));
}

public function store(Request $request)
{
    return $this->saveUser($request);
}

public function update(Request $request, $id)
{
    return $this->saveUser($request, $id);
}


public function delete($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('users.index')->with('success', 'User Deleted successfully');
}


}
