@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($posts as $post)
            <div class="card mb-4">
                <div class="card-body"> <!-- contenido de nuestros posts -->
                <!-- aqui pondremos el titulo de nuestros posts -->   
                <h5 class="card-title">{{$post->title}}</h5>
                <!-- contenido de nuestros posts en un parrafo-->
                   <p class="card-text">
                        {{$post->get_excerpt}} <!-- este campo no existe lo vamos a crear atraves del campo body-->

                        <!-- boton de leer mas -->
                        <a href="{{route('post',$post)}}">Leer mas</a>
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
            </div>>
            @endforeach
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection