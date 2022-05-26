<?php

namespace App\Http\Livewire;

use App\Models\BrandSlider;
use App\Models\Category;
use App\Models\HomeBanner;
use App\Models\Product;
use App\Models\HomeCategory;
use App\Models\HomeSlider;
use App\Models\HomeCoupon;
use Livewire\Component;
use Cart;

class HomeComponent extends Component
{

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added to cart');
        return redirect()->route('product.cart');
    }
    public function render()
    {
        $banners = HomeBanner::where('status', 1)->get();
        $coupons =  HomeCoupon::where('status', 1)->get();
        $sliderss = HomeSlider::where('status', 1)->get();
        $sliders = BrandSlider::where('status', 1)->get();
        $lproducts = Product::orderBy('created_at', 'DESC')->get()->take(8);
        $category = HomeCategory::find(1);
        $cats = explode(',', $category->sel_categories);
        $categories = Category::whereIn('id', $cats)->get();
        $no_of_products = $category->num_of_products;
        return view('livewire.home-component', ['lproducts' => $lproducts, 'categories' => $categories, 'no_of_products' => $no_of_products, 'sliders' => $sliders, 'sliderss' => $sliderss, 'coupons' => $coupons, 'banners' => $banners])->layout('layouts.base');
    }
}
