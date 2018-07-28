@extends('admin.layouts.app')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View menus
                    <div style="float: right;">

               <a href="/admin/addcateg" class="hov">

                    <button class="btn btn-outline btn-success">

                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                            Add Category
                    </button>
                </a>
            </div>
</h1>
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
                                            <th>Name</th>
                                            <th>Slug</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($categories as $categorie)
                                        <tr>
                                            <td>{{$categorie->id}}</td>
                                            <td>{{$categorie->name}}</td>
                                            <td>{{$categorie->slug}}</td>
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