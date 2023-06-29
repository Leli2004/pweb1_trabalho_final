<?php
include '../controller/PacienteController.php';
include "base/header.php";

Util::verificarLogin();

$contato = new PacienteController();

if (!empty($_GET['id'])) {
    $contato->deletar($_GET['id']);
    header("location: PacienteList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $contato->pesquisar($_POST);
} else {
    $load = $contato->carregar();
}
?>
<h3>Listagem Pacientes</h3>
</p>

<form action="PacienteList.php" method="post" class="forms">   
    <select name="campo" class="btn btn-secondary dropdown-toggle">
        <option value="nome_paciente">Nome</option>
        <option value="cpf_paciente">CPF</option>
        <option value="dataNasc_paciente">Data nasc.</option>
        <option value="telefone_paciente">Telefone</option>
        <option value="endereco_paciente">Endereço</option>
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
        <th>Data nasc.</th>
        <th>Telefone</th>
        <th>Endereço</th>
    </tr>
    <?php
    foreach ($load as $item) {
        echo "<tr>";
        echo "<td>" . $item->nome_paciente . "</td>";
        echo "<td>" . $item->cpf_paciente . "</td>";
        echo "<td>" . $item->dataNasc_paciente . "</td>";
        echo "<td>" . $item->telefone_paciente . "</td>";
        echo "<td>" . $item->endereco_paciente . "</td>";
        echo "<td><a href='PacienteForm.php?id=$item->id'>Editar</a></td>";
        echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='PacienteList.php?id=$item->id'>Deletar</a></td>";
        echo "<tr>";
    }
    ?>
</table>
<br>
<button class="btn btn-link"><a href="base/main.php">Voltar ao início</a></button> <br>
<?php
include "base/rodape.php";