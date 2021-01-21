@include('components.head')
@include('components.nav')

<br>
<br>
<h3 class="text-center"><br></br>Nome Utilizador: {{$user->name}} <br><br> ID Utilizador: {{$user->id}} <br><br>E-mail Utilizador: {{$user->email}}</h3>
<br><br>
@include('components.footer')
