<?php

use App\Http\Controllers\commentsController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\TasksController;
use App\Models\comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tasks;
use App\Models\admin;
use App\Models\products;
use App\Models\raabee;
use function PHPUnit\Framework\returnArgument;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// //list raabee
// Route::get('/raabee', function() {
//     return raabee::all();
// });

// //add

// Route::post('/raabee/add',function(Request $request){
//    raabee::create($request->all());
// });


// //update raabee
// Route::post('/raabee/update/{id}',function(Request $request,$id){
//    $currentraabee=raabee::find($id);
//    $currentraabee->update($request->all());
//    return 'raabee updated';
// });

// //route for list all task 
// // Route::get('/tasks',function(){
// //    return Tasks::all(); 
// // });

// //router for add task 
// // Route::post('/add/task',function(Request $request){
// //     Tasks::create([
// //         'title'=>$request->title,
// //         'description'=>$request->description,
// //     ]);
// //     return 'task created';
// // });

// //route for list all admin
// Route::get('/admin',function(){
//     return admin::all();
// });

// //route for add admin

// Route::post('add/admin',function(Request $request){
//     admin::create([
//         'name'=>$request->name,
//         'username'=>$request->username,
//         'password'=>$request->password,
//     ]);
//     return 'admin added';

// });

// //list all comments
// Route::get('/comments',function(){
//      return comments::all();
    
// });

// //add comments
// Route::post('/add/comments',function(Request $request){
//     comments::create([
//         'user_id'=>$request->user_id,
//         'comments'=>$request->comments,
//         'react'=>$request->react,
//     ]);
//     return 'added successfully';
//     //or
//    //return comments::create($request->all());

  

// });

// //remove comments
// Route::delete('/remove/comments/{id}',function($id){
//     comments::destroy($id);
//     return 'comment deleted successfully';

// });


// //add products
// Route::post('/product/add',function(Request $request){
//    return  products::create($request->all());
// });


// //list all products
// Route::get('/product',function (){
//  return products::all();
// });


// //update product
// Route::post('/product/update/{id}',function(Request $request,$id){
//     $currentproduct=products::find($id);
//     $currentproduct->update($request->all());
//     return 'product updated';
// });

// //search product
// Route::get('/product/search/{keyword}',function($keyword){
//     $searchedproducts=products::where('title','like','%' . $keyword . '%')->get();
//     return $searchedproducts;
// });

// //delete product
// Route::delete('product/remove/{id}',function($id){
//      products::destroy($id);
//      return "Product deleted successfully";
// });


Route::get('/tasks',[TasksController::class,'showall']);
Route::post('/task/add',[TasksController::class,'addtask']);
Route::resource('comments',commentsController::class);
Route::resource('products',productsController::class);