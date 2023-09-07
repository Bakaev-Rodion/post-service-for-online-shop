<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Package;
use App\Models\Receiver;
use App\Models\Post;
class DeliveryController extends Controller
{
    public function index(){
        return view('client.index',['posts'=>Post::all()->toArray()]);
    }
    public function create(Request $request, Package $package, Receiver $receiver)
    {

        $request -> validate([
            'width'=>'required|regex:/^\d*(\.\d{2})?$/',
            'height'=>'required|regex:/^\d*(\.\d{2})?$/',
            'length'=>'required|regex:/^\d*(\.\d{2})?$/',
            'weight'=>'required|regex:/^\d*(\.\d{2})?$/',
            'full_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'phone_number' => 'required|numeric|digits:10',
            'email'=>'required',
            'address'=>'required'
        ]);

        /* to add new Post service you need to add it to Database via database/seeders/PostsTableSeeder.php or manually

        Example need to paste into switch-construction and :

        case *id of Post service*:
            $response = Http::post(*url of API*, [
                "param 1" => *param_1*,
                "param 2" => *param_2*,
                ...
            ]);

        */

        switch($request['post']) {
            case 1:
                $response = Http::post('https://novaposhta.test/api/delivery', [
                    "customer_name" => $request['full_name'],
                    "phone_number" => $request['phone_number'],
                    "email" => $request['email'],
                    "sender_address" => config('app.address'),
                    "delivery_address" => $request['address']
                ]);
            case 2:
                $response = Http::post('https://ukrposhta.test/api/delivery', [
                    "customer_name" => $request['full_name'],
                    "phone_number" => $request['phone_number'],
                    "email" => $request['email'],
                    "sender_address" => config('app.address'),
                    "delivery_address" => $request['address']
                ]);
            case 3:
                $response = Http::post('https://justin.test/api/delivery', [
                    "customer_name" => $request['full_name'],
                    "phone_number" => $request['phone_number'],
                    "email" => $request['email'],
                    "sender_address" => config('app.address'),
                    "delivery_address" => $request['address']
                ]);
            default:
                $response = null;
        }

         $package->fill($request->only(['width','height','length','weight','post']))->save();
         $receiver->fill($request->only(['full_name','phone_number','email','address']),)->save();
        dd($response); // for testing, comment it when done
        //return view('client.data',['response'=>$response]);

    }

}
