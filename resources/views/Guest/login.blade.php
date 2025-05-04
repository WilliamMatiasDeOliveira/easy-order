@extends('Layouts.main_layout')

@section('title', 'Login')

@section('content')
    <div class="container-fluid login-container">
        <div class="row col-4 login-row">
            <div class="form-logo">
                <img src="{{ asset('assets/imgs/logo.png') }}" alt="logo">
                <span>Easy Order</span>
            </div>
            <div class="login-col">
                <form action="{{ route('login.submit') }}" method="post">
                    @csrf
                    <div>
                        <label for="text-username">Usuário</label>
                        <input type="text"name="text-username" class="form-control" placeholder="example@email.com">
                        @error('text-username')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <label for="password">Senha</label>
                        <input type="password"name="password" class="form-control">
                        @error('password')
                            <div class="text-warning">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <input type="submit"class="form-control" value="ENTRAR">
                </form>
            </div>
        </div>
    </div>
@endsection
