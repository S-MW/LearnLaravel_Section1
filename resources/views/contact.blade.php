@extends('layouts.layout')

@section('content')
<h1>Contact page</h1>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                
            @endforeach
        </ol>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

<form method="POST" action="{{route('submit')}}">
    @csrf
    <div class="form-group text-start">
        <label  for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>
    <div class="text-center">
        <label for="email">Email address</label>
    </div>
        <input name="email" type="text" class="form-control" id="email" placeholder="Enter email" >
        <div class="text-end">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
    </div>
    <div class="form-group text-end">
    <label for="message">Message</label>
    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Text your Message"></textarea>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form> 
@endsection