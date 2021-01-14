<x-app-layout>
    <x-slot name="header">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
              id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>

        <div class="container">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-link" href="{{ url('/dashboard') }}" class="nav-link">Informação Básica</a>
                <a class="nav-link" href="{{ url('/users_conferences') }} " class="nav-link">Conferências</a>
            </div>
            <div class="tab-content ml-1" id="myTabContent">
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;"><br>Nome</label>
                    </div>
                    <div class="col-md-8 col-6"><br>
                        {{ Illuminate\Support\Facades\Auth::user()->name }}
                    </div>
                </div>
                <hr/>
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">E-mail</label>
                    </div>
                    <div class="col-md-8 col-6">
                        {{ Illuminate\Support\Facades\Auth::user()->email }}
                    </div>
                </div>
                <hr/>
            </div>
        </div>
    </x-slot>
</x-app-layout>
