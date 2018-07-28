@extends('admin.layouts.app')

@section('content')
                   


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!--New User-->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$users}}</div>
                                    <div>New Users!</div>
                                </div>
                            </div>
                        </div>
                        <a href="/admin/userinfo">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <!--New Order-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$cart}}</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                         <a href="/admin/orderlist">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        
                    </div>
                </div>

                <!--New Admin-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$admis}}</div>
                                    <div>New Admins!</div>
                                </div>
                            </div>
                        </div>
                         <a href="/admin/admininfo">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <a href="/admin/orderlist">
                         <div class="panel-body" >
                            <h4>Online Order List</h4>
                        </a>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                        <thead style="background-color: red;">
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Address</th>
                                            <th>Menu Title</th>
                                            <th>Phone</th>
                                            <th>Quantity</th>
                                            <th>Total Price</th>
                                            <th>Deliver Time</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($carts as $cart)
                                            <tr>
                                                <td>{{$cart->id}}</td>
                                                <td>{{$cart->name}}</td>
                                                <td>{{$cart->address}}</td>
                                                <td>{{$cart->title}}</td>
                                                <td>{{$cart->phone}}</td>
                                                <td>{{$cart->quantity}}</td>
                                                <td>{{$cart->price}}</td>
                                                <td>{{$cart->delivery_time}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /# panel-body -->
                        </div><!-- /# panel-default -->
                    </div><!-- /# col-lg-12 -->
                </div><!-- /# row -->
</div>





    
@endsection
