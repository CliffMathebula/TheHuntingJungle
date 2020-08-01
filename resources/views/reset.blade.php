<!DOCTYPE html>
<html lang="en">

<head>
    <title>User login page </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-light bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h4 class="text-warning">TBDS</h4>
            </a>
            <div class="navbar">
                <a class="text-warning text-xl" href="/">&nbsp;&nbsp; Home &nbsp;&nbsp;</a>
                <a class="btn btn-success btn-xl" href="/register"> Sign up</a>
            </div>
        </div>
    </nav>


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
    <div class="container align-items-center mt-4">
        <form method="push" action="{{ url('/checklogin') }}">
            {{ csrf_field() }}
            <div class="row align-items-center">
                <div class="col">
                    <h2 style="text-align:center"><small>Password Recovery</small></h2>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" placeholder="Username" class="form-control" required>
                    </div>
 
                    <div class="formgroup">
                        <input type="submit" class="btn btn-success" value="Submit"> &nbsp;
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End of loggin form  -->
</body>

</html>