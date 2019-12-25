@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="login-header">{{ __('ثبت خاطره جدید') }}</div>
            <form method="POST" action="{{ route('login') }}">    
                <div class="form-group row justify-content-center">
                    <div class="col-md-10">
                        <input id="mem_title" type="text" placeholder="عنوان خاطره" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-md-10">
                        <textarea id="mem_text" rows="15" placeholder="متن خاطره" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus ></textarea>
                        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
            </form>   
        </div> 
    </div>
    <div class="row justify-content-center">
            <button type="submit" class="btn btn-del center-block">
                {{ __(' بازگشت ') }}
            </button>
            <button type="submit" class="btn btn-edit center-block">
                {{ __(' ثبت ') }}
            </button>
        </div>
</div>
@endsection
