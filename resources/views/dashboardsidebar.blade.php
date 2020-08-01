<div class="container-fluid">
  <div class="row">
    <div class="aside">
      <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-dark">
            <p class="text-white text-center"><small>ADMIN : <strong>{{ ucfirst(Auth()->user()->name) }}
                  {{ ucfirst(Auth()->user()->surname) }}</strong></small></p>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-dark" href="{{url('home')}}">
              <strong>Dash Board</strong></a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-dark" href="{{url('home')}}">
              <strong>Job Applications </strong></a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-dark" href="{{url('promote')}}">
              <strong>Advertise my CV</strong></a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-dark" href="{{url('edit_details')}}/{{ ucfirst(Auth()->user()->id) }}">
              <strong> Edit Profile </strong></a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-dark" href="{{url('listed_jobs')}}">
              <strong>Listed Jobs</strong> </a>
          </li>
          <li class="list-group-item bg-secondary">
            <a class="btn btn-link btn-block text-dark" href="{{url('support')}}">
              <i class="fa fa-cart fa-xl"></i><strong>Support Tickets</strong></a>
          </li>
          <li class="list-group-item bg-dark">
            <a class="btn btn-link btn-block text-white" href="{{url('logout')}}">
              <i class="fas fa-lock fa-xl"></i> Sign Out </a>
          </li>
      </div>
    </div>