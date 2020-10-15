@extends('layouts.welcomehome')
@section('title','Clients Customer Web App')
{{-- @include('home.navbar') --}}

@section('content')
 <div class="clo_2">
            <div class="clo_2_sub content" style="padding-top: 137px;">
                <form>
                <h2 style="text-align: center">Type your email</h2>
                    <div class="form-group">
                        <label for="email">Email </label>
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                        
                    </div>
                    
                    <a href="{{ url('welcome')}}" class="btn btn-info btn-block" role="button"> Get the code
                    </a>
                     {{--  <button onclick="window.location.href='/home'" type="submit">SIGN IN</button>  --}}
                   
                </form>
                
            </div>
        </div>

@endsection
