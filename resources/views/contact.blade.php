@extends('layouts.layout')

@section('content')
<h1>Contact page</h1>

<!-- <form action="{{route('result')}}" method="GET">
    @csrf
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <button type="submit">Click Here!</button>
    
</form>  -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                
            @endforeach
        </ol>
    </div>
@endif
<form method="POST" action="{{route('submit')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>
    <div class="float-left bg-info">
        <label for="email">Email address</label>
    </div>
        <input name="email" type="text" class="form-control" id="email" placeholder="Enter email" >
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
    </div>
    <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection