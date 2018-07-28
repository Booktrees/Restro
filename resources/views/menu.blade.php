@extends('layouts.apps')
@section('were')


<div class="container">
<h1>Today's Menu</h1>
<hr>

  <div class="btn-group">
      <button type="button" class="btn btn-warning dropdown-toggle scale-button mr-5" 
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categories
      </button>
        <div class="dropdown-menu">
          
           @foreach(App\Category::all() as $Categories)
            <a class="dropdown-item" href="/menu/{{$Categories->slug}}">{{$Categories->name}}</a>    
          @endforeach
      </div>{{--droupmenu --}}
    </div>{{--btn-group end --}}
    <br><br>

  <div class="card-group">
    <div class="row">
    @foreach($menus as $menu)
  <div class="card mr-2">
    <img class="card-img-top" src="/storage/cover_images/{{$menu->menu_img}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> {{$menu->title}}</h5>
      <p class="card-text">{{$menu->price}}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"> <a href="{{ $menu->path() }}">View More...</a></small>
    </div>
  </div>
  @endforeach
  </div>
 </div>
</div>       <!--End of container-->


@endsection




