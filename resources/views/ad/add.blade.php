
<form action="{{ route('ads.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Título del Anuncio</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Descripción del Anuncio</label>
        <textarea name="description" class="form-control" required></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>
