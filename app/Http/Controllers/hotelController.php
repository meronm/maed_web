<?php

namespace App\Http\Controllers;
use App\Customer;
use App\Hotel;
use App\Menu;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class hotelController extends Controller
{
    public function getMenu(){
        $user = Auth::user();
        $hotel = Hotel::where('user_id',$user->id)->get()->first();
        $menus= Menu::where('hotel_id',$hotel->id)->orderBy('created_at','desc')->get();
        return view('menu',[
            'user'=>$user,
            'hotel'=>$hotel,
            'menus'=>$menus,
            'activation'=>$hotel->activation
        ]);
    }

    public function addMenu(Request $request){
        $user = Auth::user();
        $hotel = Hotel::where('user_id',$user->id)->get()->first();

        $this->validate($request,[
            'item_name' => 'required',
            'item_price' => 'required|max:12',
            'item_type' => 'required|max:120'
        ]);

        $menu = new Menu();
        $menu->item_name = $request['item_name'];
        $menu->item_price = $request['item_price'];
        $menu->type = $request['item_type'];

        if($hotel->menus()->save($menu)){
            $message = "Menu Successfuly Created";
        }
        $menus= Menu::where('hotel_id',$hotel->id)->orderBy('created_at','desc')->get();
        return view('menu',[
            'user'=>$user,
            'hotel'=>$hotel,
            'menus'=>$menus,
            'message'=>$message,
            'activation'=>$hotel->activation
        ]);

    }

    public function getCustomers(){
        $user = Auth::user();
        $hotel = Hotel::where('user_id',$user->id)->get()->first();
        $customers = Customer::where('hotel_id',$hotel->id)->orderBy('created_at','desc')->get();
        return view('customer',[
            'user'=>$user,
            'hotel'=>$hotel,
            'customers'=>$customers,
            'activation'=>$hotel->activation
        ]);
    }

    public function deleteMenu($menu_id){

        $menu = Menu::where('id',$menu_id)->get()->first();
        $menu->delete();

        return redirect()->route('menu');
    }

    public function editMenu($menu_id){

        $menu = Menu::where('id',$menu_id)->get()->first();
        $user = Auth::user();
        $hotel = Hotel::where('user_id',$user->id)->get()->first();
        return view('editMenu',[
            'menu'=>$menu,
            'user'=>$user,
            'hotel'=>$hotel,
            'activation'=>$hotel->activation
        ]);
    }

    public function updateMenu(Request $request){

        $this->validate($request,[
            'item_name' => 'required',
            'item_price' => 'required|max:12',
            'item_type' => 'required|max:120'
        ]);

        $menu = Menu::where('id',$request['id'])->get()->first();
        $menu->item_name = $request['item_name'];
        $menu->item_price = $request['item_price'];
        $menu->type = $request['item_type'];
        $menu->update();
        return redirect()->route('menu');
    }


    public function deleteOrder($order_id){

        $order = Order::where('id',$order_id)->get()->first();
        $order->delete();

        return redirect()->route('orders');
    }

    public function getOrders(){
        $user = Auth::user();
        $hotel = Hotel::where('user_id',$user->id)->get()->first();
        $orders = Order::where('hotel_id',$hotel->id)->orderBy('created_at','desc')->get();

        return view('orders',[
            'user'=>$user,
            'hotel'=>$hotel,
            'orders'=>$orders,
            'activation'=>$hotel->activation
        ]);

    }

    public function getAccount(){
        $user = Auth::user();
        $hotel = Hotel::where('user_id',$user->id)->get()->first();

        return view('account',[
            'user'=>$user,
            'hotel'=>$hotel,
            'activation'=>$hotel->activation
        ]);
    }

    public function saveAccount(Request $request){
        $user = Auth::user();
        $hotel = Hotel::where('user_id',$user->id)->get()->first();

        $hotel->hotel_name = $request['hotel_name'];
        $hotel->address = $request['address'];
        $hotel->phone_number = $request['phone_number'];
        $hotel->about = $request['about'];

        $hotel->update();
        return redirect()->route('dashboard');

    }

}
