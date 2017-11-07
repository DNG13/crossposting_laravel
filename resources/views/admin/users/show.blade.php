@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">User: <strong>{{ $user->name }}</strong></div>
                    <div class="panel-body">
                        <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/users/' . $user->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/users', $user->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete User',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th>ID</th><td>{{ $user->id }}</td></tr>
                                    <tr><th> Email </th><td> {{ $user->email }} </td></tr>
                                    <tr>
                                        <th> Admin </th>
                                        <td>{!!($user->is_admin === 1) ? '<i class="fa fa-check" aria-hidden="true"></i>' : ''!!}</td>
                                    </tr>
                                </tbody>
                            </table>
                            @if(count($posts)==0)
                                <h3>This user have no any posts.</h3>
                            @else
                            <table class="table table-borderless">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr><th><h3>Posts</h3></th></tr>
                                    <tr>
                                        <th>Соцмережі</th>
                                        <th>Текст повідомлення</th>
                                        <th>Час створення</th>
                                        <th>Дія</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $item)
                                        <tr>
                                            <td>
                                                <span>{!! $item->tw == 1 ? "<img src=\"/images/icons/min_twitter.png\">" : ''!!}</span>
                                                <span>{!! $item->fb == 1 ? "<img src=\"/images/icons/min_facebook.png\">" : ''!!}</span>
                                                <span>{!! $item->in == 1 ? "<img src=\"/images/icons/min_instagram.png\">" : ''!!}</span>
                                            </td>
                                            <td>{{ substr($item->message, 0, 150)}}{{strlen($item->message)>150 ? '...' : ''}}</td>
                                            <td>{{ date('j F, Y H:i', strtotime($item->created_at)) }}</td>
                                            <td>
                                                <a href="{{ url('/admin/posts/' . $item->id) }}" title="View Post"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/admin/posts/' . $item->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                {!! Form::open([
                                                    'method'=>'DELETE',
                                                    'url' => ['/admin/posts', $item->id],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Post',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination-wrapper"> {!! $posts->appends(['search' => Request::get('search')])->render() !!} </div>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
