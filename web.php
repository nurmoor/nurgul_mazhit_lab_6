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
    return view('welcome');
});

Route::get('/insert', function(){
	DB::insert('insert into students(title,body) values(?,?,?,?)',
[1,"DADADADADADDAD",'2021-12-10',3,"almaz"]);
});

Route::get('/select', function(){
	$result=DB::select('select * from students where id=?',[1]);
	foreach($result as $students)
		{
			echo "title is :" .$students->title;
			echo "<br>";
			echo "body is: " .$students->body;
			}

});

Route::get('/delete', function () {
   $deleted=DB::delete('delete from students where id=?',[2]);
    return $deleted;
});


Route::get('/update', function () {
   $updated=DB::update('update students set title="software tester" where id=?',[1]);
    return $updated;
});

use App\student;
Route::get('/read',function(){
	$students=student::all();
	foreach($students as $student){
		echo $student->body;
		echo"<br>";
	}
})
;