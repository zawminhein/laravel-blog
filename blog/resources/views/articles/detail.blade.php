@extends('layouts.app')

@section('content')
    <div class="container" style="max-with: 600px">
        <div class="card mb-2 border-primary">
            <div class="card-body">
                <h3 class="card-title">
                    {{ $article->title }}
                </h3>
                <div class="text-muted">
                    {{ $article->created_at }}
                </div>
                <div class="mb-2">
                    {{ $article->body }}
                </div>
                <a href="{{ url("/articles/delete/$article->id") }}" 
                    class="btn btn-sm btn-outline-danger">
                    Delete
                </a>
            </div>
        </div>
    </div>
@endsection