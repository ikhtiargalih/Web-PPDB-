@extends('landing.layout')

@section('content')
<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<title>Login & Registration Form | CoderGirl</title>-->
  <!---Custom CSS File--->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" >
</head>
<body>
  <div class="container w-50">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
		<form action="{{ route('login.auth') }}" method="POST">
      @csrf
			<input  type="text" name="email" placeholder="Enter your email">
			<input type="password" name="password" placeholder="Enter your password">
			<input type="submit" class="button" value="Login">
		</form>
    </div>
  </div>
</body>
</html>

