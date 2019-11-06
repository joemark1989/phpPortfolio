<?php

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
    return view('home');
}) ->name("home");

Route::get('/about', function () {
    return view("about.about");
}) -> name("about");

Route::get('contact', function () {
    return view('contact.contact');
}) -> name("contact");

Route::get('projects', function () {
    return view('projects.projects');
}) -> name("projects");

Route::get("week-6/simple-math", function(){
    return view("calculator.calculator");
}) -> name("calculator");

Route::post("week-6/simple-math", function (\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {
    $validation = $validator->make($request->all(), [
        "firstNumberInput" => "integer",
        "secondNumberInput" => "integer"
        // "numOfTimesInput" => "integer"
    ]);

    if ($validation->fails()) {
        return redirect()
            ->back()
            ->with("firstNumber", $request->input("firstNumberInput"))
            ->with("secondNumber", $request->input("secondNumberInput"))
            // ->with("numOfTimes", $request->input("numOfTimes"))
            ->withErrors($validation);

    } else {
        return redirect()
            ->back()
            ->with("firstNumber", $request->input("firstNumberInput"))
            ->with("secondNumber", $request->input("secondNumberInput"));
            // ->with("numOfTimes", $request->input("numOfTimes"));
    }

    // return redirect()
    //     ->back()
    //     ->with("firstNumber", $request->input("firstNumberInput"))
    //     ->with("secondNumber", $request->input("secondNumberInput"));
    //     ->with("numOfTimes", $request->input("numOfTimes"));
})->name("calculator");
