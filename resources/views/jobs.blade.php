@extends('dashboardlayout')
@section('content')
<div class="col">
    <div class="card text-light bg-secondary">
        <div class="card-body">
            <h5 class="card-title">Careers Portal</h5>
        </div>
    </div>
    <br />
    <!-- Display Listed jobs if jobs is greater than zero -->
    @if (count($jobs) > 0)
    <p class="alert alert-success"> <strong>Listed Jobs</strong></p>
    <div class="card">
        <!-- looops through the listed jobs -->
        @foreach($jobs as $job)
        <div class="card-body bg-light">
            <p class="alert alert-info text-dark"> <strong>Job Title : &nbsp; </strong>{{ $job->job_title }}</p>
            <p class="card-text bg-light">
                <p class="text text-dark"><small>
                        <strong>Date Posted : </strong>{{ $job->date_posted }}<br />
                        <strong> Reference : </strong>{{ $job->reference }} <br />
                        <strong>Company : </strong>{{ $job->company_posted }}<br />
                        <strong>Job Name : </strong>{{ $job->job_name }}</small>
                </p>
                <p class="text text-dark"><small><strong>Job Description : </strong>{{ $job->job_descrition }} <br />
                        <strong>Job Start Date : </strong>{{ $job->job_start_date }}<br />
                        <strong>Positions Available : </strong>{{ $job->no_of_positions }}<br /></small>
                        <a href="{{url('apply')}}/{{ $job->id }}" class="btn btn-success btn-sm mt-2">Apply Now</a>
                </p>
            </p>
        </div>
    </div>
    @endforeach
    @else
    <div class="alert alert-info text-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Info!</strong> No Jobs Available at the moment!
  </div>
    @endif

</div>

</div>
</div>

@endsection