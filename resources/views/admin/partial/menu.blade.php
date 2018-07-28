@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">

           <h1 class="page-header"> Menus

            <div style="float: right;">

               <a href="/admin/addmenu" class="hov">

                    <button class="btn btn-outline btn-success">

                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>

                            Add Menu
                    </button>
                </a>

               <a href="/admin/tablemenu" class="hov">

                    <button class="btn btn-outline btn-info">

                        <span class="glyphicon glyphicon-pencil"></span>

                            Edit Menu
                        
                    </button>

                </a>
            </div>

            </h1>
        </div>      
    </div> <!-- END ROW-->

<div class="row" style="display: flex;">    
@foreach($menus as $menu)
        <div class="card" style="
    margin-right: 30px;
"> 
          <img src="/storage/cover_images/{{$menu->menu_img}}" style="width:100%">
          <div class="ttttt">
            
          </div>
        </div>
        @endforeach
</div>


@endsection