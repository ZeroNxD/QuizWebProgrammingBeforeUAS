<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::prefix('/ConnectFriend')->group(function(){
   Route::get('/', [Controllers\HomeController::class, 'ShowPage'])->name('home');

   Route::get('/Friend', [Controllers\FriendController::class, 'ShowPage'])->name('friendlist')->middleware('auth');
   
   Route::get('/Friend/Pending', [Controllers\FriendController::class, 'ShowPage2'])->name('pendingfriendlist')->middleware('auth');

   Route::get('/Friend/Rejected', [Controllers\FriendController::class, 'ShowPage3'])->name('rejectedfriendlist')->middleware('auth');

   Route::post('/Friend/{id}/accept', [Controllers\FriendController::class, 'AcceptRequest'])->name('acceptfriend');
   
   Route::post('/Friend/{id}/reject', [Controllers\FriendController::class, 'RejectRequest'])->name('rejectfriend');

   Route::get('/Member', [Controllers\MemberController::class, 'ShowPage'])->name('memberlist');

   Route::get('/Member/{id}', [Controllers\MemberController::class, 'DetailMember'])->name('detailmember')->middleware('auth');

   Route::post('/Member/addfriend', [Controllers\FriendController::class, 'AddNewFriend'])->name('addnewfriend');

   Route::get('/Login', [Controllers\UserController::class, 'ShowPage1'])->name('login');

   Route::post('/LoginUser', [Controllers\UserController::class, 'LoginUser'])->name('loginuser');

   Route::get('/Register', [Controllers\UserController::class, 'ShowPage2'])->name('register');

   Route::post('RegisterUser', [Controllers\UserController::class, 'StoreUser'])->name('registeruser');

   Route::post('Logout', [Controllers\UserController::class, 'LogoutUser'])->name('logoutuser')->middleware('auth');

   Route::get('/Profile', [Controllers\ProfileController::class, 'ShowPage'])->name('profilepage')->middleware('auth');

   Route::get('/Profile/Edit', [Controllers\ProfileController::class, 'EditPage'])->name('editprofile')->middleware('auth');

   Route::put('/UpdateProfile', [Controllers\ProfileController::class, 'UpdateProfile'])->name('updateprofile');

});
