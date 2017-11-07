@extends('main')
@section('title', 'New Post')
@section('stylesheet')
    {!! Html::style('css/parsley.css') !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3><strong>Нове повідомлення в соціальні мережі.</strong></h3>
            <hr>
            {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
            <div class="form-group">
                <h4>Виберіть соцмережі до яких відсилати повідомлення.</h4>
                    <span class="col-md-3">
                        <i class="fa fa-check-square-o fa-3x" aria-hidden="true"> </i><br>
                        {!! Form::label('all', 'Обрати всі', ['class' => 'control-label']) !!}
                        {{ Form::checkbox('all', 1, null,['class' => 'check']) }}
                    </span>
                    <span class="col-md-3">
                        <img src="/images/icons/twitter.png" alt="twitter"/><br>
                        {!! Form::label('tw', 'Twitter', ['class' => 'control-label']) !!}
                        {{ Form::checkbox('tw', 1, null,['class' => 'check']) }}
                    </span>
                    <span class="col-md-3">
                        <img src="/images/icons/facebook.png" alt="facebook"/><br>
                        {!! Form::label('fb', 'Facebook', ['class' => 'control-label']) !!}
                        {{ Form::checkbox('fb', 1, null,['class' => 'check']) }}
                    </span>
                    <span class="col-md-3">
                        <img src="/images/icons/instagram.png" alt="instagram"/><br>
                        {!! Form::label('in', 'Instagram', ['class' => 'control-label']) !!}
                        {{ Form::checkbox('in', 1, null,['class' => 'check']) }}
                    </span>

            </div>
            <div class="form-group">
                {!! Form::label('message', 'Повідомлення:', ['class' => 'control-label']) !!}
                {!! Form::textarea('message', null,
                 ['class' => 'form-control', 'placeholder'=> 'Пишіть Ваше повідомлення тут...', 'required' => '']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Відправити повідомдення',
                ['class' => 'btn btn-primary btn-block btn-lg']) !!}
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
@section('script')
    {!! Html::script('js/parsley.min.js') !!}
    <script>$("#all").click(function () {
            $(".check").prop('checked', $(this).prop('checked'));
        });
    </script>
@endsection