@extends('dashboardlayout')
@section('content')
<div class="col">
   <div class="card text-white bg-secondary">
      <div class="card-body">
         <h5 class="card-title text-center text-white"><small>EDIT PERSONAL DETAILS</small></h5>
      </div>
   </div>
   <div class="card text-white bg-light">
      <div class="card-body">
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
         <form method="GET" action="{{ action('UsersController@update') }}">
            @csrf
            @if (!empty($user_details))
            @foreach($user_details as $user)
            <div class="form-group row">
               <label for="name" class="col-md-4 col-form-label text-md-left text-dark">{{ __('Name') }} </label>
               <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <label for="surname" class="col-md-4 col-form-label text-md-left text-dark">{{ __('Surname') }}</label>
               <div class="col-md-6">
                  <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ $user->surname }}" required autocomplete="name" autofocus>
                  @error('surname')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <label for="id_number" class="col-md-4 col-form-label text-md-center text-dark">{{ __('Id Number') }}</label>
               <div class="col-md-6">
                  <input id="id_number" type="number" class="form-control @error('id_number') is-invalid @enderror" name="id_number" value="{{ $user->id_number }}" required autocomplete="name" autofocus>
                  @error('id_number')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <label for="cellphone" class="col-md-4 col-form-label text-md-center text-dark">{{ __('Contact Number') }}</label>
               <div class="col-md-6">
                  <input id="cellphone" type="number" placeholder="format 0825569812" class="form-control @error('cellphone') is-invalid @enderror" name="cellphone" value="{{ $user->cellphone }}" required autocomplete="name" autofocus>
                  @error('cellphone')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <label for="email" class="col-md-4 col-form-label text-md-center text-dark">{{ __('E-Mail Address') }}</label>
               <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <label for="password" class="col-md-4 col-form-label text-md-center text-dark">{{ __('New Password') }}</label>
               <div class="col-md-6">
                  <input id="password" type="password" placeholder="minimum of 8 characters" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <div class="form-group row">
               <label for="password-confirm" class="col-md-4 col-form-label text-md-center text-dark">{{ __('Confirm Password') }}</label>
               <div class="col-md-6">
                  <input id="password-confirm" type="password" placeholder="minimum of 8 characters" class="form-control" name="password_confirmation" required autocomplete="new-password">
               </div>
            </div>
            <input id="id" type="hidden" name="id" value="{{$user->id}}">
            <div class="form-group row mb-0" l>
               <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                     {{ __('Submit') }}
                  </button>
                  <a href="/home" class="btn btn-warning">
                     {{ __('cancel') }}
                  </a>
               </div>
            </div>
         </form>
         @endforeach
         @endif
      </div>
   </div>
   @endsection