@extends('admin.layouts.app')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View menus</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Menu List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Title</th>
                                            <th>Menu Image</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($menus as $menu)
                                        <tr>
                                            <td>{{$menu->id}}</td>
                                            <td>{{$menu->title}}</td>
                                            <td><img src="/storage/cover_images/{{$menu->menu_img}}" style="width: 76px; height: 55px;"></td>
                                            <td>{{$menu->price}}</td>
                                            <td style="display:flex;">
                                            	<a href="{{action('MenuController@edit', $menu->id)}}"><button class="btn btn-success">
                                            		<span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a> &nbsp;
                                                    <form action="{{action('MenuController@destroy', $menu->id)}}" method="POST">
                                                      {{ csrf_field() }}
                                                   
                                            	<button type="submit" class="btn btn-danger">
                                            		<span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span></button>
                                                </form>
                                            </td>
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
             
            </div>
            <!-- /.row -->

@endsection  