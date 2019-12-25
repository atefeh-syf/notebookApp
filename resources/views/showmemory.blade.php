@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="login-header">{{ __('عنوان خاطره ') }}</div>
            <form method="POST" action="{{ route('login') }}">    
                <div class="form-group row justify-content-center">
                    <div class="col-md-10">
                        <!--متن خاطره -->
                    </div>
                </div>
                
            </form>   
        </div> 
    </div>
    <div class="row justify-content-center">
            <button type="submit" class="btn btn-del center-block" >
                {{ __(' بازگشت ') }}
            </button>
        </div>
</div>
@endsection
