@extends('layouts.admin')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Update Student </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Student</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Update Student</h4>
                    
                    <form class="forms-sample" method="post" action="{{route('students.update',$student->id)}}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="exampleInputUsername1" value="{{$student->first_name}}" placeholder="First Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Last Name</label>
                        <input type="text" class="form-control" name="last_name" id="exampleInputUsername1" placeholder="Last Name" value="{{$student->last_name}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" value="{{$student->email}}">
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputConfirmPassword1">Phone</label>
                        <input type="phone" class="form-control" name="phone" id="exampleInputConfirmPassword1" placeholder="Phone" value="{{$student->phone}}">
                      </div>
                     
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
              
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>

@endsection