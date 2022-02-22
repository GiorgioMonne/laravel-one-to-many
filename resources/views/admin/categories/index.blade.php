@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista Categorie</div>

                <div class="card-body">

                  <div class="bottoni mb-3">

                    <a href="{{route("posts.create")}}"><button type="button" class="btn btn-success">Nuova categoria</button></a>

                  </div>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azioni</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($categories as $category)
                          <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->nome}}</td>
                            <td>{{$category->slug}}</td>
                            <td>
                              <a href="{{route("categories.show", $category->id)}}"><button type="button" class="btn btn-info">Info</button></a>
                              <a href="{{route("categories.edit", $category->id)}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                              
                              <form action="{{route("categories.destroy", $category->id)}}" method="POST">
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