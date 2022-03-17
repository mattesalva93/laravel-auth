@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center my-5">
            <a href="{{route("admin.posts.create")}}"><button type="button" class="btn btn-success">Crea un nuovo post</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Sezione</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $elemento)
                        <tr>
                            <th scope="row">{{ $elemento->id }}</th>
                            <td>{{ $elemento->title }}</td>
                            <td>{{ $elemento->content }}</td>
                            <td>{{ $elemento->slug }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', $elemento->id) }}" ><button type="button" class="btn btn-primary">Vedi</button></a>
                                <a href="{{ route('admin.posts.edit', $elemento->id) }}"><button type="button" class="btn btn-warning">Edita</button></a>
                                <form action="{{route("admin.posts.destroy", $elemento->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger">X</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection