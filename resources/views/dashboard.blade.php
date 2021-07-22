<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Laravel</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><h4 class="card-title">Control</h4></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse d-flex justify-content-end p-2" id="navbarSupportedContent">
        <form method="POST" action="{{ route('logout') }}" class="form-inline my-2 my-lg-0">
             {{ csrf_field() }}
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
        </form>
    </div>
    </nav>
    </header>
    <!---->
    <main>
        <div class="container my-5">
        @if (session('message'))
            <div class="flex justify-center items-center m-1 font-medium py-1 px-2 bg-white rounded-md text-green-700 bg-green-100 border border-green-300 ">
                {{ session('message') }}
            </div>
        @endif
            <div>
                <h4 class="card-title">Controle de estoque</h4>
            </div>
            <div class="card">
            <form action="{{ route('stock.edits') }}" method="post">
                        @csrf 
                        @method('put') 
                <div class="d-flex justify-content-end p-2">
                    <div>
                        <button id="add__new__list" type="button" onclick="location.href='{{ url('create') }}'" class="btn btn-success"><i class="fas fa-plus"></i>Novo</button>
                    </div>
                    
                        <button id="add__new__list" type="submit" class="btn btn-primary ml-3"><i class="fas fa-plus"></i>Editar todos</button>
                    
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    @foreach ($stock as $key=>$sto)
                    <tbody>
                        <tr>
                            <th scope="row">
                                {{$sto->id}}   
                            </th>
                            <td>
                                <input value="{{$sto->id}}" name="produto[{{$key}}][id]" id="id" type="hidden"class="form-control">                                
                                <input value="{{$sto->name}}" name="produto[{{$key}}][name]" id="name" type="text"class="form-control">                                
                            </td>
                            <td>
                                <input value="{{$sto->quantidy}}" name="produto[{{$key}}][quantidy]" id="quantidy" type="text"class="form-control">                                
                            </td>
                            <td>
                               <input value="{{$sto->price}}" name="produto[{{$key}}][price]" id="price" type="text" class="form-control" >                                
                            </td>
                            <td>
                            <div class="row">
                                <div>
                                <a class="btn btn-sm btn-primary mr-1" href="{{ route('stock.edit', [$sto->id]) }}"><i class="far fa-edit"></i> editar</a>
                                </div>
                                <a type="submit" class="btn btn-sm btn-danger" href="{{ route('stock.destroy', [$sto->id]) }}"><i class="far fa-delete"></i> deletar</a>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            </form>
            <!-- Large modal -->


            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="card-body text-center">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class=" card col-8 offset-2 my-2 p-3">
                            <form>
                                <div class="form-group">
                                    <label for="listname">List name</label>
                                    <input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
                                </div>
                                <div class="form-group">
                                    <label for="datepicker">Deadline</label>
                                    <input type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Pick up a date">
                                </div>
                                <div class="form-group">
                                    <label for="datepicker">Add a list item</label>
                                    <div class="input-group">

                                        <input type="text" class="form-control" placeholder="Add an item" aria-label="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!---->

    <!---->
    <footer>
        
    </footer>
</body>

</html>
