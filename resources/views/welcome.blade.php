@extends('layouts.welcomehome')
@section('title','Clients Customer Web App')
{{-- @include('home.navbar') --}}

@section('content')
 <div class="clo_2">
            <div class="clo_2_sub content" style="padding-top: 137px;">
                <form>
                <h2 style="text-align: center">SIGN IN</h2>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                        
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <a href="{{ url('home')}}" class="btn btn-info btn-block" role="button"> Sign In
                    </a>
                     {{--  <button onclick="window.location.href='/home'" type="submit">SIGN IN</button>  --}}
                    
                    <br>
                    <div class="center">
                    <small  class="form-text text-muted">
                    Forgot <a href="{{ url('forgetp')}}">password?</a>
                    OR  <a href="{{ url('sign_up')}}"> Sign UP</a>
                    </small>
                    </div>
                    <div id="me"></div>
                </form>
                
            </div>
        </div>

@endsection
