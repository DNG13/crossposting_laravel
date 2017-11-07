@extends('main')
@section('title', 'Services')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2>Соцмережі:</h2>
                <br>
                <div class="services">
                    <ul class="list-inline">
                        <li class="Twitter col-md-4">
                            {{--if statment for reference or 'added' --}}
                            {!! 1 == 1 ? "<a href=\"\">" : "Додано<br>"!!}
                                <img src="/images/icons/twitter.png" alt="twitter"/><br>Twitter</a>
                        </li>
                        <li class="Facebook  col-md-4">
                            {{--if statment for reference or 'added' --}}
                            {!! 1 == 1 ? "<a href=\"\">" : "Додано<br>"!!}
                                <img src="/images/icons/facebook.png" alt="facebook"/><br>Facebook</a>
                        </li>
                        <li class="Instagram  col-md-4">
                            {{--if statment for reference or 'added' --}}
                            {!! 1 == 1 ? "<a href=\"\">" : "Додано<br>"!!}
                                <img src="/images/icons/instagram.png" alt="Instagram"/><br>Instagram</a>
                        </li>
                    </ul>
                </div>
            <p>Додайте ваші блоги і акаунти в соціальних мережах.
                Щоб додати ваші блоги, натисніть на іконку вище.
                Після цього ви можете відправляти пости у додані мережі
                <a href="/posts/create">тут.</a>
            </p>
            </div>
        </div>
    </div>
@endsection