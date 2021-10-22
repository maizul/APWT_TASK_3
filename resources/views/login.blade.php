@extends('layouts.app')
@section('contain')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<div class="container-xxl">

    <form class="row g-3"  action="{{route('login')}}" method="POST">
        {{csrf_field()}}
        <span class="border border-primary rounded-sm shadow p-2 mb-3 bg-black rounded mt-5 pt-5" >
        
            <div class="col-md-6 offset-md-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control shadow p-2 mb-3 bg-black rounded" name="email" id="formGroupExampleInput" >
            </div>

            <div class="col-md-6 offset-md-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control shadow p-2 mb-3 bg-black rounded" name="password" id="formGroupExampleInput2">
            </div>
                
            <div class="col-md-6 offset-md-5">
                <input type="submit" name="submit" value="Login" class="btn btn-primary shadow p-2 mb-5 bg-black rounded" />
                <a href="{{ route('register') }}" class="btn btn-primary shadow p-2 mb-5 bg-black rounded" >Sign Up</a>
            </div>

        </span>
    </form>
    
</div>
</body>
</html>
@endsection