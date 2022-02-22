@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Modifica Categoria : {{$category->nome}}</h2>
                    </div>

                    <div class="card-body ">

                        <form action="{{route("categories.update", $category->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="nome">Nome</label>
                              <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" placeholder="Inserisci il nome ..." value="{{old('nome' , $category->nome)}}">

                                @error('nome')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                            
                            <button type="submit" class="btn btn-primary">Modifica</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection