@extends('layouts.layout')

@section('content')
<h1 class="text-center">See Messages</h1>
    @foreach($AllMessages as $Message)
    <ul class="list-group col-12 text-center ">
        <li class="list-group-item">{{$Message->id}}</li>
        <li class="list-group-item">{{$Message->name}}</li>
        <li class="list-group-item">{{$Message->email}}</li>
        <li class="list-group-item">{{$Message->subject}}</li>
        <li class="list-group-item">{{$Message->message}}</li>
        <br>
    </ul>
    @endforeach
@endsection
