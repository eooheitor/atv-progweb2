<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade 29/02</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <h3 class="title text-center">Formulário PHP</h3>
      <div class="col-8 offset-2">
        <form method="POST" action="requisicao.php">
          <input type="hidden" name="requisicao" value="s">
          <div class="mb-3">
            <label for="" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="" name="telefone">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" id="" name="email">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Mensagem</label>
            <textarea type="text" class="form-control" id="" name="mensagem"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>