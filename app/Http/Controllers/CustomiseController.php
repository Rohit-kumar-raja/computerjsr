<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomiseController extends Controller
{
    function index()
    {
        // getting the all category
        $cabinate_id =  DB::table('subcategories')->where('slug', 'LIKE', '%cabinet%')->first()->id ?? '';
        $processor_id =  DB::table('subcategories')->where('slug', 'LIKE', '%processor%')->first()->id ?? '';
        $motherboard_id =  DB::table('subcategories')->where('slug', 'LIKE', '%motherboard%')->first()->id ?? '';
        $graphic_card_id =  DB::table('subcategories')->where('slug', 'LIKE', '%graphic cards%')->first()->id ?? '';
        $smps_id =  DB::table('subcategories')->where('slug', 'LIKE', '%smps%')->first()->id ?? '';
        $corsair_id =  DB::table('subcategories')->where('slug', 'LIKE', '%corsair%')->first()->id ?? '';
        $ram_id =  DB::table('subcategories')->where('slug', 'LIKE', '%ram%')->first()->id ?? '';
        $coolers_id =  DB::table('subcategories')->where('slug', 'LIKE', '%cpu fan%')->first()->id ?? '';
        $wifi_id =  DB::table('subcategories')->where('slug', 'LIKE', '%wifi%')->first()->id ?? '';
        $os_id =  DB::table('subcategories')->where('slug', 'LIKE', '%operating-system%')->first()->id ?? '';





        // getting the all category of product data
        $cabinate = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $cabinate_id)->get();
        $processor = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $processor_id)->get();
        $motherboard = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $motherboard_id)->get();
        $graphic_card = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $graphic_card_id)->get();
        $smps = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $smps_id)->get();
        $corsair = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $corsair_id)->get();

        $ram = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $ram_id)->get();
        $coolers = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $coolers_id)->get();
        $wifi = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $wifi_id)->get();
        $os = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $os_id)->get();



        return view('livewire.customise-component', [
            'cabinate' => $cabinate,
            'processor' => $processor,
            'motherboard' => $motherboard,
            'graphic_card' => $graphic_card,
            'smps' => $smps,
            'corsair' => $corsair,
            'ram' => $ram,
            'coolers' => $coolers,
            'wifi' => $wifi,
            'os' => $os,
        ]);
    }

    public function ajaxGet($data)
    {
        $category = explode('@', $data)[0];
        $products = DB::table('products')->where('slug', 'LIKE', '%' . $category . '%')->get();
        foreach ($products as $product) {
            echo '<option value="' . $product->brand . '">' . $product->brand . '</option>';
        }
    }

    public function ajaxBrand($data)
    {
        $brand = explode('|', $data)[0];
        $category = explode('|', $data)[1];
        $products = DB::table('products')->where('brand', $brand)->where('subcategory_id', $category)->get();
        foreach ($products as $product) {
            echo '<option value="' . $product->name . '@' . $product->sale_price . '">' . $product->name . '  + ₹ ' . $product->sale_price . '</option>';
        }
    }

    public function ajaxStorage($type)
    {
        $type_id =  DB::table('subcategories')->where('slug', 'LIKE', '%' . $type . '%')->first()->id ?? '';
        $products = DB::table('products')->where('subcategory_id', $type_id)->get();
        foreach ($products as $product) {
            echo '<option value="' . $product->name . '@' . $product->sale_price . '">' . $product->name . '  + ₹ ' . $product->sale_price . '</option>';
        }
    }

    public function getImage($data)
    {
        $category = explode('@', $data)[0];
        $products = DB::table('products')->where('slug', 'LIKE', '%' . $category . '%')->first();
        return asset('assets/pages/img/products') . '/' . $products->image;
    }

    public function storeData(Request $request)
    {
        try {
            DB::table('custome_pcs')->insert($request->except('_token'));
            return redirect()->route('customise.fetchUser');
            // return back()->with('success', 'Your Request has been sent Reicived we will contact you soon');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function fetchUser()
    {
        $user = DB::table('custome_pcs')->where('user_id', Auth::user()->id)->get();
        return view('livewire.user.user-custome-pc', ['data' => $user]);
    }

    public function printUser($id)
    {
        $user = DB::table('custome_pcs')->where('user_id', Auth::user()->id)->where('id', $id)->first();
        return view('livewire.user.custom-pc-invoice-component', ['data' => $user]);
    }

    public function fetchAdmin()
    {
        $user = DB::table('custome_pcs')->get();
        return view('livewire.admin.custome_pc.index', ['data' => $user]);
    }
    public function printAdmin($id)
    {
        $user = DB::table('custome_pcs')->where('id', $id)->first();
        return view('livewire.user.custom-pc-invoice-component', ['data' => $user]);
    }
}
