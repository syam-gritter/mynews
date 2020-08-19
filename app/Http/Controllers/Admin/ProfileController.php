<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;
use App\Record;

use Carbon\Carbon;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        
        //Varidationを行う
        $this->validate($request,Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();
        
        //画像はない
        //フォームから送信された_tokenを削除する
        unset($form['_token']);
        
        
        //データベースに保存する
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile/create');
    }
    
    public function edit(Request $request)
    {
        $profile = Profile::find($request->id);
        if(empty($profile)){
            abort(404);
        }
        
        return view('admin.profile.edit',['profile_form' => $profile]);
    }
    
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if($cond_name != ''){
            //検索されたら検索結果を取得する
            $profiles = Profile::where('name' , $cond_name)->get();
        }else{
            //それ以外はすべてのニュースを取得する
            $profiles = Profile::all();
        }
        return view('admin.profile.index' , ['profiles' =>$profiles,'cond_name' =>$cond_name]);
        
    }
    
    public function update(Request $request)
    {
        //Validationをかける
        $this->validate($request,Profile::$rules);
        
        //Profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        
        //送信されてきたフォームデータを格納する
        $profile_form = $request->all();
        unset($profile_form['_token']);
        
        //該当するデータを上書き保存する
        $profile->fill($profile_form)->save();
        
        
        $record = new Record;
        $record->profile_id = $profile->id;
        $record->edited_at = Carbon::now();
        $record->save();
        
        return redirect('admin/profile/');
    }
    
    public function delete(Request $request)
    {
        //該当するProfile　Modelを取得
        $profile = Profile::find($request->id);
        //削除する
        $profile->delete();
        return redirect('admin/profile/');
        
    }
}
