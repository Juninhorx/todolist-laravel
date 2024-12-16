@extends('layouts.main_layout')
@section('content')
<main class="form-signin w-25 m-auto">
    <form action="{{ route('singinSubmit') }}" method="post" novalidate>
        @csrf
        <img class="mb-4 mx-auto" src="{{ asset('assets/imgs/checklist.png') }} " alt="" width="64"
            height="57">
        <h1 class="h3 mb-3 fw-normal">Crie sua conta</h1>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nameInput" placeholder="Nome" name="name"
                value="{{ old('name') }}">
            <label for="nameInput">Nome/Sobrenome</label>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="phoneInput" placeholder="(00)0000-0000" name="phone"
                value="{{ old('phone') }}">
            <label for="phoneInput">Telefone</label>
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" name="email"
                value="{{ old('email') }}">
            <label for="emailInput">Email</label>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="passwordInput" placeholder="Password" name="password"
                value="{{ old('password') }}">
            <label for="passwordInput">Senha</label>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        @if (session('singinError'))
            <div class="alert alert-danger text-center">
                {{ session('singinError') }}
            </div>
        @endif
        <button type="submit" class="btn btn-primary w-100 py-2">Criar conta</button>
        <p class="mt-2">Já tem uma conta ? <a href="{{ route('login') }}">Fazer login</a>.</p>
        <p class="mt-5 mb-3 text-body-secondary">&copy; Ricardo Xavier</p>
    </form>
</main>
@endsection
