@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Post: <strong>{{ $post->id }} by {{ $post->user_id }}</strong></div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />
                        <div><strong>Соцмережі:</strong>
                            <span>{!! $post->tw == 1 ? "<img src=\"/images/icons/min_twitter.png\">" : ''!!}</span>
                            <span>{!! $post->fb == 1 ? "<img src=\"/images/icons/min_facebook.png\">" : ''!!}</span>
                            <span>{!! $post->in == 1 ? "<img src=\"/images/icons/min_instagram.png\">" : ''!!}</span>
                        </div>
                        {!! Form::model($post, [
                            'method' => 'PATCH',
                            'url' => ['/admin/posts', $post->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}
                        @include ('admin.posts.form', ['submitButtonText' => 'Update'])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
