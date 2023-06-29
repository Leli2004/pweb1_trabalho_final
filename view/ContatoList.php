<?php
include '../controller/ContatoController.php';
include "base/header.php";

Util::verificarLogin();

$contato = new ContatoController();

if (!empty($_GET['id'])) {
    $contato->deletar($_GET['id']);
    header("location: ContatoList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $contato->pesquisar($_POST);
} else {
    $load = $contato->carregar();
}
?>
<h3>Listagem usuários</h3>
</p>

<form action="ContatoList.php" method="post" class="forms">
    <select name="campo" class="btn btn-secondary dropdown-toggle">
        <option value="nome">Nome</option>
        <option value="telefone">Telefone</option>
        <option value="email">Email</option>
    </select>
    <label class="form-floating">   Buscar por: </label>
        <input type="text" name="valor" placeholder="Pesquisar" style="width: 300px; height: 40px; border-radius: 5px; border-color: light-gray;"/>
        <button type="submit" class="btn btn-outline-primary">Buscar</button>
        <button class="btn btn-link"><a href="PacienteForm.php">Cadastrar</a></button>
    <br>
    <br>
</form>
<table class="table table-striped table-hover">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th></th>
        <th></th>
    </tr>
    <?php
    foreach ($load as $item) {
        echo "<tr>";
        echo "<td>" . $item->nome . "</td>";
        echo "<td>" . $item->telefone . "</td>";
        echo "<td>" . $item->email . "</td>";
        echo "<td><a href='ContatoForm.php?id=$item->id'>Editar</a></td>";
        echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='ContatoList.php?id=$item->id'>Deletar</a></td>";
        echo "<tr>";
    }
    ?>
</table>
<br>
<button class="btn btn-link"><a href="base/main.php">Voltar ao início</a></button> <br>
<?php
include "base/rodape.php";
