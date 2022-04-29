@extends('layout')
@section('content')

    <style>
        .container {
            max-width: 450px;
        }
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="card push-top">
        <div class="card-header">
            Edit & Update
        </div>

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <form method="post" action="{{ route('movies.update', $movies->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="title">title</label>
                <input type="text" class="form-control" name="title" value="{{ $movies->title }}"/>
            </div>
            <div class="form-group">
                <label for="releaseYear">releaseYear</label>
                <input type="date" class="form-control" name="releaseYear" value="{{ $movies->releaseYear }}"/>
            </div>
            <div class="form-group">
                <label for="rating">rating</label>
                <input type="text" class="form-control" name="releaseYear" value="{{ $movies->rating}}"/>
            </div>

            <button type="submit" class="btn btn-block btn-danger">Update movie</button>
        </form>
    </div>

@endsection
