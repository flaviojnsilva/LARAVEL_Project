@include('components.head')
<body>
<header>
    @include('components.nav')
    <br>
    <br>
    <h2><br>Criar Nova Conferência</h2><br>
</header>

<form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}"
               placeholder="Insira o Nome">
    </div>
    <div class="form-group">
        <label for="localizacao">Local:</label>
        <input type="text" name="localizacao" id="localizacao" class="form-control" value="{{old('local')}}"
               placeholder="Insira o Local">
    </div>
    <div class="form-group">
        <label for="lotacao">Lotação:</label>
        <input type="number" name="lota" id="lota" class="form-control" value="{{old('lotacao')}}"
               placeholder="Insira a Lotação">
    </div>

    <div class="form-group">
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" textarea class="form-control" value="{{old('descricao')}}"
               placeholder="Insira a Descrição">
    </div>

    <div class="form-group">
        <label for="data">Escolher data:</label>
        <input type="datetime-local" name="data" id="data" class="form-control" value="date">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Imagem de Apresentação</label>
        <input type="file" name="image" class="form-control"></div>
    <button type="submit" class="btn btn-outline-success">Criar</button>

</form>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@include('components.footer')
</body>
