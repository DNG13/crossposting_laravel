@extends('main')
@section('title', 'Contact')
@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2><strong>Зв'яжіться з нами</strong></h2>
            <hr>
                <form data-parsley-validate = ''>
                    <div class="form-group">
                        <label name="email">Email:</label>
                        <input id="email" name="email" class="form-control" required = '' type="email">
                    </div>
                    <div class="form-group">
                        <label name="subject">Тема:</label>
                        <input id="subject" name="subject" class="form-control"  required = '' maxlength="255">
                    </div>
                    <div class="form-group">
                        <label name="message">Повідомлення:</label>
                        <textarea id="message"
                                  name="message"
                                  class="form-control"
                                  required = ''
                                  placeholder="Пишіть Ваше повідомлення тут..."
                                  style="height:200px">
                        </textarea>
                    </div>
                    <input type="submit" value="Відправити" class="btn btn-success btn-block btn-lg">
                </form>

        </div>
    </div>
@endsection
@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection