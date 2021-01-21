@include('components.head')
@include('components.nav');

@if(session('message'))
    <div class="alert alert-primary" role="alert">
        {{session('message')}} <a href="{{ url('/admin_conferences') }}" class="alert-link">Verifique todas as conferencias</a>
    </div>
@endif
