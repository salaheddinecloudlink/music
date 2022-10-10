<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\FacebookController;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Auth\ArtistRegisterController;

=======
use Illuminate\Support\Facades\Auth;
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
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

// Route::get('/',function(){
//     return view('welcome');

// })->name('welcome');
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/feature', 'FeatureController@index')->name('feature');
Route::get('/artist', 'WelcomeController@welcome')->name('artist');
Route::get('/video', 'VideoController@index')->name('landingvideo');
Route::get('/album', 'AlbumController@index')->name('landingalbum');
Route::get('/music', 'MusicController@index')->name('music');
Route::get('/event', 'EventController@index')->name('event');
Route::get('/news', 'NewsController@index')->name('news');
Route::get('/fan', 'FanController@index')->name('fan');
Route::get('/discussion', 'DiscussionController@index')->name('discussion');
Route::get('/discussion_Detail', 'DiscussionController@detail')->name('discussion_detail');

Route::get('video_details/{id}','VideoController@videodetails')->name('welcome.video_details');
Route::get('video_Views/{id}','VideoController@views')->name('welcome.nbr_view');
Route::get('video_Playlist/{id}','VideoController@playlist')->name('welcome.playlistvideo');
Route::get('video_deslike/{id}','VideoController@deslike')->name('welcome.nbr_deslikevideo');
Route::get('video_like/{id}','VideoController@like')->name('welcome.nbr_likevideo');

///////////////////////////////////

Route::get('songs_details/{id}','MusicController@songdetails')->name('welcome.song_details');
Route::get('song_Views/{id}','MusicController@views')->name('welcome.song.nbr_view');
Route::get('song_Playlist/{id}','MusicController@playlist')->name('welcome.playlistsong');
Route::get('song_deslike/{id}','MusicController@deslike')->name('welcome.nbr_deslikesong');
Route::get('song_like/{id}','MusicController@like')->name('welcome.nbr_likesong');


//////////////////////////////////

Route::get('ArtistProfile/{id}','WelcomeController@artistprofile')->name('welcome.artistprofile');
//////////////////////////////////
// subscription routes



//////////////////////////////////
//route for footer links
Route::get('/advertise', function () {
    return view('advertise');
})->name('advertise');
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');
Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');
Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');
Route::get('/refund_policy', function () {
    return view('refund_policy');
})->name('refund_policy');
Route::get('/terms_on_use', function () {
    return view('terms_on_use');
})->name('terms_on_use');


Route::view('/errors','errors404')->middleware('guest');



Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout',  [LoginController::class, 'logout'])->name('Artist.logout');

// Registration Routes...
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('registerArtist', [ArtistRegisterController::class, 'showRegistrationForm'])->name('registerArtist');
Route::post('registerArtist', [ArtistRegisterController::class, 'register']);

// Password Reset Routes...
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');

// Confirm Password
Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

// Email Verification Routes...


// Home

Auth::routes(['verify' => true]);

Route::get('/fan/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/fan/profile/{id}', [App\Http\Controllers\HomeController::class, 'updateFan'])->name('update.fan');

Route::post('/', 'ArtistRegisterController@artistRegister')->name('artiste.register');




//admin
Route::get('/dashboard', 'DashboardController@index')->middleware('admin')->name('admin');
Route::get('/home', 'DashboardController@index')->middleware('admin')->name('admin');
Route::get('Artist/profile', 'ArtistController@profile')->name('artist.profile')->middleware(['verified']);
Route::post('Artist/profile/{id}', 'ArtistController@updateArtist')->name('artist.modify')->middleware(['verified']);

Route::post('artist/register', 'ArtistRegisterController@artistRegister')->name('art.register');

route::get('/fan/video', 'HomeController@video')->name('fanVideo');
route::get('/fan/song', 'HomeController@song')->name('song');
route::get('/fan/followers', 'HomeController@fanFollower')->name('followers');
<<<<<<< HEAD
route::get('/fan/discussion', 'HomeController@fanDiscussion')->name('FanDiscussion');
route::get('/fan/album', 'HomeController@fanAlbum')->name('album');
=======
route::get('/fan/discussion', 'HomeController@fanDiscussion')->name('fanDiscussion');
route::get('/fan/album', 'HomeController@fanAlbum')->name('fanAlbum');
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
route::get('/fan/activites', 'HomeController@fanActivites')->name('activites');
route::get('/fan/accountSettings', 'HomeController@fanAccountSettings')->name('account');

//Fan profile
<<<<<<< HEAD
Route::post('Fan/profile/{id}', 'HomeController@updateFan')->name('update.fan')->middleware(['verified']);

// Artist
Route::get('Artist/dashboard', 'ArtistController@index')->name('artist.view')->middleware(['verified']);
//Artist Song
Route::get('Artist/song', 'ArtistController@song')->name('artist.song');
Route::post('Artist/song', 'ArtistController@storeSong')->name('artist.store');
Route::get('/Artist/song/{id}','ArtistController@edit')->name('artist.edit');
Route::post('/Artist/song-update/{id}','ArtistController@Update')->name('artist.update');
Route::post('/Artist/song/destroy','ArtistController@destroy')->name('artist.destroy_song');
Route::get('Artist/song_details/{id}','ArtistController@songdetails')->name('artist.song_details');
//Artist Video

Route::get('Artist/video','ArtistController@video')->name('artist.video');
Route::post('Artist/video', 'ArtistController@storeVideo')->name('artist.store_video');
Route::get('/Artist/video/{id}','ArtistController@editVideo')->name('artist.edit_video');
Route::post('/Artist/video-update/','ArtistController@UpdateVideo')->name('artist.update_video');
Route::post('/Artist/video/destroy','ArtistController@destroyVideo')->name('artist.destroy_video');
Route::get('Artist/video_details/{id}','ArtistController@videodetails')->name('artist.video_details');

//Artist event

Route::get('Artist/event','ArtistController@event')->name('artist.event');
Route::post('Artist/event', 'ArtistController@storeEvent')->name('artist.store_event');
Route::get('/Artist/event/{id}','ArtistController@editEvent')->name('artist.edit_event');
Route::post('/Artist/event-update/','ArtistController@UpdateEvent')->name('artist.update_event');
Route::post('/Artist/event/destroy','ArtistController@destroyEvent')->name('artist.destroy_event');

Route::get('Artist/event_details/{id}','ArtistController@eventdetails')->name('artist.event_details');
Route::get('Artist/event_detail/{id}','WelcomeController@eventdetails')->name('artist.event_detail');

Route::get('Artist/fans/{id}','WelcomeController@fans')->name('welcome.fans');
//Artist Album

Route::get('Artist/album','ArtistController@album')->name('artist.album');
Route::get('Artist/albums','ArtistController@albums')->name('artist.albums');
Route::post('Artist/album', 'ArtistController@storeAlbum')->name('artist.store_album');
Route::get('/Artist/album/{id}','ArtistController@editAlbum')->name('artist.edit_album');
Route::post('/Artist/album-update/','ArtistController@UpdateAlbum')->name('artist.update_album');
Route::post('/Artist/album/destroy','ArtistController@destroyAlbum')->name('artist.destroy_album');
Route::post('/Artist/albums','ArtistController@SongsAlbum')->name('artist.album_songs');
Route::get('Artist/album_details/{id}','ArtistController@Albumdetails')->name('artist.album_details');
//social media login
Route::get('Artist/album_detail/{id}','WelcomeController@Albumdetails')->name('artist.album_detail');
=======


//artist routing
Route::get('Artist/song', 'ArtistController@song')->name('artist.song');
Route::get('Artist/profile', 'ArtistController@index')->name('artist.view');
Route::get('Artist/video', 'ArtistController@discussion')->name('artist.video');
// Route::get('Artist/song', 'ArtistController@song')->name('artist.song');
// Route::get('Artist/song', 'ArtistController@song')->name('artist.song');
// Route::get('Artist/song', 'ArtistController@song')->name('artist.song');

//artist profile
Route::post('Artist/song', 'ArtistController@editsong')->name('artist.edit');
Route::post('Artist/song', 'ArtistController@storeSong')->name('artist.store');

//social media login

>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
//google auth
Route::get('/auth/google/redirect', [GoogleController::class, 'handleGoogleRedirect'])->name('login.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::post('/auth/google/redirect', [GoogleController::class, 'handleGoogleRedirect'])->name('google.store');

<<<<<<< HEAD

=======
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
//facebook auth

Route::get('/auth/facebook/redirect', [FacebookController::class, 'handleFacebookRedirect'])->name('login.facebook');
Route::get('/auth/facebook/callback', [FacebookController::class, 'handleFacebookCallback']);
<<<<<<< HEAD
Route::post('/auth/facebook/redirect', [FacebookController::class, 'handleFacebookRedirect'])->name('facebook.store');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    if(auth()->user()->user_type=='fan')
    {
        return redirect()->route('home');}

        return redirect()->route('artist.view');
    // return redirect()->route('welcome.index');

})->middleware(['auth', 'signed'])->name('verification.verify');



Route::post('email/welcome/index','EmailWelcomeController@redirect')->name('welcome.email');
Route::get('email/welcome','EmailWelcomeController@index')->name('welcome.index');

// Admin Dashboard Routes
Route::get('Admin/Analytics','AdminController@index')->name('admin.analytics');
Route::get('Admin/Artists','AdminController@artists')->name('admin.artist');
Route::get('Admin/Videos','AdminController@videos')->name('admin.video');
Route::get('Admin/Musics','AdminController@songs')->name('admin.music');
Route::get('Admin/Events','AdminController@events')->name('admin.event');
Route::get('Admin/News','AdminController@news')->name('admin.new');
Route::get('Admin/Discussions','AdminController@news')->name('admin.discussion');
Route::get('Admin/Fans','AdminController@news')->name('admin.fan');
Route::get('/Admin/Artists/destroy','AdminController@destroyArtist')->name('admin.destroy_artist');
Route::get('/Admin/Artist_Details','AdminController@detailartist')->name('admin.artist_details');

Route::get('/Allnews','WelcomeController@allnew')->name('allnews');

Route::get('NewsDetails/{id}','WelcomeController@Newdetails')->name('News_details');

Route::get('/Membership','ArtistController@membership')->name('subscription');
Route::get('Membership/{id}','ArtistController@membershipid')->name('artist.membership');
=======
Route::post('/auth/facebook/redirect', [FacebookController::class, 'handleFacebookredirect'])->name('facebook.store');
>>>>>>> 98250e5001170a6a421adb63fec67c5bc28967f9
