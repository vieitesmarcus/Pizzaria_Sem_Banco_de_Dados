<?php require "./views/header.php"; ?>
<?php require "validar_acesso.php"; ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
        <?php if(isset($_GET['criado']) == "sucesso"){ ?>
                        <div class="alert alert-success" role="alert">
                        Pizza adicionada!!
                        </div>
                    <?php }?>
            <form method="POST" action="controllerCriaPizza.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome da Pizza</label>
                    <input name="nomePizza" type="text" class="form-control" id="exampleInputEmail1">
                    <?php if(isset($_GET['nomePizza']) == "erro"){ ?>
                        <div class="alert alert-danger" role="alert">
                        Faltou o nome da pizza!!
                        </div>
                    <?php }?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Descrição</label>
                    <input name="descricao" type="text"  class="form-control" id="exampleInputPassword1">
                    <?php if(isset($_GET['descricao']) == "erro"){ ?>
                        <div class="alert alert-danger" role="alert">
                        Faltou a descrição da pizza!!
                        </div>
                    <?php }?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Preço</label>
                    <input name="preco" type="text"  class="form-control" id="exampleInputPassword1">
                    <?php if(isset($_GET['preco']) == "erro"){ ?>
                        <div class="alert alert-danger" role="alert">
                        Faltou o Preço da pizza!!
                        </div>
                    <?php }?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<script>

</script>
<?php require "./views/footer.php"; ?>