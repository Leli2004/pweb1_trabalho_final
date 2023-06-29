<?php
include '../controller/FuncController.php';
include "base/header.php";

Util::verificarLogin();

$contato = new FuncController();

if (!empty($_GET['id'])) {
    $contato->deletar($_GET['id']);
    header("location: FuncList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $contato->pesquisar($_POST);
} else {
    $load = $contato->carregar();
}
?>
<h3>Listagem Funcionários</h3>
</p>

<form action="FuncList.php" method="post" class="forms">
<select name="campo" class="btn btn-secondary dropdown-toggle">
        <option value="nome_func">Nome</option>
        <option value="cpf_func">CPF</option>
        <option value="numCracha_func">N° crachá</option>
        <option value="cargo_func">Cargo</option>
        <option value="setor_func">Setor</option>
    </select>
    <label class="form-floating">   Buscar por: </label>
    <input type="text" name="valor" placeholder="Pesquisar" style="width: 300px; height: 40px; border-radius: 5px; border-color: light-gray;"/>
    <button type="submit" class="btn btn-outline-primary">Buscar</button>
    <button class="btn btn-link"><a href="PacienteForm.php">Cadastrar</a></button>
</form>

<table class="table table-striped table-hover">
    <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>N° crachá</th>
        <th>Cargo</th>
        <th>Setor</th>
        <th>Data início</th>
    </tr>
    <?php
    foreach ($load as $item) {
        echo "<tr>";
        echo "<td>" . $item->nome_func . "</td>";
        echo "<td>" . $item->cpf_func . "</td>";
        echo "<td>" . $item->numCracha_func . "</td>";
        echo "<td>" . $item->cargo_func . "</td>";
        echo "<td>" . $item->setor_func . "</td>";
        echo "<td>" . $item->dataInicio_func . "</td>";
        echo "<td><a href='FuncForm.php?id=$item->id'>Editar</a></td>";
        echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='FuncList.php?id=$item->id'>Deletar</a></td>";
        echo "<tr>";
    }
    ?>
</table>
<br>
<button class="btn btn-link"><a href="base/main.php">Voltar ao início</a></button> <br>
<?php
include "base/rodape.php";
