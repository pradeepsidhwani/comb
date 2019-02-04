@extends('layouts.master')
@section('taskActive')
  active
@endsection
@section('background')
white-background
@endsection
@section('content')

            <div class="small-navbar d-flex d-md-none">
              <button type="button" data-toggle="offcanvas" class="btn btn-outline-primary"> <i class="fa fa-align-left mr-2"></i>Menu</button>
              <h1 class="small-navbar-heading"> <a href="index.html">Creative </a></h1>
            </div>
            <div class="row">
              <div class="col-xl-10">
                <div class="content-column-content">
                  <h1>The App List</h1>
                  <p class="lead">Based on the list and types of permissions each app needs, here is a list the security risk each app has.</p>
                  <div class="row">
                    <table class="table table-hover table-striped">
                      <thead>
                        <th>App Name</th>
                        <th>Risk</th>
                      </thead>
                      <tbody>
                        @foreach ($apps as $a)

                        <tr>
                          <td>{{$a[0]}}</td>
                          <td>{{$a[1]}}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

@endsection
