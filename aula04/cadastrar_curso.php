<?php include './header.php'?>
<div class="container mt-3">
<fieldset>
        <legend> Formulário de cadastro </legend>
        <form action="register_curso.php" method="post">
            <div class="form-group">
                <label for="idnome">Curso</label>
                <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome do curso" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-dark">Cadastrar</button>
    </fieldset>
</div>
<?php include './footer.php'?>
  
  