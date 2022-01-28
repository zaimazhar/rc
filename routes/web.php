<?php

use App\Http\Controllers\WorkspaceController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Workspaces Routes
Route::controller(WorkspaceController::class)->group(function () {
    // GET Routes
    Route::get('workspace', 'show')->name('workspace_page');
    Route::get('workspace/{wid}', 'ListTask')->name('list_task');

    // POST Routes

});

require __DIR__.'/auth.php';
