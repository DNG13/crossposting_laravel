@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        @include('admin.sidebar')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="container">
                        <h3>Your admin application's dashboard.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
