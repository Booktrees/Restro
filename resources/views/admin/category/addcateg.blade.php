
@extends('admin.layouts.app')

@section('content')

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="/admin/addcateg" enctype="multipart/form-data">
                                        @csrf
                                       
                                        <div class="form-group">
                                            <label>Menu Name</label>
                                            <input class="form-control" type="text" name="name">
                                            
                                        </div>                                       

                                   
                                            
                                        

                                         <div class="form-group">
                                            <label>Slug</label>
                                            <input class="form-control" type="text" name="slug">
                                            
                                        </div>                           
                                        

                                        
                                      
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

 @endsection