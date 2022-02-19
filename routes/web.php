    <?php
    use App\Models\Post;
    use App\Models\User;
    use App\Models\Tag;
    use  Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\PostsController;
    use App\Http\Controllers\SessionsController;
    // use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\PostTagsController;
    use App\Http\Controllers\AuthorsController;
    use App\Http\Controllers\PostCommentsController;
    use App\Http\Controllers\NewsletterController;
    use App\Http\Controllers\AdminUsersController;
    use App\Http\Controllers\AdminPostsController;
    use App\Http\Controllers\AdminSettingsController;
    use App\Http\Controllers\UsersController;
    use App\Http\Controllers\AdsController;
    use App\Http\Controllers\ImagesController;
    use App\Http\Controllers\HomepageController;

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

    Route::get('/', function(){
        return view('home');
    });
    Route::get('features', [HomepageController::class, 'features']);
Route::get('download', [HomepageController::class, 'download']);
Route::get('helpCenter', [HomepageController::class, 'helpCenter']);

    // everything assoicated with finding a post and any other attachment to the post
    Route::get('posts', [PostsController::class, 'index'])->name('all-posts');
    Route::get('posts/{post:slug}', [PostsController::class, 'show'])->name('show-post');
    Route::get('tags/{tag:slug}', [PostTagsController::class, 'show'])->name('show-tagPosts');
    Route::get('authors/{author:username}',[AuthorsController::class , 'show'])->name('show-authorPosts');
    //subscribe for newsletter
    Route::post("newsletter/subscribe", NewsletterController::class);
    //Posting a comment

    // RegisterController
    // Route::get('register',[RegisterController::class, 'create'])->middleware('guest')->name('register');
    // Route::post('register',[RegisterController::class, 'store'])->middleware('guest');
    // sessionscontroller has the login and logout functinality and other sessions
    Route::get('login', [ SessionsController::class, 'create'])->middleware('guest')->name('login');  //login
    Route::post('login', [SessionsController::class, 'store']);

Route::group(['middleware' => 'auth'] , function()
{
        // all sidebar links here
    Route::get('accounts/profile', [AdminUsersController::class, 'dashboard'])->name('admin-dashboard');
    Route::get('accounts/settings', [AdminSettingsController::class, 'index'])->name('settings');
    Route::get('admins/posts/create', [AdminPostsController::class, 'create'])->name('create-post');
    Route::get('admins/posts/author-posts', [AdminPostsController::class, 'author_posts'])->name('author-posts');
 Route::get('account/author/create' ,[AdminUsersController::class, 'create'])->name('create-author');
 Route::get('account/sponsors', [AdsController::class, 'index'])->name('sponsors');
 Route::get('accounts/ads/create', [AdsController::class, 'create'])->name('create_ad');
 Route::delete('accounts/ads/{ad}',[AdsController::class, 'destroy']);


    // all routes relating to post that Admin can see
    Route::post('accounts/ads/create', [AdsController::class, 'store']);
    Route::post("admins/posts/create", [AdminPostsController::class, 'store']);
    Route::get("admins/posts/{post}/edit", [AdminPostsController::class, 'edit'])->name('edit-post');
    Route::patch("admins/posts/{post}", [AdminPostsController::class, 'update']);
    Route::delete("admins/posts/{post}", [AdminPostsController::class, 'destroy']);
    // Admins Updating the admin
    Route::patch('admins/settings/{author:username}', [AdminUsersController::class, 'update']);
    Route::patch('/admins/settings/{author:username}/password', [AdminUsersController::class , 'update_password']);

    // create a new user from the admin panel
Route::delete('accounts/admins/{author:username}', [AdminUsersController::class, 'destroy'])->name('delete-author');
Route::get('accounts/author/{author:username}', [UsersController::class, 'author_access'])->name('author-access');
 Route::post('author/create',[AdminUsersController::class, 'store']);


    Route::post("post/review", [PostsController::class, 'review']);
    Route::post("tags/create", [PostTagsController::class, 'store']);
    Route::post('post/{post:slug}/comments', [PostCommentsController::class, 'store']);
    Route::post('logout', [ SessionsController::class, 'destroy']); // logout
});



