@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="login-header">{{$memory->title}}</div>
            <form method="POST" action="{{ route('login') }}">    
                <div class="form-group row justify-content-center">
                    <div class="col-md-10">
                        {{$memory->description}}
                    </div>
                </div>
                
            </form>   
        </div> 
    </div>
    <div class="row justify-content-center">
            <a type="submit" href="/m" class="btn btn-del center-block"> {{ __(' بازگشت ') }} </a>
        </div>
</div>
@endsection
