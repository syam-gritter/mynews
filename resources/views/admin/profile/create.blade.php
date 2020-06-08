<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>MyProfile</title>
</head>
<body>
    
   @extends('layouts.profile')
   
   @section('title','Myプロフィール')
   
   @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>MY プロフィール</h2>
                </div>
            </div>
        </div>
    @endsection

</body>
</html>