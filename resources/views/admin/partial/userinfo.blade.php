@extends('admin.layouts.app')

@section('body')


<div class="row" style="background-color: mediumpurple; color:mintcream; height:88px;">
                <div class="col-lg-12">
                    <h1 class="page-header">Online Customer List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    
                <div class="panel-default" style="padding-top:9px; margin-left:-16px;                                               margin-right:-13px;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Customer Info:
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                           <th>Customer Id</th>
                                           <th>Customer Name</th>
                                          
                                           <th>Email</th>
                                           <th>Password</th>
                                           <th>Contact Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user as $users)
                                      <tr>
                                        <td>{{$users->id}}</td>
                                        <td>{{$users->name}}</td>
                                        <td>{{$users->email}}</td>
                                        <!-- <td>{{$users->password}}</td> -->
                                      </tr>
                                    @endforeach
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
               </div>







@endsection