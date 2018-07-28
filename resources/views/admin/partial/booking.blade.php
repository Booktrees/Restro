@extends('admin.layouts.app')

@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard 1</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Blank</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
        </div>
    </div>
</div>
         

<h1>Orders Data</h1>
  <br>
  <table class="table" style="background-color: white;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col"> Phone Number</th>
        <th scope="col"> Table for</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Request</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
@foreach($bookings as $booking)
      <tr>
        <th scope="row">{{$booking->id}}</th>
        <th scope="row">{{$booking->name}}</th>
        <th scope="row">{{$booking->email}}</th>
        <th scope="row">{{$booking->number}}</th>
        <th scope="row">{{$booking->people}}</th>
        <th scope="row">{{$booking->date}}</th>
        <th scope="row">{{$booking->time}}</th>

        <th scope="row">
            {{substr($booking->body, 0,60)}}
            <a href="" class="btn btn-link" data-toggle="modal" data-target="#myModal">
                {{strlen($booking->body) > 50 ? "...Learn More" : ""}}
            </a>
            <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{$booking->name}}</h4>
                      </div>
                      <div class="modal-body">
                        {{$booking->body}}
                      </div>
                    </div>
                  </div>
                </div>                
            </th>
        <th></th>
        </tr>
        @endforeach
    </tbody>
    </table>



@endsection