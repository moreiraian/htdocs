<?php include './header.php'?>
      <div class = "container mt-3">
        <table class = "table table striped table-hover text-center">
          <thead> 
            <tr>
              <th>#</th>
              <th>Nome</th>
              <th>Quantidade</th>
              <th>Preço</th>
              <th>Imagem</th>
              <th colspan = 2>Editar</th>
            </tr>  
          <thead>
          <tbody>
            <!-- estruturad o array -->
              <?php $lista = array(
                array(
                "id"=>1,
                "nome"=>"Caneta",
                "quantidade"=>"100 un",
                "preço"=> 10.90,
                "imagem"=> "#"
                ),
                array(
                "id"=>2,
                "nome"=>"Lapis",
                "quantidade"=>"250 un",
                "preço"=> 3.50,
                "imagem"=> "#"
                ),
                array(
                "id"=>3,
                "nome"=>"Borracha",
                "quantidade"=>"132 un",
                "preço"=> 0.40,
                "imagem"=> "#"
                ),
                );
              ?>
            <tr> 
            <!-- Estrutura de repetição -->
            <?php for($i= 0; $i <sizeof($lista); $i++) : ?>
              <td><?= $i +1?></td>
              <td><?= $lista[$i]['nome']?></td>
              <td><?= $lista[$i]['quantidade']?></td>
              <td><?= $lista[$i]['preço']?></td>
              <td><a href = "#"><i class="fa fa-file-image-o" aria-hidden="true"></i></td>
              <td><a href = "#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
              <td><a href = "#"><i class="fa fa-trash" aria-hidden="true"></i></td>
            </tr>
              <?php endfor; ?>
          <tbody>
        </table>        
      <div>
  
<?php include './footer.php'?>