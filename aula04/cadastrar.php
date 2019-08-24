<?php include './header.php'?>
<div class="container mt-3">
<fieldset>
        <legend> Formulário de cadastro </legend>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="idnome">Nome</label>
                <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idqtd">Quantidade</label>
                <input type="number" id="idqtd" name="txtQtd" placeholder="Informe a quantidade" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idpreco">Preço</label>
                <input type="number" min="0.0" max="99.99" step="0.10" id="idpreco" name="txtPreco" placeholder="Informe a quantidade" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idimg">Foto</label>
                <input type="file" id="idimg" name="flImg" placeholder="Informe a foto" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-dark">Cadastrar</button>
    </fieldset>
</div>
<?php include './footer.php'?>
  
  