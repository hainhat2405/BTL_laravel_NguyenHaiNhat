<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Models\User\HomeModel;
// use App\Http\Models\Admin\LSPModel;
// use App\Http\Models\Admin\SanPhamModel;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin1111', function () {
    return view('Admin1234.dashboard');
})->name('admin');

Route::get('/login', function(){
    return view('admin.Login_Admin');
})->name('login');


Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin');


Route::controller(App\Http\Controllers\Admin\LSPController::class)->group(function(){
    Route::get('/indexLSP',  'index')->name('indexLSP');
    Route::get('/add', 'create')->name('add');
    Route::post('/store','store')->name('store');
    Route::get('/edit/{idLoaiSP}','edit')->name('edit');
    Route::get('/destroy/{idLoaiSP}', 'destroy')->name('destroy');
    Route::get('/show/{idLoaiSP}', 'show')->name('detail');
    Route::put('/update/{idLoaiSP}', 'update')->name('update');
    Route::post('/admin-dashboard', 'show_dashboard')->name('admin-dashboard');
    Route::get('/logout', 'log_out')->name('logout');

});
Route::controller(App\Http\Controllers\Admin\AuthController::class)->group(function(){
    Route::get('/index',  'index')->name('index');
    Route::get('/register_auth',  'register_auth')->name('register_auth');
    Route::get('/login_auth',  'login_auth')->name('login_auth');
    Route::get('/logout_auth',  'logout_auth')->name('logout_auth');
    Route::post('/register',  'register')->name('register');
    Route::post('/loginAuth',  'loginAuth')->name('loginAuth');
});
Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function(){
    Route::get('/indexUsers',  'index')->name('indexUsers');
    Route::post('/assign_roles',  'assign_roles')->name('assign_roles');
});

// Route::group(['middleware' => 'auth.roles'], function(){
//     Route::controller(App\Http\Controllers\Admin\LSPController::class)->group(function(){
//         Route::get('/indexLSP',  'index')->name('indexLSP');    
//     });
// });


Route::controller(App\Http\Controllers\Admin\SanPhamController::class)->group(function(){
    Route::get('/indexSP',  'index')->name('indexSP');
    Route::get('/addSP', 'create')->name('addSP');
    Route::post('/storeSP','store')->name('storeSP');
    Route::get('/editSP/{idSanPham}','edit')->name('editSP');
    Route::get('/destroySP/{idSanPham}', 'destroy')->name('destroySP');
    Route::get('/showSP/{idSanPham}', 'show')->name('detailSP');
    Route::put('/updateSP/{idSanPham}', 'update')->name('updateSP');
    
});

Route::controller(App\Http\Controllers\Admin\NhanVienController::class)->group(function(){
    Route::get('/indexNV','index')->name('indexNV');
    Route::get('/addNV','create')->name('addNV');
    Route::post('/storeNV','store')->name('storeNV');
    Route::get('/showNV/{idNhanVien}','show')->name('detailNV');
    Route::get('/editNV/{idNhanVien}','edit')->name('editNV');
    Route::put('/updateNV/{idNhanVien}', 'update')->name('updateNV');
    Route::get('/destroyNV/{idNhanVien}', 'destroy')->name('destroyNV');
});
Route::controller(App\Http\Controllers\Admin\KhachHangController::class)->group(function(){
    Route::get('/indexKH','index')->name('indexKH');
    Route::get('/addKH','create')->name('addKH');
    Route::post('/storeKH','store')->name('storeKH');
    Route::get('/showKH/{idKhachHang}','show')->name('detailKH');
    Route::get('/editKH/{idKhachHang}','edit')->name('editKH');
    Route::put('/updateKH/{idKhachHang}', 'update')->name('updateKH');
    Route::get('/destroyKH/{idKhachHang}', 'destroy')->name('destroyKH');
});
Route::controller(App\Http\Controllers\Admin\NhaCungCapController::class)->group(function(){
    Route::get('/indexNCC','index')->name('indexNCC');
    Route::get('/addNCC','create')->name('addNCC');
    Route::post('/storeNCC','store')->name('storeNCC');
    Route::get('/showNCC/{idNhaCungCap}','show')->name('detailNCC');
    Route::get('/editNCC/{idNhaCungCap}','edit')->name('editNCC');
    Route::put('/updateNCC/{idNhaCungCap}', 'update')->name('updateNCC');
    Route::get('/destroyNCC/{idNhaCungCap}', 'destroy')->name('destroyNCC');
});
Route::controller(App\Http\Controllers\Admin\HoaDonBanController::class)->group(function(){
    Route::get('/indexHDB','index')->name('indexHDB');
    // Route::get('/addNCC','create')->name('addNCC');
    // Route::post('/storeNCC','store')->name('storeNCC');
    // Route::get('/showNCC/{idNhaCungCap}','show')->name('detailNCC');
    // Route::get('/editNCC/{idNhaCungCap}','edit')->name('editNCC');
    // Route::put('/updateNCC/{idNhaCungCap}', 'update')->name('updateNCC');
    // Route::get('/destroyNCC/{idNhaCungCap}', 'destroy')->name('destroyNCC');
});
Route::controller(App\Http\Controllers\Admin\Manage_orderController::class)->group(function(){
    Route::get('/manage_order','index')->name('manage_order');
    Route::get('/view-order/{order_id}','show')->name('view-order');
    // Route::get('/addNCC','create')->name('addNCC');
    // Route::post('/storeNCC','store')->name('storeNCC');
    // Route::get('/showNCC/{idNhaCungCap}','show')->name('detailNCC');
    // Route::get('/editNCC/{idNhaCungCap}','edit')->name('editNCC');
    // Route::put('/updateNCC/{idNhaCungCap}', 'update')->name('updateNCC');
    // Route::get('/destroyNCC/{idNhaCungCap}', 'destroy')->name('destroyNCC');
});
Route::controller(App\Http\Controllers\Admin\BlogController::class)->group(function(){
    Route::get('/blog','index')->name('blog');
    Route::get('/add-blog','create')->name('add-blog');
    Route::post('/store-blog','store')->name('store-blog');
    Route::get('/show-blog/{id}','show')->name('show-blog');
    Route::get('/edit-blog/{id}','edit')->name('edit-blog');
    Route::put('/update-blog/{id}', 'update')->name('update-blog');
    Route::get('/destroy-blog/{id}', 'destroy')->name('destroy-blog');
});
Route::controller(App\Http\Controllers\Admin\TKhoanController::class)->group(function(){
    Route::get('/Acc','index')->name('Acc');
    Route::get('/addAcc','create')->name('addAcc');
    Route::post('/storeAcc','store')->name('storeAcc');
    Route::get('/showAcc/{id}','show')->name('detailAcc');
    Route::get('/editAcc/{id}','edit')->name('editAcc');
    Route::put('/updateAcc/{id}', 'update')->name('updateAcc');
    Route::get('/destroyAcc/{id}', 'destroy')->name('destroyAcc');
});

//USER
Route::controller(App\Http\Controllers\User\HomeController::class)->group(function(){
    Route::get('/user',  'index')->name('user');
    Route::get('/home',  'index')->name('home');
    Route::get('/GioiThieu',  'gioiThieu')->name('gioiThieu');
    Route::get('/TinTuc',  'tinTuc')->name('tinTuc');
    Route::get('/blog_detail/{id}',  'blog_detail')->name('blog_detail');
    Route::get('/DanhMuc',  'danhMuc')->name('danhMuc');
    Route::get('/SanPham',  'sanPham')->name('sanPham');
    Route::get('/SanPhamSauGion',  'sanPhamSauGion')->name('sanPhamSauGion');
    Route::get('/GioHang',  'gioHang')->name('gioHang');
    Route::get('/ThanhToan',  'thanhToan')->name('thanhToan');
    // Route::get('/TTKH',  'ttkh')->name('ttkh');
    Route::post('/search-product',  'search_product')->name('search-product');

});

// danh mục sản phẩm
Route::controller(App\Http\Controllers\User\LSPhamController::class)->group(function(){
    Route::get('/danh-muc/{idLoaiSP}',  'show_category_home')->name('index_detailSP');
});



//
Route::controller(App\Http\Controllers\User\SanPhamController::class)->group(function(){
    Route::get('/chi-tiet-san-pham/{idSanPham}',  'show')->name('detail_procduct');
});

Route::controller(App\Http\Controllers\User\CartController::class)->group(function(){
    Route::post('/save-cart',  'store')->name('cart_product');
    Route::get('/show_cart',  'show_cart')->name('show_cart');
    Route::get('/delete-to-cart/{rowId}',  'destroy')->name('delete-to-cart');
    Route::post('/update-cart-quantity',  'update')->name('update-cart-quantity');
});

// Route::post('/login-Customers', function(){
//     return view('User.Login_Customers');
// });
Route::controller(App\Http\Controllers\User\CheckoutController::class)->group(function(){
    Route::get('login-Customers',  'login_Customers')->name('login-Customers');
    Route::get('logout-Customers',  'logout_Customers')->name('logout-Customers');
    Route::post('/add-customer',  'add_customer')->name('add-customer');
    Route::get('/register-customer',  'register_customer')->name('register-customer');
    Route::get('/checkout',  'checkout')->name('checkout');
    Route::get('/payment',  'payment')->name('payment');
    Route::post('/save-checkout-customer',  'save_checkout_customer')->name('save-checkout-customer');
    Route::post('/show-home',  'show_home')->name('show-home');
    Route::post('/payment',  'payment')->name('payment');
});




