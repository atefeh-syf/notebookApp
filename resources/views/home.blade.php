@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group row mb-0 justify-content-center ">
                <button type="submit" class="btn btn-insertmem center-block">
                    {{ __('+ ثبت خاطره جدید ') }}
                </button>
            </div>
        </div>
    </div> 
    <div class="row memry-container justify-content-center">   
        <div class="col-md-8">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="row justify-content-center ">
                            <div class="col-md-6"><div class="card-header">98/10/4</div></div>
                            <div class="col-md-6"><div class="card-header">عنوان خاطره</div></div>
                        </div>
                        <div class="row justify-content-center">
                                <button type="submit" class="btn btn-del center-block">
                                    {{ __(' حذف ') }}
                                </button>
                                <button type="submit" class="btn btn-edit center-block">
                                    {{ __(' ویرایش ') }}
                                </button>
                                <button type="submit" class="btn btn-reg center-block">
                                    {{ __(' ثبت ') }}
                                </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="row justify-content-center">
                            <div class="col-md-6"><div class="card-header">98/10/4</div></div>
                            <div class="col-md-6"><div class="card-header">عنوان خاطره</div></div>
                        </div>
                        <div class="row justify-content-center">
                                <button type="submit" class="btn btn-del center-block">
                                    {{ __(' حذف ') }}
                                </button>
                                <button type="submit" class="btn btn-edit center-block">
                                    {{ __(' ویرایش ') }}
                                </button>
                                <button type="submit" class="btn btn-reg center-block">
                                    {{ __(' ثبت ') }}
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



            <!--<div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>-->
        
    
</div>
@endsection
