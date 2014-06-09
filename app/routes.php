<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route models
Route::model('project', 'Project');
Route::model('blog', 'Blog');

// Public routes
Route::get('/', function(){ return View::make('index'); });
Route::get('/blog', 'BlogController@publicIndex');
Route::get('/blog/{blog}', 'BlogController@display');
Route::get('/blog/{blog}/{slug}', 'BlogController@display');
Route::get('/projects', 'ProjectController@publicIndex');
Route::get('/projects/{project}', 'ProjectController@display');
Route::get('/projects/{project}/{slug}', 'ProjectController@display');
Route::get('/contact', function()
{
    return View::make('contact');
});
Route::get('/admin', function() { return View::make('admin.index'); });
Route::post('/admin', function()
{
    $credentials = Input::only('username', 'password');
    $remember = Input::has('remember');
    if (Auth::attempt($credentials, $remember)) {
        return Redirect::to('admin');
    }
    return Redirect::to('admin');
});

Route::get('/logout', function()
{
    Auth::logout();
    return Redirect::to('admin');
});

/* Admin routes */
Route::get('/admin/projects', array('before' => 'auth', 'uses' => 'ProjectController@adminIndex'));
Route::get('/admin/projects/create', array('before' => 'auth', 'uses' => 'ProjectController@create'));
Route::get('/admin/projects/edit/{project}', array('before' => 'auth', 'uses' => 'ProjectController@edit'));
Route::get('/admin/projects/delete/{project}', array('before' => 'auth', 'uses' => 'ProjectController@delete'));
Route::get('/admin/blog', array('before' => 'auth', 'uses' => 'BlogController@adminIndex'));
Route::get('/admin/blog/create', array('before' => 'auth', 'uses' => 'BlogController@create'));
Route::get('/admin/blog/edit/{blog}', array('before' => 'auth', 'uses' => 'BlogController@edit'));
Route::get('/admin/blog/delete/{blog}', array('before' => 'auth', 'uses' => 'BlogController@delete'));

/* Post data */
Route::post('/admin/projects/create', array('before' => 'auth', 'uses' => 'ProjectController@handleCreate'));
Route::post('/admin/projects/edit', array('before' => 'auth', 'uses' => 'ProjectController@handleEdit'));
Route::post('/admin/projects/delete', array('before' => 'auth', 'uses' => 'ProjectController@handleDelete'));
Route::post('/admin/blog/create', array('before' => 'auth', 'uses' => 'BlogController@handleCreate'));
Route::post('/admin/blog/edit', array('before' => 'auth', 'uses' => 'BlogController@handleEdit'));
Route::post('/admin/blog/delete', array('before' => 'auth', 'uses' => 'BlogController@handleDelete'));

/* Contact Form */

Route::post('/contact', function() {

    $input = Input::all();

    // build validation
    $rules = array(
            'name'      =>  'required|min:3',
            'email'     =>  'required|email',
            'content'   =>  'required|min:10'
    );

    $validator = Validator::make($input, $rules);

    if($validator->passes()){
        $fromEmail = Input::get('email');
        $fromName = Input::get('name');
        $data = Input::only('content');

        Mail::send('emails.contact', $data, function($m) use ($fromName, $fromEmail)
        {
            $m->from($fromEmail, $fromName);
            $m->to('jamie.shepherd@outlook.com', 'Jamie Shepherd')->subject('Contact form @ jamieshepherd.me');
        });

        return Redirect::to('/contact')->with('message', 'Thanks! Your message has been sent. Please bare in mind that I might not get back to you immediately as I am a very busy young student. May the force be with you.');
    }

    return Redirect::to('/contact')->withErrors($validator);

});


/*
Route::get('/admin/install', function()
{
   return View::make('admin.install');
});

Route::post('/admin/install', function()
{
   $user                    = new User;
   $user->username          = Input::get('username');
   $user->password          = Hash::make(Input::get('password'));
   $user->email             = Input::get('email');
   $user->save();

   return Response::make('User created, setup complete. You may now log in.');
});
*/