@extends('layouts.admin')
@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Students Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Students</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Students</h4>
                    <a href="{{route('students.add')}}" class="btn btn-primary " style="float: right;">Add Student</a>
                   
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $data)
                          <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email}}</td>
                            <td class="text-danger">{{$data->phone}}</td>
                            <td>
                                @if($data->status==1)
                                <label class="badge badge-success">Active</label>
                                @else
                                <label class="badge badge-danger">Inactive</label>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('students.edit',$data->id)}}" class="btn btn-primary">Edit</a>
                                <a href="#" data-toggle="modal" data-target="#deleteStudent{{$data->id}}" class="btn btn-danger">Delete</a>
                            </td>
                          </tr>
                          <div class="modal" id="deleteStudent{{$data->id}}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Student</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{route('students.delete',$data->id)}}" type="button" class="btn btn-danger">Delete</a>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
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