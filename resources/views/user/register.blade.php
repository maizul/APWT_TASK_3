@extends('layouts.app')
@section('contain')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<br />
            <div class="container" style="width:500px;">  
                 <h3 align="">Sign Up</h3><br />                 
                 <form action="{{ route('register') }}" method="POST">  
                      
                    {{csrf_field()}}
                      <br />  
                      <label>Name:</label>  
                      <input type="text" name="name" class="form-control" id="formGroupExampleInput">
                      @error('name')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                      <br>
                      <label>Email:</label>  
                      <input type="text" name="email" class="form-control" id="formGroupExampleInput">
                      @error('email')
                        <span class="text-danger">{{$message}}</span>
                      @enderror
                      <br>
                      <label>Password:</label>  
                      <input type="password" name="password" class="form-control" id="formGroupExampleInput2">
                      <br> 
                      <label>Confirm Password:</label>
                      <input type="password" name="cpassword" class="form-control" id="formGroupExampleInput2">
                      <br>
                      <input type="submit" name="submit" value="Sign up" class="btn btn-info" /><br />  
                      
                         <p>Already have an account? <a href="{{route('login')}}">Sign in</a>.</p>
                      </div>                    
                       
                 </form>  
                 
            </div>  
            <br />  

</body>
</html>
@endsection