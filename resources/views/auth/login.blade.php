@extends('layout')
@section('content')
<!-- if the user is authorized, the user will be redirected to admin page -->
@if(isset(Auth::user()->email))
<script>
    window.location = "/success";
</script>
@endif

<!-- Returns the error by dislaying the alert  with the error message -->
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<!-- Returns the validation errors for required fields -->
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Start of the login form -->


<div class="container ">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header bg-light">
                    <h5 class="text-center text-dark">Sign-in to your Account</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="bo4 of-hidden size15 m-b-20">
                                    <input class="sizefull s-text7 p-l-22 p-r-22" type="email" name="email" placeholder="Email Address" required />
                                </div>
                                <div class="bo4 of-hidden size15 m-b-20">
                                    <input class="sizefull s-text7 p-l-22 p-r-22" type="password" name="password" placeholder="Password" required />
                                </div>
                                <div class="card-footer">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-secondary btn-block" value="Login">
                                    </div>
                                    <div class="form-group"><a href="/" class="btn btn-warning btn-block">Cancel</a></div>
                                    <div class="form-group">
                                    <a href="/password/reset" class="text-danger text-xl">Forgot password?</a>
                                    </div>
                                    <div class="form-group">
                                    <a href="{{url('register')}}" class="text-success text-xl">Sign Up </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of loggin form  -->
@endsection