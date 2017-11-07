@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Post:<strong> {{ $post->id }}</strong></div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/posts/' . $post->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/posts', $post->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Post',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>User</th>
                                    <td> {{ $post->user_id}}</td>
                                </tr>
                                <tr>
                                    <th>Соцмережі</th>
                                    <td>
                                        <span>{!! $post->tw == 1 ? "<img src=\"/images/icons/min_twitter.png\">" : ''!!}</span>
                                        <span>{!! $post->fb == 1 ? "<img src=\"/images/icons/min_facebook.png\">" : ''!!}</span>
                                        <span>{!! $post->in == 1 ? "<img src=\"/images/icons/min_instagram.png\">" : ''!!}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Текст повідомлення</th>
                                    <td> {{ substr($post->message, 0, 150)}}{{strlen($post->message)>150 ? '...' : ''}}</td>
                                </tr>
                                <tr>
                                    <th> Час створення </th>
                                    <td>{{ date('j F, Y H:i', strtotime($post->created_at)) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
