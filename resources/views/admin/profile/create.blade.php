
    
   @extends('layouts.profile')
   
   @section('title','プロフィール')
   
   @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール</h2>
                    <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                        
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
                            <input type="text" class="form-control" name="name" value="{{ old('title') }}"　placeholder="名前">
                        </div>
                    </div>
                    
                     <div class="form-group row">
                        <label class="col-md-2">性別</label>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="man" value="男"　>
                              <label class="form-check-label" for="radio2a">男</label>
                        　</div>
                        　<div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="gender" id="woman" value="女">
                              <label class="form-check-label" for="radio2b">女</label>
                        　</div>
                   　</div>
                   　
                       　<div class="form-group row">
                            <label class="col-md-2">趣味</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="hobby" >{{ old('hobby') }}</textarea>
                            </div>
                        </div>
                    　
                    　<div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    
                    
                    {{ csrf_field() }}
                    <div class="form-group row">
                    <input type="submit" class="btn btn-primary col-md-4" value="送信">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

