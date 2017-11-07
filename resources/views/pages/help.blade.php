@extends('main')
@section('title', 'Help')
@section('content')
    <div class="row">
        <div class="jumbotron">
            <div class="site-index">
                <div class="site-help">
                    <img src="/images/help.png" alt="help" />
                    <h3><i>Як додати соцмережі?</i></h3>
                    <p>Щоб додати соцмережі, спочатку зареєструйтесь на відповідній платформі.
                        Далі на сторінці "Соцмережі" натисніть значок відповідної мережі. Ви будете перенаправлені на сайт мережі,
                        де вас запитають чи ви даєте дозвіл N.Cross-posting сайту на доступ до вашого облікового запису.
                        Треба надати дозвіл.</p>
                    <h3><i>Який спосіб авторізації в соцмережах використовує N.Cross-posting сайт?</i></h3>
                    <p>Використовується безпечний протокол авторізації Auth.
                        При цьому вам необхідно пройти авторізацію у відповідній соцмережі,
                        і лише надати дозвіл N.Cross-posting сайту здійснювати певні дії з вашим обліковим записом.</p>
                    <h3><i>Пости.</i></h3>
                    <p>Після того як ви додали ваші соцмережі, ви можете відправляти до них пости.</p>
                </div>
            </div>
        </div>
    </div>
@endsection