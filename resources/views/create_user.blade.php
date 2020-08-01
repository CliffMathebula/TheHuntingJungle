@extends('pageslayout')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="col col-md-4 text-center">
            <p class="text-body">
                <h4 class="text-info"> Registration Form </h4>
            </p>
            <form action="/create" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="form-group">
                    <p class="text-success">Name:
                        <input type="text" class="form-control" name="name">
                    </p>
                </div>

                <div class="form-group">
                    <p class="text-success">Surname:
                        <input type="text" class="form-control" id="surname"></p>
                </div>


                <div class="form-group">
                    <p class="text-success">Email:
                        <input type="email" class="form-control" name="email">
                    </p>
                </div>

                <div class="form-group">
                    <p class="text-success">Contact:
                        <input type="number" class="form-control" id="surname" required>
                    </p>
                </div>

                <div class="form-group">
                    <p class="text-success">Password:
                        <input type="password" class="form-control" id="password">
                    </p>
                </div>
                <div class="form-group">
                    <p class="text-success">Password:
                        <input type="password" class="form-control" id="password">
                    </p>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection