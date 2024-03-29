@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">會員登入</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}" aria-label="會員登入">
                    @csrf
                    <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">電子信箱</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{$errors->has('email')?'is-invalid' : ''}}"
                                name="email" value="{{old('email')}}" required autofocus>
                                <!--@if($errors->has('email'))
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                @endif-->
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label text-md-right">密碼</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{$errors->has('password')?'is-invalid' : ''}}"
                                name="password" required>
                                <!--@if($errors->has('password'))
                                    <p>{{$errors->password}}<p>
                                    <span class="text-danger invalid-feedback" role="alert">
                                        <strong>{{$errors->first('password')}}</strong>
                                    </span>
                                @endif-->
                            </div>
                        </div>

                        @if($errors->has('email') || $errors->has('password'))
                            <div class="form-group row">
                                <p class="text-danger offset-md-4">信箱或密碼錯誤!</p>
                            </div>
                        @endif
                        
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{old('remember') ? 'checked' : ''}} > 
                                        <label class="form-check-label" for="remember">記住我</label>
                                </div>
                            </div>        
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-info">登入</button>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <p class="text-right mb-0">
                                    <a href="{{ route('password.request') }}">忘記密碼?</a>
                                </p>
                            </div>
                        </div>

                        <hr>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2 text-center">
                                <p>其他登入方式</p>
                                <a href="{{ route('social.redirect', ['provider' => 'google']) }}"
                                class="btn btn-md btn-outline-info btn-block">google</a> 
                            </div>
                        </div>
                               
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
