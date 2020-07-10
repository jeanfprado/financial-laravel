@extends('layouts.master')

@section('page')
<div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('assets/images/logo.gif')}}">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Senha</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                    <a href="{{ route('password.request') }}">Esqueceu a senha ? </a>

                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Entrar</button>
                            </form>
                            <div class="register-link">
                                <p>
                                <a href="{{ route('register') }}">Ainda não tem uma conta? </a>

                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
