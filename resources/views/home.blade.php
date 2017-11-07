@extends('main')
@section('title', 'Home')

@section('content')
        <div class="row">
            <div class="jumbotron">

                <div class="site-index">
                    <div>
                        <img src="/images/logo.png" alt="logo" />
                        @if (session('status'))
                            <hr>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <h2><strong>Pозумний кросспостинг</strong></h2>
                        <p>Надсилайте повідомлення одним кліком в свої блоги та соціальні мережі.</p>
                        <p>Трохи більше інформації про кросспостинг і про сайт N.Cross-posting можно дізнатись на сторінці <a href="/about">Про нас</a>.</p>
                        <p>Про вирішення питань по роботі на сайту читайте <a href="/help">тут</a>.</p>
                        <p>Більш детально про конфіденційність на сайті можно дізнатись на <a href="/privacy">цій</a> сторінці.</p>
                    </div>
                </div>
            </div>
        </div>
@endsection
