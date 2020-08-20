<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $posts = Profile::all()->sortByDesc('updated_at');
    
     
        //news/index.blade.php ファイルを渡している
        //また　Viewテンプレートに　,postsという変数を渡している
        return view('profile.index', [ 'posts' => $posts]);
        
    }
}
