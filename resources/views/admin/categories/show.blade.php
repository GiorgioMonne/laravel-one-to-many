@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>{{$category->nome}}</h3>
                    </div>

                    <div class="card-body ">
                        <a href="{{route("categories.edit", $category->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>     
                        <form action="{{route("categories.destroy", $category->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger mt-3">Elimina</button>
                        </form>
                       
                        <div class="mb-3">
                            <strong>Categoria :</strong>
                            Slug : {{$category->slug}}
                        </div>

                        @if (count($category->posts) > 0)

                            <div class="mb-3">                               
                                <h4>Lista post di categoria</h4>
                                <ul>
                                    @foreach ($category->posts as $post)
                                        <li>{{$post->title}}</li>
                                    @endforeach 
                                </ul>
                            </div>
                            
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection