<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

    public function getDashboard(){
        $user = Auth::user();

        if($user->user_type == 1){
            $hotels = Hotel::orderBy('created_at','desc')->get();
            return view('admin',['user'=>$user,'hotels'=>$hotels]);
        }
        else{
        $hotel = Hotel::where('user_id',$user->id)->get()->first();
        return view('dashboard',[
                            'user'=>$user,
                            'hotel'=>$hotel,
                            'activation'=>$hotel->activation

        ]);
        }
    }

    public function activate(Hotel $hotel){
        $hotel->activation = 1;
        $hotel->update();
        return redirect()->route('dashboard');
    }

    public function deactivate(Hotel $hotel){
        $hotel->activation = 0;
        $hotel->update();
        return redirect()->route('dashboard');
    }


    public function SignUPAction(Request $request){

        $this->validate($request,[
            'user_name' => 'required|unique:users',
            'first_name' => 'required|max:120',
            'middle_name' => 'required|max:120',
            'last_name' => 'required|max:120',
            'hotel_name' => 'required|max:120|unique:hotels',
            'password' => 'required|min:4'
        ]);

        $user_name = $request['user_name'];
        $first_name = $request['first_name'];
        $middle_name = $request['middle_name'];
        $last_name = $request['last_name'];
        $hotel_name = $request['hotel_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->user_name = $user_name;
        $user->first_name = $first_name;
        $user->middle_name = $middle_name;
        $user->last_name = $last_name;
        $user->user_type = 2;
        $user->password = $password;

        $hotel = new Hotel();
        $hotel->hotel_name = $hotel_name;
        $user->save();
        $user->hotels()->save($hotel);

        Auth::login($user);

        return redirect()->route('dashboard');

    }

    public function SignIn(Request $request){

        $this->validate($request,[
            'user_name' => 'required',
            'password' => 'required'
        ]);


        if(Auth::attempt(['user_name'=>$request['user_name'],'password'=>$request['password']])){
            return redirect()->route('dashboard');
        }
        else{
            $bad_request = "Incorrect User Name Or Password";
            return redirect()->route('home')->with(['bad_request'=> $bad_request]);
        }


    }


    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }



}
