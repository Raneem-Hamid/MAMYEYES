<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
    }
    public function view($id)
    {
       $user=User::find($id);
       return view('Users.profile',compact('user'));
    }


    public function create()
    {
        return view('Users.register');
    }

    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'name' => 'required | min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

        ]);
        $user = new User();

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->password = Hash::make($request->get('password'));
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move("upload/image", $filename);
            $user['image'] = $filename;
        }
        $user->image=$filename;
       
        $user->save();


        return redirect('/');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('Users.editprofile', compact('user'));
    }
    public function update(request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',

        ]);

        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move("upload/image", $filename);
            $user->image = $filename;
        }

        $user->update();
        return redirect()->to('profile/' . $id);;
    }


}
