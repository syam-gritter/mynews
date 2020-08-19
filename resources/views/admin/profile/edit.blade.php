@extends('layouts/profile')
@section('title','プロフィール編集')

@section('content')

<div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール編集</h2>
                    <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                        
                        @if (count($errors) > 0)
                            <ul>
                                @foreach($errors->all() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach    
                            </ul>
                        @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}"　placeholder="名前">
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        @if( $profile_form->gender === "男")
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="man" value="男" checked="checked">
                              <label class="form-check-label" for="radio2a">男</label>
                        　</div>
                        　<div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="woman" value="女">
                              <label class="form-check-label" for="radio2b">女</label>
                        　</div>
                        @elseif( $profile_form->gender === "女")
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="man" value="男" >
                              <label class="form-check-label" for="radio2a">男</label>
                        　</div>
                        　<div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="woman" value="女" checked="checked">
                              <label class="form-check-label" for="radio2b">女</label>
                        　</div>
                        @endif
                   　</div>
                   　
                       　<div class="form-group row">
                            <label class="col-md-2">趣味</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="hobby" >{{ $profile_form->hobby }}</textarea>
                            </div>
                        </div>
                    　
                    　<div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    
                    <input type="hidden" name="id" value="{{ $profile_form->id }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                    <input type="submit" class="btn btn-primary col-md-4" value="送信">
                    </div>
                    </form>
                    
                    <div class="row mt-5">
                        <div class="col-md-4 mx-auto">
                            <h2>更新履歴</h2>
                            <ul class="list-group">
                                @if($profile_form->records != NULL)
                                    @foreach($profile_form->records as $record)
                                     <li class="list-group-item">{{ $record->edited_at }}</li>
                                    @endforeach
                                @endif
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
@endsection   
    
