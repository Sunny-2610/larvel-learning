@extends('layouts.default')

@section('header')
    <h2>This is contact page </h2>
@endsection

@section('content') 
    <h1>Home</h1>
    <form action="{{ route('formsubmitted') }}" method="post">
        @csrf
        <label for="fullname">Fullname</label>
        <input type="text" id="fullname" name="fullname" placeholder="Type your fullname" required>
        <br><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Type your email" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>
@endsection
    
@section('footer')
    <p>Copyright &copy; 2025</p>
@endsection