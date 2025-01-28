## Display the "Hello, Diawan" on a webpage
This feature was to show the text "Hello, Diawan".

It was write in the controller named WelcomeController at welcome function, while the route was /welcome in web.php 

## Form Validation
This feature write a simple form validation and it was write in FormController.php and to render the page it was written viewform function while validation was written in checkForm function.


## Eloquent Relationship
This was written in both models Product.php and Category.php included the query inside each function either in Product model or Category model


## Blog Management System
This feature was included the CRUD functionality, and had a table Post.
To handle the CRUD functionality, the logic was written in PostController. 

Also there was a view to get the data, form add new data and change the data inside folder resources/dashboardpost/datapost

inside the folder data post there was full of blade to render view such as index.blade.php (View the data inside the table), tambah.blade.php (Form page add new data) and ubahPost.blade.php (Form update the data)

The route itself was like this :
// route mengelola post
Route::prefix('post')->group(function() {
    Route::get('/datapost', 'App\Http\Controllers\PostController@index');
    Route::get('/viewformtambahpost', 'App\Http\Controllers\PostController@create');
    Route::post('/tambahpost', 'App\Http\Controllers\PostController@store');
    Route::get('/viewubahpost/{post}', 'App\Http\Controllers\PostController@edit');
    Route::put('/ubahpost/{post}', 'App\Http\Controllers\PostController@update');
    Route::delete('/hapusPost/{post}', 'App\Http\Controllers\PostController@destroy');
    Route::post('/cariPost', 'App\Http\Controllers\PostController@searchPost');
});

## To run the project locally.
- Clone the repository
- After clone the repository, open the project in visual studio code
- Enter command composer install
- Open phpmyadmin
- Create a new database
- Import the SQL from folder database/db_blog.sql
- Create a .env file by entering this command :
cp .env.example .env
- Run the project by enter php artisan serve

## Live Demo
The app or the website has been deployed and accessible at the following link:
http://myblog.biz.id/


