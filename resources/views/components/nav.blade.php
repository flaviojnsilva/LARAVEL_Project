<!DOCTYPE html>
<link href="{{ asset('css/index/index.css') }}" rel="stylesheet">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <img id="img_logo" src="{{asset('img/navbar_logo.png')}}" alt="logo">
        <a class="navbar-brand">Conferências - Ciência & Sociedade</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item active">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/conf') }}" class="nav-link">Conferências</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}" class="nav-link">Sobre Nós</a>
                </li>
            </ul>
            <div
                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="#">
                                <button type="button" class="btn btn-light">Área Pessoal</button>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="#">
                                <button type="button" class="btn btn-light">Login</button>
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="#">
                                    <button type="button" class="btn btn-light">Registar</button>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
