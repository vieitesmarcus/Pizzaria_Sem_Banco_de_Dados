<?php include "../pizzaria/views/header.php" ?>
<?php
$pizzas = array();
$arquivo = fopen("arquivoPizzas.hd", 'r');

while (!feof($arquivo)) {
    $registros = fgets($arquivo);
    $pizzas[] = $registros;
}
fclose($arquivo);
// echo "<pre>";
// print_r($pizzas);
// echo "</pre>";
?>
<div class="container">
    
    <div class="row mt-3 mb-3 d-flex justify-content-center">
    <?php foreach ($pizzas as $pizza) {
        $sabores = explode("#", $pizza);
        if (count($sabores) < 2) {
            continue;
        }
    ?>
        <div class="col-sm-12 col-md-4 mb-3 d-flex ">
            <div class="card" style="align-self: stretch; flex-grow: 1; ">
                <div class="card-body" >
                    <h5 class="card-title" style="display: inline-block;"><?php echo $sabores[0] ?> </h5>
                    <h5 class="card-title align-self-end" style="display: inline-block;"><?php echo $sabores[2] ?> </h5>
                    <p class="card-text"><?php echo $sabores[1] ?></p>
                    <p></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>

<?php include "../pizzaria/views/footer.php" ?>