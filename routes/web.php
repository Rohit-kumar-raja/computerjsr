<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\PincodeController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\WalletController;
use App\Http\Controllers\PdfController;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddFeatureCcomponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ServiceuseComponent;
use App\Http\Livewire\ReturnPolicyComponent;
use App\Http\Livewire\ShippingPolicyComponent;
use App\Http\Livewire\PrivacyPolicyComponent;
use App\Http\Livewire\TermuseComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\Admin\HomeCouponComponent;
use App\Http\Livewire\Admin\HomeAddCouponComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;
use App\Http\Livewire\Admin\AdminHomeSliderComponent;
use App\Http\Livewire\Admin\AdminAddHomeSliderComponent;
use App\Http\Livewire\Admin\AdminEditHomeSliderComponent;
use App\Http\Livewire\Admin\AdminFeatureComponent;
use App\Http\Livewire\Admin\AdminOrderComponent;
use App\Http\Livewire\Admin\AdminOrderDetailsComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\ThankYouComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserEditProfileComponent;
use App\Http\Livewire\User\UserOrderDetailsComponent;
use App\Http\Livewire\User\UserOrdersComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserReviewComponent;
use App\Http\Livewire\WishListComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\Admin\GreatOfferController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\CustomiseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PayuMoneyController;
use App\Http\Controllers\RentController;

// authenticating with otp start
Route::post('opt/send', [OtpController::class, 'register'])->name('register.otp');
Route::post('opt/verify', [OtpController::class, 'verifyOtp'])->name('verify.otp');
Route::get('create/new/user/{user}', [CreateNewUser::class, 'create'])->name('create.new.user');
// end

// login routes
Route::post('login/verify', [LoginController::class, 'login'])->name('login.verify');
Route::post('login/with/otp', [LoginController::class, 'loginWithOtp'])->name('login.with.otp.generate');
Route::get('login/with/otp', function () {
    return view('auth.loginwith');
})->name('login.with');
Route::get('login/with/otp/varify', function () {
    return view('auth.varify-mobile-with-otp');
})->name('login.with.verify');
Route::post('login/with/otp/verify', [LoginController::class, 'loginWithOtpVerify'])->name('login.with.otp.verify');

// end

Route::get('/', HomeComponent::class)->name('index');
Route::get('/cart/{product_id}', [CartController::class, 'store'])->name('addcart');
Route::post('cart/addwith', [CartController::class, 'addwith'])->name('addwith');
Route::post('cart/addwithonemore', [CartController::class, 'cartAddOneMore'])->name('cart.addwithmore');

Route::get('/shop', ShopComponent::class)->name('product.shop');
// Route::get('/shop/{sort}/{item}', ShopComponent::class)->name('product.shop');
// cart start
Route::get('/cart', CartComponent::class)->name('product.cart');
Route::get('/cart/increase/{rowid}', [CartComponent::class, 'increaseQuantity'])->name('product.increase');
Route::get('/cart/decrease/{rowid}', [CartComponent::class, 'decreaseQuantity'])->name('product.decrease');
Route::get('/cart/del/{rowid}', [CartComponent::class, 'del'])->name('product.del');
Route::get('cart/checkout', CheckoutComponent::class)->name('cart.checkout');
// cart end

// wishlist start
Route::get('/customise', []);


// wishlist end


Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/checkout/coin/use', CheckoutComponent::class)->name('checkout.coin.use');

Route::post('/checkout/placeOrder', [CheckoutComponent::class, 'placeOrder'])->name('checkout.placeOrder');
Route::get('/checkout/order/edit/{id}', [CheckoutComponent::class, 'edit_address'])->name('checkout.edit.address');



Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('product/pincode/', [ProductDetailsController::class, 'pincode'])->name('product.details.pincode');
Route::get('product/coupon/', [ProductDetailsController::class, 'coupon'])->name('product.details.coupon');

Route::get('product/pincode/{pincode}', [ProductDetailsController::class, 'pincode']);
Route::get('product/coupon/{coupon}', [ProductDetailsController::class, 'coupon']);

Route::get('/search', SearchComponent::class)->name('product.search');

Route::get('/product-category/{category_slug}/{scategory_slug?}', CategoryComponent::class)->name('product.category');

// wishlist start
Route::get('wishlist/add/{id}', [ShopComponent::class, 'add'])->name('wishlist.add');
Route::get('wishlist/remove/{id}', [ShopComponent::class, 'remove'])->name('wishlist.remove');
Route::get('/wishlist', WishListComponent::class)->name('product.wishlist');
Route::get('wishlist/movetocart/{id}', [WishListComponent::class, 'moveProductFromWishlistToCart'])->name('wishlist.movetocart');
// wishlist end


Route::get('/thank-you', ThankYouComponent::class)->name('thankyou');
Route::get('/aboutus', AboutComponent::class);
Route::get('/serviceuse', ServiceuseComponent::class);
Route::get('/returnpolicy', ReturnPolicyComponent::class);
Route::get('/shippingpolicy', ShippingPolicyComponent::class);
Route::get('/privacypolicy', PrivacyPolicyComponent::class);
Route::get('/termuse', TermuseComponent::class);
Route::get('amc/packages', [PackageController::class, 'index'])->name('amc.package');

Route::get('customise',[CustomiseController::class,'index'])->name('customise');
Route::get('customise/{category}',[CustomiseController::class,'ajaxGet'])->name('customise.ajax');
Route::get('customise/brand/{brand}',[CustomiseController::class,'ajaxBrand'])->name('customise.ajaxbrand');


// For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/orders', UserOrdersComponent::class)->name('user.orders');
    Route::get('/user/order/{order_id}', UserOrderDetailsComponent::class)->name('user.orderdetails');
    Route::post('/user/order/cancel', [ProductDetailsController::class, 'cancelOrder'])->name('user.order.cancel');
    // for orignal bill printing
    Route::get('/user/orders/orignal/bill/{id}', [OrderController::class,'finalBill'])->name('user.orders.finalbill');

    Route::get('/user/review/{order_item_id}', UserReviewComponent::class)->name('user.review');
    Route::post('/user/review/add', [UserReviewComponent::class, 'addReview'])->name('user.review.add');
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('/user/profile/edit', UserEditProfileComponent::class)->name('user.editprofile');
    Route::post('/user/profile/update', [UserEditProfileComponent::class, 'updateProfile'])->name('user.update');

    // Route::get('/get/order/{order_id}', [PdfController::class, 'getAllOrders']);
    // Route::get('/download-pdf', [PdfController::class, 'downloadPDF']);
    Route::get('/getor', [PdfController::class, 'viewCart']);
    Route::get('/download-pdf', [PdfController::class, 'printCart'])->name('download-pdf');
    // rent section start
    Route::get('/rent/form', [RentController::class, 'index'])->name('rent');
    Route::post('/rent/form/sale', [RentController::class, 'store'])->name('rent.sale');
    Route::get('/rent/history', [RentController::class, 'rentHistoryForUser'])->name('rent.user.history');

    // rent end

    // amc package start
    Route::get('amc/packages/details/buy/{id}', [PackageController::class, 'details'])->name('amc.package.details');
    Route::post('amc/packages/details/buy/', [PackageController::class, 'buy'])->name('amc.package.buy');
    Route::get('amc/packages/history', [PackageController::class, 'packagetHistoryForUser'])->name('amc.package.user.history');

    Route::get('amc/packages/order/{id}', [PackageController::class, 'getOrderDetails'])->name('amc.package.user.order');
    Route::get('amc/packages/invoice/{id}', [PackageController::class, 'invoice'])->name('amc.package.user.invoice');

    // amc packges end
});


// For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    // category
    Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/delete/{id}', [AdminCategoryComponent::class, 'deleteCategory'])->name('admin.category.delete');
    Route::post('/admin/add/category', [AdminAddCategoryComponent::class, 'storeCategory'])->name('admin.category.add');
    Route::get('/admin/category/edit/{category_slug}/{scategory_slug?}/{feature_slug?}', AdminEditCategoryComponent::class)->name('admin.editcategory');

    // subcategory star
    Route::get('/admin/subcategories', [SubCategoryController::class, 'index'])->name('admin.subcategories');
    Route::post('/admin/subcategory/add', [SubCategoryController::class, 'store'])->name('admin.subCategory.add');
    Route::get('/admin/subcategory/edit/{id}', [SubCategoryController::class, 'edit'])->name('admin.SubCategory.edit');
    Route::post('/admin/subcategory/update', [SubCategoryController::class, 'update'])->name('admin.SubCategory.update');
    Route::get('/admin/subcategory/delete/{id}', [SubCategoryController::class, 'destroy'])->name('admin.SubCategory.delete');
    // subcategory end

    // product start
    Route::get('/admin/products', AdminProductComponent::class)->name('admin.products');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::post('/admin/product/store', [AdminAddProductComponent::class, 'store'])->name('admin.addproduct.store');
    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');
    Route::post('/admin/product/update', [AdminEditProductComponent::class, 'update'])->name('admin.edit.product.update');
    Route::get('/admin/home-categories', AdminHomeCategoryComponent::class)->name('admin.homecategories');
    Route::get('/admin/orders', AdminOrderComponent::class)->name('admin.order');
    Route::get('/admin/order/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');
    // product end


    Route::get('admin/feature/add', AdminAddFeatureCcomponent::class)->name('admin.addfeature');
    Route::get('admin/features/{feature_slug?}', AdminFeatureComponent::class)->name('admin.features');
    
    Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.slider');
    Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addslider');
    Route::get('/admin/slider/edit/{slider_id}', AdminEditHomeSliderComponent::class)->name('admin.editslider');
    Route::get('/admin/coupon', HomeCouponComponent::class)->name('admin.coupon');
    Route::get('/admin/coupon/add', HomeAddCouponComponent::class)->name('admin.addcoupon');
  
    Route::get('/admin/wallet', [WalletController::class, 'index'])->name('admin.wallet');
    Route::post('/admin/wallet/add', [WalletController::class, 'store'])->name('admin.wallet.add');
    Route::get('/admin/wallet/edit/{id}', [WalletController::class, 'edit'])->name('admin.wallet.edit');
    Route::post('/admin/wallet/update/{id}', [WalletController::class, 'update'])->name('admin.wallet.update');
    Route::get('/admin/wallet/delete/{id}', [WalletController::class, 'destroy'])->name('admin.wallet.destroy');
    Route::get('/admin/wallet/status/{id}', [WalletController::class, 'status'])->name('admin.wallet.status');

    // pin code start
    Route::get('/admin/pincode', [PincodeController::class, 'index'])->name('admin.pincode');
    Route::post('/admin/pincode/add', [PincodeController::class, 'store'])->name('admin.pincode.add');
    Route::get('/admin/pincode/edit/{id}', [PincodeController::class, 'edit'])->name('admin.pincode.edit');
    Route::post('/admin/pincode/update/{id}', [PincodeController::class, 'update'])->name('admin.pincode.update');
    Route::get('/admin/pincode/delete/{id}', [PincodeController::class, 'destroy'])->name('admin.pincode.destroy');
    Route::get('/admin/pincode/status/{id}', [PincodeController::class, 'status'])->name('admin.pincode.status');
    Route::post('/admin/pincode/import', [PincodeController::class, 'import'])->name('admin.pincode.import');
    Route::get('/admin/pincode/search', [PincodeController::class, 'search'])->name('admin.pincode.search');


    // pin code end

    // users code start
    Route::get('/admin/users', [UsersController::class, 'index'])->name('admin.users');
    Route::post('/admin/users/add', [UsersController::class, 'store'])->name('admin.users.add');
    Route::get('/admin/users/edit/{id}', [UsersController::class, 'edit'])->name('admin.users.edit');
    Route::post('/admin/users/update/{id}', [UsersController::class, 'update'])->name('admin.users.update');
    Route::get('/admin/users/delete/{id}', [UsersController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/admin/users/status/{id}', [UsersController::class, 'status'])->name('admin.users.status');
    // users code end

    // brand code start
    Route::get('/admin/brand', [BrandController::class, 'index'])->name('admin.brand');
    Route::post('/admin/brand/add', [BrandController::class, 'store'])->name('admin.brand.add');
    Route::get('/admin/brand/edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
    Route::post('/admin/brand/update/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
    Route::get('/admin/brand/delete/{id}', [BrandController::class, 'destroy'])->name('admin.brand.destroy');
    Route::get('/admin/brand/status/{id}', [BrandController::class, 'status'])->name('admin.brand.status');
    // brand code end

    // rent code start
    Route::get('/admin/rent', [RentController::class, 'show'])->name('admin.rent');
    Route::post('/admin/rent/add', [RentController::class, 'store'])->name('admin.rent.add');
    Route::get('/admin/rent/edit/{id}', [RentController::class, 'edit'])->name('admin.rent.edit');
    Route::post('/admin/rent/update/{id}', [RentController::class, 'update'])->name('admin.rent.update');
    Route::get('/admin/rent/delete/{id}', [RentController::class, 'destroy'])->name('admin.rent.destroy');
    Route::get('/admin/rent/status/{id}', [RentController::class, 'status'])->name('admin.rent.status');
    // rent code end

    // amc code start
    Route::get('/admin/amc', [PackageController::class, 'show'])->name('admin.amc');
    Route::post('/admin/amc/add', [PackageController::class, 'store'])->name('admin.amc.add');
    Route::get('/admin/amc/edit/{id}', [PackageController::class, 'edit'])->name('admin.amc.edit');
    Route::post('/admin/amc/update/{id}', [PackageController::class, 'update'])->name('admin.amc.update');
    Route::get('/admin/amc/delete/{id}', [PackageController::class, 'destroy'])->name('admin.amc.destroy');
    Route::get('/admin/amc/status/{id}', [PackageController::class, 'status'])->name('admin.amc.status');
    // amc code end


    // banner code start
    Route::get('/admin/banner', [BannerController::class, 'index'])->name('admin.banner');
    Route::post('/admin/banner/add', [BannerController::class, 'store'])->name('admin.banner.add');
    Route::get('/admin/banner/edit/{id}', [BannerController::class, 'edit'])->name('admin.banner.edit');
    Route::post('/admin/banner/update/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
    Route::get('/admin/banner/delete/{id}', [BannerController::class, 'destroy'])->name('admin.banner.destroy');
    Route::get('/admin/banner/status/{id}', [BannerController::class, 'status'])->name('admin.banner.status');
    // banner code end

    // banner code start
    Route::get('/admin/greatoffers', [GreatOfferController::class, 'index'])->name('admin.greatoffers');
    Route::post('/admin/greatoffers/add', [GreatOfferController::class, 'store'])->name('admin.greatoffers.add');
    Route::get('/admin/greatoffers/edit/{id}', [GreatOfferController::class, 'edit'])->name('admin.greatoffers.edit');
    Route::post('/admin/greatoffers/update/{id}', [GreatOfferController::class, 'update'])->name('admin.greatoffers.update');
    Route::get('/admin/greatoffers/delete/{id}', [GreatOfferController::class, 'destroy'])->name('admin.greatoffers.destroy');
    Route::get('/admin/greatoffers/status/{id}', [GreatOfferController::class, 'status'])->name('admin.greatoffers.status');
    // greatoffers code end

    // Orders start
    Route::get('/admin/orders', [ordersController::class, 'index'])->name('admin.orders');
    Route::get('/admin/order', [ordersController::class, 'index'])->name('admin.order');
    Route::post('/admin/order/filter', [ordersController::class, 'dateFilter'])->name('admin.order.filter.data');



    Route::get('/admin/ordered', [ordersController::class, 'ordered'])->name('admin.order.ordered');
    Route::get('/admin/padding', [ordersController::class, 'padding'])->name('admin.order.padding');
    Route::get('/admin/delivered', [ordersController::class, 'delivered'])->name('admin.order.delivered');
    Route::get('/admin/canceled', [ordersController::class, 'canceled'])->name('admin.order.canceled');
    Route::get('/admin/dispatched', [ordersController::class, 'dispatched'])->name('admin.order.dispatched');

    Route::post('/admin/orders/add', [ordersController::class, 'store'])->name('admin.orders.add');
    Route::get('/admin/orders/edit/{id}', [ordersController::class, 'edit'])->name('admin.orders.edit');
    Route::post('/admin/orders/update/{id}', [ordersController::class, 'update'])->name('admin.orders.update');
    Route::get('/admin/orders/delete/{id}', [ordersController::class, 'destroy'])->name('admin.orders.destroy');
    Route::get('/admin/orders/status/{id}', [ordersController::class, 'status'])->name('admin.orders.status');

    // order export
    Route::get('/admin/orders/export/{type}', [OrdersController::class, 'exportOrders'])->name('export.orders');

    // Orders end
    // reviews start
    Route::get('/admin/reviews/{product_id}', [ReviewController::class, 'index'])->name('admin.reviews');
    Route::get('/admin/reviews/delete/{id}', [ReviewController::class, 'destroy'])->name('admin.reviews.destroy');
    // reviews end

    // coupon
    Route::get('/admin/coupon', [CouponController::class, 'index'])->name('admin.coupon');
    Route::post('/admin/coupon/add', [CouponController::class, 'store'])->name('admin.coupon.add');
    Route::get('/admin/coupon/edit/{id}', [CouponController::class, 'edit'])->name('admin.coupon.edit');
    Route::post('/admin/coupon/update/{id}', [CouponController::class, 'update'])->name('admin.coupon.update');
    Route::get('/admin/coupon/delete/{id}', [CouponController::class, 'destroy'])->name('admin.coupon.destroy');
    Route::get('/admin/coupon/status/{id}', [CouponController::class, 'status'])->name('admin.coupon.status');
    // coupon
    Route::get('/admin/category/getSubCategory/', [SubCategoryController::class, 'getSubCategory'])->name('admin.getSubCategory');
    Route::get('/admin/category/getSubCategory/{id}', [SubCategoryController::class, 'getSubCategory'])->name('admin.getSubCategory.get');
});


Route::any('/payu/payment', [PayuMoneyController::class, 'intiate_payment'])->name('payu.pay');
Route::post('/payu/amc/payment/success', [PayuMoneyController::class, 'payumoneySuccess'])->name('payumoneysuccess');
