@extends('dashboard.layouts.app')
@section('content')
         <!-- Users DataTable-->   

                   <!-- Users DataTable-->
                   <div class="container">
                   <div class="row mt-3" >
                    <div class="col-md-12" style="    margin-top: 65px;
                    ">
                        <div class="card bg-white">
                            <div class="card-body mt-3">
                              <div class="table-responsive">
                                  <table id="usersTable" class="table table-striped  bg-light  " style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                       
                                            <th>Employer Name</th>
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th>Category</th>
                                            <th>type</th>                                           
                                            <th>status</th>                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($jobs as $job)
                                          @php
                                          $emp = $job->employer;
                                          $data = $emp->user;
                                          $category = $job->category;
                                          $type = $job->jobType;
                                          $status = $job->status;
                                          @endphp
                                            <tr>
                                                <td>1</td>
                                                
                                                <td>{{$data->name}}</td>
                                                <td>{{$job->title}}</td>
                                                <td>{{$job->location}}</td>
                                                <td>{{$category->name}}</td>
                                                <td>{{$type->name}}</td>
                                                <td>{{$status->name}}</td>

                                               
                                                <td style="width: 18%">
                                                    <a  class="btn btn-sm bg-color" href="{{route('job.view', $job->id)}}"><i class="material-icons">View</i></a> 
        
        
                                                  <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#candidateDelete-" type="button"><i class="material-icons">delete</i></button>
        
                                                    <!-- Delete modal -->
                                                    <div class="modal fade" id="candidateDelete-" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel-" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title text-center" id="staticBackdropLabel-">Name: </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body text-center">
                                                                <h4> Do you want to move candidate Trash?</h4>
                                                            </div>
                                                            <form action="" method="POST">
                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="id" value="">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </form>
        
        
                                                        </div>
                                                        </div>
                                                    </div>
        
        
        
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                              </div>
                            </div>
                        </div>
                    </div>
        
                </div>
              </div>


    </div>
@endsection