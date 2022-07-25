<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class CustomiseController extends Controller
{
    function index()
    {
        // getting the all category
        $cabinate_id =  DB::table('subcategories')->where('slug', 'LIKE', '%cabinate%')->first()->id ?? '';
        $processor_id =  DB::table('subcategories')->where('slug', 'LIKE', '%processor%')->first()->id ?? '';
        $motherboard_id =  DB::table('subcategories')->where('slug', 'LIKE', '%mother-board%')->first()->id ?? '';
        $graphic_card_id =  DB::table('subcategories')->where('slug', 'LIKE', '%graphic-card%')->first()->id ?? '';
        $smps_id =  DB::table('subcategories')->where('slug', 'LIKE', '%smps%')->first()->id ?? '';
        $corsair_id =  DB::table('subcategories')->where('slug', 'LIKE', '%corsair%')->first()->id ?? '';
        $ram_id =  DB::table('subcategories')->where('slug', 'LIKE', '%ram%')->first()->id ?? '';
        $coolers_id =  DB::table('subcategories')->where('slug', 'LIKE', '%coolers%')->first()->id ?? '';
        $wifi_id =  DB::table('subcategories')->where('slug', 'LIKE', '%wifi%')->first()->id ?? '';
        $os_id =  DB::table('subcategories')->where('slug', 'LIKE', '%operating-system%')->first()->id ?? '';

        // getting the all category of product data
        $cabinate = DB::table('products')->where('subcategory_id', $cabinate_id)->get();
        $processor = DB::table('products')->distinct('brand', 'subcategory_id')->where('subcategory_id', $processor_id)->get();
        $motherboard = DB::table('products')->where('subcategory_id', $motherboard_id)->get();
        $graphic_card = DB::table('products')->where('subcategory_id', $graphic_card_id)->get();
        $smps = DB::table('products')->where('subcategory_id', $smps_id)->get();
        $corsair = DB::table('products')->where('subcategory_id', $corsair_id)->get();

        $ram = DB::table('products')->where('subcategory_id', $ram_id)->get();
        $coolers = DB::table('products')->where('subcategory_id', $coolers_id)->get();
        $wifi = DB::table('products')->where('subcategory_id', $wifi_id)->get();
        $os = DB::table('products')->where('subcategory_id', $os_id)->get();

        return view('livewire.customise-component', [
            'cabinate' => $cabinate,
            'processor' => $processor,
            'motherboard' => $motherboard,
            'graphic_card' => $graphic_card,
            'smps' => $smps,
            'corsair'=>$corsair,
            'ram' => $ram,
            'coolers' => $coolers,
            'wifi' => $wifi,
            'os' => $os,
        ]);
    }

    public function ajaxGet($category)
    {
        
        $products = DB::table('products')->where('slug', $category)->get();
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
            echo '<option value="' . $product->name . '">' . $product->name . '</option>';
        }
    }
}
