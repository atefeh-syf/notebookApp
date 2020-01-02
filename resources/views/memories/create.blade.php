@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/m" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="login-header pb-4">{{ __('ثبت خاطره جدید') }}</div>   
                    <div class="form-group row justify-content-center">
                        <div class="col-md-10">
                            <input id="mem_title" type="text" placeholder="عنوان خاطره" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-md-10">
                            <textarea id="mem_text" rows="15" placeholder="متن خاطره" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus ></textarea>
                            
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div> 
            </div> 
        </div>
        <div class="row justify-content-center">
                <a type="submit" href="/m" class="btn btn-del center-block"> {{ __(' بازگشت ') }} </a>

                <button type="submit" class="btn btn-edit center-block">
                    {{ __(' ثبت ') }}
                </button>
            </div>
    </form>
</div>
@endsection
