@extends('main')
@section('title', 'Send posts')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3><strong>Відправленні повідомлення</strong></h3>
            <hr>
            <h4>На цій сторінці відображаються всі пости, надіслані в соцмережі.</h4>
            <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
            <div class="btn-group">
                <a class="btn btn-info btn-lg" href="/services">Додати соцмережу</a>
                <a class="btn btn-info btn-lg" href="/posts/create">Написати новий пост</a>
            </div>
            <hr>
            <div>
                <table class="table table-striped" border="1">
                    <thead>
                    <tr>
                        <th>Соцмережі</th>
                        <th>Текст повідомлення</th>
                        <th>Час створення</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr class="odd">
                        <td>
                            <span>{!! $post->tw == 1 ? "<img src=\"/images/icons/min_twitter.png\">" : ''!!}</span>
                            <span>{!! $post->fb == 1 ? "<img src=\"/images/icons/min_facebook.png\">" : ''!!}</span>
                            <span>{!! $post->in == 1 ? "<img src=\"/images/icons/min_instagram.png\">" : ''!!}</span>
                        </td>
                        <td>{{ substr($post->message, 0, 150)}}{{strlen($post->message)>150 ? '...' : ''}}</td>
                        <td>{{ date('j F, Y H:i', strtotime($post->created_at)) }}</td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection