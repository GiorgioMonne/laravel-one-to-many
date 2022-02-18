@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Lista Posts') }}</div>

                <div class="card-body">

                  <div class="bottoni mb-3">

                    <a href="{{route("posts.create")}}"><button type="button" class="btn btn-success">Crea Post</button></a>

                  </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azioni</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($posts as $post)
                          <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                            <td>
                              <a href="{{route("posts.show", $post->id)}}"><button type="button" class="btn btn-info">Info</button></a>
                              <a href="{{route("posts.edit", $post->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                              
                              <form action="{{route("posts.destroy", $post->id)}}" method="POST">
                                  @csrf
                                  @method("DELETE")
                                  <button type="submit" class="btn btn-danger mt-3">Elimina</button>
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