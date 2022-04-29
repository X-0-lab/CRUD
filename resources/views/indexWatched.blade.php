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
                <td>PEOPLEID</td>
                <td>MOVIEID</td>
                <td>STARS</td>
                <td>COMMENTS</td>
                <td class="text-center">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($watched as $watcheds)
                <tr>
                    <td>{{$watcheds->peopleID}}</td>
                    <td>{{$watcheds->movieID}}</td>
                    <td>{{$watcheds->stars}}</td>
                    <td>{{$watcheds->comments}}</td>
                    <td class="text-center">
                        <a href="{{ route('watcheds.edit', $watcheds->peopleID)}}" class="btn btn-primary btn-sm"">Edit</a>
                        <form action="{{ route('watcheds.destroy', $watcheds->peopleID)}}" method="post" style="display: inline-block">
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
