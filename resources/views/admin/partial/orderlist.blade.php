@extends('admin.layouts.app')

@section('content')

<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Orders List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
       <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                         <div class="panel-body" >
                            <div class="table-responsive">
                                <table class="table table-hover">
                                        <thead style="background-color: red;">
                                        <tr>
                                            <th>Customer</th>
                                            <th>Order ID</th>
                                            <th>Menu Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /# panel-body -->
                        </div><!-- /# panel-default -->
                    </div><!-- /# col-lg-12 -->
                </div><!-- /# row -->

@endsection