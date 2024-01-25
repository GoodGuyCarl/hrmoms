<?php

use App\Livewire\CreateDatasheet;
use App\Livewire\Dashboard;
use App\Livewire\Datasheets;
use App\Models\Datasheet;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Dashboard::class)
    ->middleware(['auth', 'verified', 'userAuth:employee'])
    ->name('dashboard'); // to be modified

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile'); // untouched

Route::get('/datasheets', Datasheets::class)->middleware([
    'auth',
    'verified',
    'userAuth:employee'
])->name('datasheets'); // livewire component

Route::get('/datasheets/create', CreateDatasheet::class)
->middleware([
    'auth',
    'verified',
    'userAuth:employee',
])->name('datasheets.create'); // livewire component

Route::post('/logout', function(\App\Livewire\Actions\Logout $logout) {
    $logout();
    return redirect()->route('login');
})->middleware(['auth'])->name('logout');
//
//Route::post('/validate/{datasheet}', function($id){
//    try {
//        $datasheet = Datasheet::findOrFail($id);
//        $datasheet->status = 'validated';
//        $datasheet->save();
//        return redirect()->route('dashboard');
//    } catch (\Throwable $th) {
//        return redirect()->route('dashboard');
//    }
//})
//    ->middleware(['auth', 'verified', 'userAuth:employee'])
//    ->name('datasheets.validate');
//
//Route::post('/approve/{datasheet}', function($id){
//    try {
//        $datasheet = Datasheet::findOrFail($id);
//        $datasheet->status = 'approved';
//        $datasheet->save();
//        return redirect()->route('dashboard');
//    } catch (\Throwable $th) {
//        return redirect()->route('dashboard');
//    }
//})
//    ->middleware(['auth', 'verified', 'userAuth:employee'])
//    ->name('datasheets.approve');
require __DIR__.'/auth.php';
