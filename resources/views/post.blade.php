@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <div class="card mb-4">
                <div class="card-body"> 
                    @if ($post->image)
                    <div>
                        <img src="{{$post->get_image}}" class="card-img-top">
                        &nbsp;
                    </div>
                        
                    @endif
                    @if ($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                            {!!$post->iframe!!}
                        </div>
                        
                    @endif

                <!-- aqui pondremos el titulo de nuestros posts -->   
                <h5 class="card-title">{{$post->title}}</h5>

                <!-- contenido de nuestros posts en un parrafo-->
                   <p class="card-text">
                        {{$post->body}} <!-- aqui imprimimos directamente el contenido de post-->

                    </p>
                   <p class="text-muted mb-0">
                     <!-- aqui pondremos el nombre de un usuario a quien pertenece esto -->
                        <em>
                            &ndash; {{$post->user->name}}
                        </em>
                         <!-- aqui pondremos la fecha de creacion -->
                        {{$post->created_at->format('d M Y')}}
                   </p>
                </div>
            </div>
        
        </div>
    </div>
</div>
@endsection