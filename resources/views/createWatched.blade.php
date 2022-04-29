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
            Add User
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
            <form method="post" action="{{ route('watcheds.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="watched">watched</label>
                    <input type="text" class="form-control" name="watched"/>
                </div>
                <div class="form-group">
                    <label for="movieID">Movie ID</label>
                    <input type="movieID" class="form-control" name="movieID"/>
                </div>
                <div class="form-group">
                    <label for="stars">stars</label>
                    <input type="text" class="form-control" name="stars"/>
                </div>
                <div class="form-group">
                    <label for="comments">Comments</label>
                    <input type="text" class="form-control" name="comments"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Create wacthed list</button>
            </form>

        </div>


    </div>
@endsection
