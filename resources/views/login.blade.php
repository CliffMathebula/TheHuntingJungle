@extends('pageslayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="text-body">
                   <p> USER LOGIN FORM </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--login form panel -->
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="/signin">
                        <div class="form-group">
                            <p class="text-body">Email address:</p>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd" class="text-body">Password:</label>
                            <input type="password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection