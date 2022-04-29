@extends('layout')

@section('content')

    <div class="card-header">
        Add movie
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
        <form method="post" action="{{ route('movies.store') }}">
            <div class="form-group">
                @csrf
                <label for="name">title</label>
                <input type="text" class="form-control" name="title"/>
            </div>
            <div class="form-group">
                <label for="releaseYear">releaseYear</label>
                <input type="date" class="form-control" name="releaseYear"/>
            </div>
            <div class="form-group">
                <label for="rating">rating</label>
                <input type="text" class="form-control" name="rating"/>
            </div>
            <button type="submit" class="btn btn-block btn-danger">Create Movie</button>
        </form>
    </div>

@endsection



