@extends('layout')

@section('content')

    <style>
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="push-top">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table">
            <thead>
            <tr class="table-warning">
                <td>ID</td>
                <td>TITLE</td>
                <td>RELEASEYEAR</td>
                <td>RATING</td>
                <td class="text-center">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($movie as $movies)
                <tr>
                    <td>{{$movies->id}}</td>
                    <td>{{$movies->title}}</td>
                    <td>{{$movies->releaseYear}}</td>
                    <td>{{$movies->rating}}</td>
                    <td class="text-center">
                        <a href="{{ route('movies.edit', $movies->id)}}" class="btn btn-primary btn-sm"">Edit</a>
                        <form action="{{ route('movies.destroy', $movies->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
