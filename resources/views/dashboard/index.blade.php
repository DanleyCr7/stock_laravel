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

    </header>
    <!---->
    <main>
        <div class="container my-5">
            <div class="card-body text-center">
                <h4 class="card-title">Controle de estoque</h4>
            </div>
            <div class="card">
                <button id="add__new__list" type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fas fa-plus"></i>Novo</button>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Pincel</td>
                            <td>12</td>
                            <td>R$3.50 </td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="#"><i class="far fa-edit"></i> editar</a>
                                <a class="btn btn-sm btn-danger" href="#"><i class="fas fa-trash-alt"></i> deletar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
        <div class="container bg-info p-5">

        </div>
    </footer>
</body>

</html>
