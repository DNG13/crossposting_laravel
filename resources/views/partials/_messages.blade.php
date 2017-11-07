@if(Session::has('success'))
    <div class="alert alert-success">
        Success: {{Session::get('success')}}
    </div>
@endif
@if(count($errors)>0)
    <div class="alert alert-danger">
        @if(count($errors)==1)
            Error:
        @else
            Errors:
        @endif
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
        Success: {{Session::get('error')}}
    </div>
@endif