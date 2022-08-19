@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Artculos
                    <a href="{{route('posts.create')}}"class="btn btn-sm btn-primary float-right">Crear</a>
                </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class='table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- el foreach me servira para crear de manera dinamica todas las filas de mis posts-->
                            @foreach($posts as $post )
                            <tr>
                                 <!-- configuramos cada una de las celdas-->
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <!-- configuramos el boton editar y eliminar-->
                                <td>
                                    <a href="{{route('posts.edit',$post)}}" class="btn btn-primary btn-sm"> Editar
                                    </a>
                                </td>
                                <td>
                                   <form action="{{route('posts.destroy',$post)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                    type="submit"
                                    value="Eliminar"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('¿Desea eliminar...?')"
                                    >
                                   </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
