@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Titolo : {{$post->title}}
                    </div>

                    <div class="card-body  m">

                        <div>
                            Stato :
                            @if ($post->published)
                                <span class="badge badge-success">Pubblished</span>
                            @else
                                <span class="badge badge-secondary">Trade</span>
                            @endif
                        </div>

                        {{$post->content}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection