<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container">
    <form action="{{ route('stock.store') }}" method="post">
    @csrf 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nome do Produto</label>
        <input type="text" class="form-control" name="name" id="name" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Quantidade</label>
        <input type="text" class="form-control" name="quantidy" id="quantidy">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Preço</label>
        <input  name="price" id="price" type="text" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>