@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group row mb-0 justify-content-center ">
                <a type="button" class="btn btn-insertmem center-block">{{ __('+ ثبت خاطره جدید ') }} </a>
            </div>
        </div>
    </div> 
    <div class="row memry-container pt-4 justify-content-center ">  
    @foreach ($user->memories as $memory) 
        <div class="col-5 pt-4">
                <div class="card">
                    <div class="row justify-content-center ">
                        <div class="col-md-6"><div class="card-header">98/10/4</div></div>
                        <div class="col-md-6"><div class="card-header">{{ $memory->title }}</div></div>
                    </div>
                        <div class="row justify-content-center">
                            <a type="submit" class="btn btn-del center-block"> {{ __(' حذف ') }} </a>
                            <a type="submit" class="btn btn-edit center-block">{{ __(' ویرایش ') }}</a>
                            <a type="submit" class="btn btn-reg center-block"> {{ __(' مشاهده ') }} </a>
                        </div>
                </div>
         </div>
    @endforeach
    </div>  
</div>
@endsection
