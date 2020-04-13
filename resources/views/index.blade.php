@extends('layouts.start')

@section('content')


<div class="full-screen-background"  style="text-align:center">
    <h5 class="header-startpage">Explore Berlin - Rent your Student Room</h5>
    <div class="login-box ">
        <form class="form-horizontal" action="{{ route('login') }}" method="POST">
            <h2>Register for Fun! 🎓</h2> 
            <div class="input-icons"> 
                <i class="fa fa-user icon"> 
              </i> 
                <input class="input-field" 
                       type="text" 
                       placeholder="Username"> 
            </div> 
  
            <div class="input-icons"> 
                <i class="fa fa-key icon"> 
              </i> 
                <input class="input-field" 
                       type="password"
                       placeholder="Password"> 
            </div> 
            <button type="submit" class="btn btn-primary btn-lg btn-block">Login </button>
            <a href="{{ route('register') }}" class="justify-text-center col-12">Register Link</a>
        </form> 

        </form> 
    </div>
</div>

@endsection
