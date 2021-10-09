<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.master');
});

Route::get('product', function () {
    $dtProduct = [
        ['id' => 'BD001', 'name' => 'SanDisk SSD 1 TB', 'price' => '1500000', 'stock' => '132', 'photo' => '../img/sandisk_ssd.jpg'],
        ['id' => 'BD002', 'name' => 'Logitech Mouse', 'price' => '98500', 'stock' => '9', 'photo' => 'img/logitech_mouse.png'],
        ['id' => 'BD003', 'name' => 'Casio Calculator', 'price' => '120000', 'stock' => '24', 'photo' => 'img/casio.jpg'],
        ['id' => 'BD004', 'name' => 'LG Monitor 24"', 'price' => '1345000', 'stock' => '9', 'photo' => 'img/lg_monitor.jpg'],
        ['id' => 'BD005', 'name' => 'Insignia Wireless Keyboard + Mouse', 'price' => '375000', 'stock' => '10', 'photo' => 'img/insignia_wireless.jpg'],
        ['id' => 'BD006', 'name' => 'Fifine K678 Microphone', 'price' => '567000', 'stock' => '30', 'photo' => 'img/fifine_microphone.jpg'],
    ];
    return view('product.list')->with('dtProduct', $dtProduct);
});

Route::get('customer', function () {
    $dtCustomer = [
        ['id' => 'CS0001', 'name' => 'Jaida Peterson', 'total_purchased' => '4578000', 'phone' => '081230230230'],
        ['id' => 'CS0002', 'name' => 'William Bauer', 'total_purchased' => '235000', 'phone' => '08912128322'],
        ['id' => 'CS0003', 'name' => 'Denver Aimee', 'total_purchased' => '1090000', 'phone' => '08109301041'],
        ['id' => 'CS0004', 'name' => 'Cailin Alishia', 'total_purchased' => '420000', 'phone' => '08761046698'],
        ['id' => 'CS0005', 'name' => 'Vinal Conor', 'total_purchased' => '7342000', 'phone' => '08315389776'],
        ['id' => 'CS0006', 'name' => 'Nyree Agatha', 'total_purchased' => '12300000', 'phone' => '088764717322'],
    ];
    return view('customer.list')->with('dtCustomer', $dtCustomer);
});

Route::get('supplier', function () {
    $dtSupplier = [
        ['id' => 'SP0001', 'name' => 'Adam Jones', 'address' => '8994 Middle River Court, Paducah, KY 42001'],
        ['id' => 'SP0002', 'name' => 'Tom Brady', 'address' => '7308 Washington St., Wasilla, AK 99654'],
        ['id' => 'SP0003', 'name' => 'Robert K McKinney', 'address' => '3430 Ocala Street'],
        ['id' => 'SP0004', 'name' => 'Clarence Jarrett', 'address' => '950 Hartway Street, Rapid City'],
        ['id' => 'SP0005', 'name' => 'Tiffany Hutson', 'address' => '720 Randolph Street'],
        ['id' => 'SP0006', 'name' => 'Frank Smith', 'address' => '2819 Lee Avenue, Maple Shade'],
        ['id' => 'SP0007', 'name' => 'Leigh Carrell', 'address' => '392 Flynn Street'],
        ['id' => 'SP0008', 'name' => 'Robert McClain', 'address' => '100 N Bay Blvd, Anna Maria, FL 34216'],
        ['id' => 'SP0009', 'name' => 'Lloyd Hale', 'address' => '3053 Langtown Road, Toleo']
    ];
    return view('supplier.list')->with('dtSupplier', $dtSupplier);
});
