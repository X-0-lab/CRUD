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
            <form method="post" action="{{ route('watched.update', $watched->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="watched">watch</label>
                    <input type="text" class="form-control" name="watched" value="{{ $watched->movieID }}"/>
                </div>
                <div class="form-group">
                    <label for="stars">stars</label>
                    <input type="text" class="form-control" name="stars" value="{{ $watched->stars }}"/>
                </div>
                <div class="form-group">
                    <label for="comments">comments</label>
                    <input type="text" class="form-control" name="comments" value="{{ $watched->comments }}"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Update watched list</button>
            </form>
        </div>

    </div>
@endsection
