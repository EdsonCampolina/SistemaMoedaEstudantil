<?php require_once 'C:/programas_php/htdocs/workspace/lab03/Controller/EmpresaController.php';

$arrayEmpresas = EmpresaController::listarEmpresas($con);
$i = 0;
?>
<div class="form-group lg-6 ml-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastro">
        Adicionar Empresa
    </button>
    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="modalCadastroLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title text-dark" id="modalCadastroLabel">Cadastrar Empresa</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../cadastro/actionEmpresa.php" method="POST">
                        <div class="form-row pt-4">
                            <label for="nome" class="col-4">Nome:</label>
                            <input class="form-control col-8" type="text" name="data[nome]" id="nome">
                        </div>
                        <div class="form-row d-flex justify-content-center pt-3">
                            <button class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table table-dark mx-auto" style="width: 700px;">
    <thead>
        <tr>
            <th>#id</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arrayEmpresas as $empresa) {
            $i++;
        ?>
            <tr>
                <td><?php echo $empresa['id'] ?></td>
                <td><?php echo $empresa['nome'] ?></td>
                <td>
                    <button class="btn btn-primary">Visualizar Produtos</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalAtualiza<?php echo $i; ?>">
                        Editar
                    </button>
                    <div class="modal fade" id="modalAtualiza<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="modalAtualizaLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title text-dark" id="modalAtualizaLabel">Editar Empresa</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="../cadastro/actionEmpresa.php" method="POST">
                                        <div class="form-row pt-4">
                                            <label for="nome" class="col-4"><span class="text-dark">Nome: </span></label>
                                            <input class="form-control col-8" type="text" name="atualiza[nome]" id="nomeAtualiza" value="<?php echo $empresa['nome']; ?>">
                                        </div>
                                        <input type="hidden" name="atualiza[id]" value="<?php echo $empresa['id']; ?>">
                                        <div class="form-row d-flex justify-content-center pt-3">
                                            <button class="btn btn-primary">Atualizar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger deletar" data-acao2='empresa' data-id=<?php echo $empresa['id']; ?> data-tabela='tbempresa'>Excluir</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastraProduto<?php echo $i; ?>">
                        Adicionar Produtos
                    </button>
                    <div class="modal fade" id="modalCadastraProduto<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="modalCadastraProdutoLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title text-dark" id="modalCadastraProdutoLabel">Cadastrar Produto</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="../cadastro/actionEmpresa.php" method="POST">
                                        <div class="form-row pt-4">
                                            <label for="nome" class="col-4"><span class="text-dark">Nome: </span></label>
                                            <input class="form-control col-8" type="text" name="produto[nome]">
                                        </div>
                                        <div class="form-row pt-4">
                                            <label for="nome" class="col-4"><span class="text-dark">Descrição: </span></label>
                                            <input class="form-control col-8" type="text" name="produto[descricao]">
                                        </div>
                                        <div class="form-row pt-4">
                                            <label for="nome" class="col-4"><span class="text-dark">Custo: </span></label>
                                            <input class="form-control col-8" type="text" name="produto[custo]">
                                        </div>
                                        <div class="form-row pt-4">
                                            <label for="nome" class="col-4"><span class="text-dark">Imagem: </span></label>
                                            <input class="form-control col-8" type="text" name="produto[imagem]">
                                        </div>
                                        <input type="hidden" name="produto[id]" value="<?php echo $empresa['id']; ?>">
                                        <div class="form-row d-flex justify-content-center pt-3">
                                            <button class="btn btn-primary">Cadastrar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script src="painel.js"></script>