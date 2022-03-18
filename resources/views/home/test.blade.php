@extends('layouts.homebase')

@section('title', 'Test Layout Page')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <form action="/save" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Ppassword: <input type="text" name="password"><br>
        <input type="submit">
@endsection







</form>
