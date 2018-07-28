
@extends('admin.layouts.app')

@section('content')

<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Add Menu
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="/admin/addmenu" enctype="multipart/form-data">
                                        @csrf
                                       
                                        <div class="form-group">
                                            <label>Menu Name</label>
                                            <input class="form-control" name="title">
                                            
                                        </div>

                                          <div class="form-group">
                                            <label>Choose a Category:</label>
                                              <select name="category_id" id="category_id" class="form-control" required>
                                    <option value="">Choose One...</option>

                                    @foreach (App\Category::all() as $category)
                                        <option value="{{ $category->id }}" 
                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                            
                                        </div>

                                         <div class="form-group">
                                            <label>Price</label>
                                            <input class="form-control" type="number" name="price">
                                            
                                        </div>
                                
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" name="menu_img">
                                        </div>

                                      <!--   <div class="form-group">
                                            <label>Body</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                       -->
                                        
                                      
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