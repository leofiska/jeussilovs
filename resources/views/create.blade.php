<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Biblioteca FisCar</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
    <style>
    div.menu-div {
        position: fixed;
        left: 0px;
        right: 0px;
        height: 2em;
        top: 0px;
        z-index: 10000;
        background-color: #ffffff;
        border-bottom: 1px solid #333333;
    }
    div.menu-div > div {
        display: inline-block;
        padding: 2px 10px;
    }
    </style>
    </head>
  <body>
   {!! $TheBestNavBar->asDiv(['class' => 'menu-div']) !!}
    <div class="container">
      <h2>Cadastro de Livros</h2><br/>
      <form method="post" action="{{route('livros.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Titulo">Título:</label>
            <input type="text" class="form-control" name="titulo">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Edicao">Edição:</label>
              <input type="text" class="form-control" name="edicao">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Editora">Editora:</label>
              <input type="text" class="form-control" name="editora">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Autor">Autor:</label>
              <input type="text" class="form-control" name="autor">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Genero">Genero:</label>
              <input type="text" class="form-control" name="genero">
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Ano">Ano:</label>
              <input type="text" class="form-control" name="ano">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="arquivo">    
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="enviar" class="btn btn-success">Enviar</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>
