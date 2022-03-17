@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
            <a href="{{ route('admin.posts.index') }}"><button type="button" class="btn btn-primary">Ritorna all'elenco</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col mt-5">
            <h5>Rimuovi il post</h5>
            <form action="{{route("admin.posts.destroy", $post->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Rimuovi</button>
            </form>
        </div>
    </div>
</div>

@endsection