<?php include './header.php';
      include './consultar_curso.php';?>
      <div class = "container mt-3">
        <table class = "table table striped table-hover text-center">
          <thead> 
            <tr>
              <th>#</th>
              <th>Nome</th>
              
              <th colspan = 2>Editar</th>
            </tr>  
          <thead>
          <tbody>

            <!-- Estrutura de repetição -->
            <?php foreach (listaCursos() as $curso): ?>
            <tr>
              <td><?= $curso['idcurso']?></td>
              <td><?= $curso['nome']?></td>
              <td><a href = "editar_curso.php?id= <?= $curso ['idcurso']?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
              <td><a href = "delete_curso.php?id= <?= $curso ['idcurso']?>"onclick="return confirm('deseja prosseguir?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
            </tr>
            <?php endforeach ?>
         
          </tbody>
        </table>        
      <div>
  
<?php include './footer.php'?>