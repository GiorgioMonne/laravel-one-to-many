@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Titolo : {{$post->title}}
                    </div>

                    <div class="card-body ">

                        <div class="mb-3">
                            @if ($post->image)
                                <img src="{{asset("storage/{$post->image}")}}" alt="{{$post->title}}">
                            @endif
                        </div>

                        <a href="{{route("posts.edit", $post->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>     
                        <form action="{{route("posts.destroy", $post->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger mt-3">Elimina</button>
                        </form>

                        <div mb-3>
                            Stato :
                            @if ($post->published)
                                <span class="badge badge-success">Pubblished</span>
                            @else
                                <span class="badge badge-secondary">Trade</span>
                            @endif
                        </div>

                        @if ($post->category)
                            <div class="mb-3">
                                <strong>Categoria :</strong>
                                {{$post->category->nome}}
                            </div>
                        @endif

                        {{$post->content}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection