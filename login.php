<?php require "./views/header.php"; ?>
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-sm-12 col-md-4">
            <div class="card-login">
                <div class="card text-center">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="validar_login.php" method="post">
                            <div class="form-group">
                                <input name="usuario" type="text" class="form-control" placeholder="Usuario">
                            </div>
                            <div class="form-group mt-3">
                                <input name="senha" type="password" class="form-control" placeholder="Senha">
                            </div>

                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                                <div class="text-danger">
                                    Usuário ou senha inválido(s)
                                </div>

                            <?php } ?>
                            <?php if (isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                                <div class="text-danger">
                                    Por favor, faça login antes de acessar as páginas protegidas
                                </div>

                            <?php } ?>

                            <button class="btn btn-lg btn-info btn-block mt-4" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php require "./views/footer.php"; ?>