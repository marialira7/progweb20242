<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ecercício 2 - comandos de condição</title>
</head>
<body>
    <h2>Relatório de Clientes</h2>

    <?php
    $pessoa = array("codigo"=1, "nome" => "Alberto Silva");
    $pessoa = array("codigo"=2, "nome" => "Bianca Duarte");
    $pessoa = array("codigo"=3, "nome" => "João Almeida");
    $pessoa = array("codigo"=4, "nome" => "Valéria Souza");
    $pessoa = array("codigo"=5, "nome" => "Augusto Silva");
    $lista['pessoa'][]= $pessoa1;
    $lista['pessoa'][]= $pessoa2;
    $lista['pessoa'][]= $pessoa3;
    $lista['pessoa'][]= $pessoa4;
    $lista['pessoa'][]= $pessoa5;

    //var_dump($lista);

    foreach ($lista as $listapessoa){
    ?>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>
        <?php foreach($listapessoas as $itempessoas => $valuepessoas)?>;
        <tr>
            <?php foreach($valuepessoas as $item => $value{
                echo "<td> . $value . </td>";
            })
            ?>
        </tr>
        <?php ?>
    </table>

    <?php}?>

</body>
</html>