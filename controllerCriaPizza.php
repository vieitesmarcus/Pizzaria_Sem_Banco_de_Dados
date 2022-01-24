<?php
require "validar_acesso.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
$erro = array();
$textoErro = "?";


foreach ($_POST as $key => $value) {
    if ($value == "") {
        $erro[] = $key;
        $textoErro .= $key . "=erro&";
        header("Location: criaPizza.php" . $textoErro);
    }
}


if ($_POST['nomePizza'] != "" && $_POST['descricao'] != "" && $_POST['preco'] != "") {
    $arquivos = fopen("arquivoPizzas.hd", "a");

    $nome = str_replace("#", "-", $_POST['nomePizza']);
    $descricao = str_replace("#", "-", $_POST['descricao']);;
    $preco = str_replace("#", "-", $_POST['preco']);;

    $textoRegistra = $nome . "#" . $descricao . "#" . $preco . PHP_EOL;

    fwrite($arquivos, $textoRegistra);
    fclose($arquivos);

    header("Location: criaPizza.php?criado=sucesso");
}

    // $arquivos = fopen("arquivoPizzas.hd", "a");

    //     $nome = str_replace("#", "-", $_POST['nomePizza']);
    //     $descricao = str_replace("#", "-", $_POST['descricao']);;
    //     $preco = str_replace("#", "-", $_POST['preco']);;

    //     $textoRegistra = $nome . "#" . $descricao . "#" . $preco . PHP_EOL;

    //     fwrite($arquivos, $textoRegistra);
    //     fclose($arquivos);

    //     header("Location: criaPizza.php?criado=sucesso");
// if(isset($_POST['nomePizza']) && $_POST['nomePizza'] != "" && isset($_POST['descricao']) && $_POST['descricao'] != "" && isset($_POST['preco']) && $_POST['preco'] != ""){
//     echo $_POST['nomePizza'];
//     echo "<br/>";
//     echo $_POST['descricao'];
//     echo "<br/>";
//     echo $_POST['preco'];
// }elseif(){
//     echo "Algum é nullo";
// }
