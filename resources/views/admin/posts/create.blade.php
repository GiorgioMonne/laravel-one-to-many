@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Nuovo Post
                    </div>

                    <div class="card-body ">

                        <form action="{{route("posts.store")}}" method="POST">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputEmail1">Titolo</label>
                              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo ..." value="{{old('title')}}">

                                @error('title')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
            
                            <div class="form-group">
                              <label for="content">Contenuto</label>
                              <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="6" placeholder="Inserisci il contenuto del post ...">{{old('content')}}</textarea>

                                @error('title')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input @error('checkbox') is-invalid @enderror" id="published" name="published" {{old('published') ? 'checked' : ''}}>
                                <label for="published" class="form-check-label">Pubblica</label> 

                                @error('checkbox')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection