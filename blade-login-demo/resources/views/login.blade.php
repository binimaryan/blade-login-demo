@extends('layouts.app')

@section('content')

<h2>Student Login</h2>

@if(session('success'))
<div class="alert">
<x-alert>
{{ session('success') }}
</x-alert>
</div>
@endif

<form method="POST" action="/login">

@csrf

<label>Email Address</label>
<input type="email" name="email" placeholder="Enter your email">

<label>Password</label>
<input type="password" name="password" placeholder="Enter your password">

<button type="submit">Login</button>

</form>

@endsection