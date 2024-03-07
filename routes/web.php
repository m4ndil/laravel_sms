<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Logout;
use App\Http\Livewire\Auth\ForgotPassword;

use App\Http\Livewire\Dashboard;

use App\Http\Livewire\User\Profile;

use App\Http\Livewire\Admin\Permission;
use App\Http\Livewire\Admin\Student;
use App\Http\Livewire\Admin\Teacher;
use App\Http\Livewire\Admin\User;
use App\Http\Livewire\Admin\Role;

Route::redirect('/', '/login');
Route::get('/login', Login::class)->name('login');
Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/profile', Profile::class)->name('profile');
    // Route::get('/student', AdminIndex::class)->name('student');
    Route::get('/student', Student::class)->name('student');
    Route::get('/teacher', Teacher::class)->name('teacher');

    Route::get('/user', User::class)->name('users');

    Route::get('/permission', Permission::class)->name('permissions');
    Route::get('/role', Role::class)->name('roles');
    Route::get('/logout', [Logout::class, 'logout'])->name('logout');
});
