@extends('layouts.layout')

@section('content')
<h1>About page</h1>
<!-- <form action="{{route('result')}}" method="GET">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <button type="submit">Click Here!</button>
    
</form> -->

<form>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" >
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection