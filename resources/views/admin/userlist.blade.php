@extends('layouts.app')
@section('contain')

<br>
<table class="table">
    <thead>
      <tr>
        
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($user as $users)
            <tr>
                
                <td>{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->password}}</td>
                <td><a href="/edit/{{$users->id}}">edit</a></td>
                <td><a href="/delete/{{$users->id}}">delete</a></td>
            </tr>
            
       @endforeach
    </tbody>
  </table>
    
        
    
@endsection