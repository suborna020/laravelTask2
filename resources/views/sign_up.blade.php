@extends('layouts.welcomehome')
@section('title','Clients Customer Web App')
{{-- @include('home.navbar') --}}

@section('content')
<div class="clo_2">
    <div class="clo_2_sub content" style="padding-top: 47px;">
        <form>
            <h2 style="text-align: center">SIGN UP</h2>
            <div class="form-group">
                <label for="fname">First name </label>
                <input type="text" class="form-control" id="fname" aria-describedby="fname" placeholder="Enter First name">
            </div>
            <div class="form-group">
                <label for="lname">Last name </label>
                <input type="text" class="form-control" id="lname" aria-describedby="lname" placeholder="Enter Last name">
            </div>
            <div class="form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="confirm_password">
            </div>
            <a href="{{ url('home/profile')}}" class="btn btn-info btn-block" role="button"> Sign UP
            </a>
            {{-- <button onclick="window.location.href='/home'" type="submit">SIGN IN</button>  --}}

            <br>
            <div class="center">
                <small class="form-text text-muted">

                    OR <a href="{{ url('welcome')}}"> Sign IN</a>
                </small>
            </div>
        </form>

    </div>
</div>

@endsection
