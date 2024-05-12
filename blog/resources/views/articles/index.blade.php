@extends('layouts.app')

@section('content')
    <div class="container" style="max-with: 800px">

        {{ $articles->links() }}

        @if( session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        @foreach ($articles as $article)
            <div class="card mb-2">
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
                    <a href="{{ url("/articles/detail/$article->id") }}">
                        View Detail
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection