<?php

use Illuminate\Support\Facades\Route;


/* --------- Returning Text --------- */
Route::get('articles',function(){
    return "This is Articles";
});

Route::get('articles/{id}',function($id){
    return "Article Detail _ $id";
});
/* --------- Returning Text --------- */





/* --------- Returning View(view.blade.php) --------- */
Route::get('/welcome', function () {
    return view('welcome');
});

Route::view("/welcomepage",'greet/greeting');
/* --------- Returning View(view.blade.php) --------- */





/* --------- Pass Data to View from web.php --------- */
Route::get('/greeting/{name}',function($name){
    return view('greet/greetOne',['name'=>$name]);
});

Route::get('/greetList',function(){
    $data = [
        ["id"=>1, "firstName"=> "Masha"],
        ["id"=>2, "firstName"=> "Bomba"],
        ["id"=>3, "firstName"=>"Nicki"]
    ];
    return view('greet/greetList',['name'=>$data]);
});
/* --------- Pass Data to View from web.php --------- */





/* --------- Defining Route Name  --------- */
Route::get('defineRoute',function(){
    return 'I show Article Detail';
})->name('article.detail.show');
/* --------- Defining Route Name  --------- */





/* --------- Redirecting with RouteName and RoutePath --------- */
Route::get('articleShow',function(){
    return redirect()->route('/defineRoute');
});

Route::get('articleShowme',function(){
    return redirect('/defineRoute');
});




