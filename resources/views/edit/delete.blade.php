@extends('layout')
@section('title', '- Song Delete')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Confirm Track Deletion</h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>You are about to delete <strong>{{ $song['name'] }}</strong></li>
                            <li>If your song has multiple versions, all of them will be deleted</li>
                        </ul>
                    </div>
                    <div class="row">
                        <form method="post" action="{{ route('browse.detail.delete.submit',['id' => $song['id']]) }}">
                            {{ csrf_field() }}
                            <div class="col-md-2 col-md-offset-3">
                                <button class="btn btn-danger" type="submit">DELETE</button>
                            </div>
                            <div class="col-md-2 col-md-offset-2"><a class="btn btn-default" href="{{route('browse.detail',['key' => $song['id']]) }}">Back</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection