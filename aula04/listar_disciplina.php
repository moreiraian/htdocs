<?php 
    include './header.php';
    include './consultar_disciplina.php';
?>
    <div class="container mt-3">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Estruturas de repetição -->
                <?php foreach (listaDisciplina() as $disciplina): ?>
                <tr>
                    <td><?= $disciplina'id_disciplina'] ?></td>
                    <td><?= $disciplina['nome'] ?></td>
                    <td><span data-toggle="modal" data-target="#disciplinaModal" class="" data-disciplina_id="<?= $disciplina['id_disciplina'] ?>" data-disciplina_name="<?= $disciplina['nome'] ?>" data-product-quantity="1"><i class="fas fa-edit text-primary"></i></span></td>
                    <td><a href = "delete_disciplina.php?id= <?= $disciplina ['id_disciplina']?>"onclick="return confirm('deseja prosseguir?')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
           
                    
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="disciplinaModal" tabindex="-1" role="dialog" aria-labelledby="disciplinaModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Editar Disciplina</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3">
                        <fieldset>
                            <form id="edit_form" action="editar_disciplina.php" method="post">
                                <div class="form-group">
                                    <label for="id_" class="sr-only">Nome</label>
                                    <input type="hidden" id="id_" name="txtId" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="idnome">Nome</label>
                                    <input type="text" id="idnome" name="txtNome" placeholder="Informe o nome" class="form-control" required>
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="submit" form="edit_form" class="pull-left btn btn-default">Editar</button>
                    <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
<?php include './footer.php' ?>

<script>
    var disciplina = '';
    var disciplina_name = '';
    jQuery('body').on('click', '[data-toggle="modal"]', function() {
        disciplina_id = $(this).attr('data-disciplina_id');
        disciplina_name = $(this).attr('data-disciplina_name');
        $("#id_").attr({'value':disciplina_id});
        $("#idnome").attr({'value':disciplina_name});
    });
</script>