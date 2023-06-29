<?php
include '../controller/ConsultaController.php';
include "base/header.php";

Util::verificarLogin();

$contato = new ConsultaController();

if (!empty($_GET['id'])) {
    $contato->deletar($_GET['id']);
    header("location: ConsultaList.php");
    $_SESSION["msg"] = "Registro Deletado com sucesso!";
}

if (!empty($_POST)) {
    $load = $contato->pesquisar($_POST);
} else {
    $load = $contato->carregar();
}
?>
<h3>Listagem de Consultas</h3>
</p>

<form action="ConsultaList.php" method="post" class="forms">
<select name="campo" class="btn btn-secondary dropdown-toggle">
        <option value="data_con">Data (dd/mm/aaaa)</option>
        <option value="hora_con">Horário (hh:mm)</option>
        <option value="paciente_con">CPF paciente</option>
        <option value="atend_con">Tipo atendimento</option>
        <option value="tipo_con">Tipo serviço</option>
        <option value="area_con">Área médica</option>
    </select>
    <label class="form-floating">   Buscar por: </label>
    <input type="text" name="valor" placeholder="Pesquisar" style="width: 300px; height: 40px; border-radius: 5px; border-color: light-gray;"/>
    <button type="submit" class="btn btn-outline-primary">Buscar</button>
    <button class="btn btn-link"><a href="PacienteForm.php">Cadastrar</a></button> <br><br>
</form>

<table class="table table-striped table-hover">
    <tr>
        <th>Data do serviço</th>
        <th>Horário do serviço</th>
        <th>CPF do paciente</th>
        <th>Tipo de atendimento</th>
        <th>Tipo de serviço</th>
        <th>Área médica</th>
    </tr>
    <?php
    foreach ($load as $item) {
        echo "<tr>";
        echo "<td>" . $item->data_con . "</td>";
        echo "<td>" . $item->hora_con . "</td>";
        echo "<td>" . $item->paciente_con . "</td>";
        echo "<td>" . $item->atend_con . "</td>";
        echo "<td>" . $item->tipo_con . "</td>";
        echo "<td>" . $item->area_con . "</td>";
        echo "<td><a href='ConsultaForm.php?id=$item->id'>Editar</a></td>";
        echo "<td><a onclick='return confirm(\"Deseja Excluir? \")' href='ConsultaList.php?id=$item->id'>Deletar</a></td>";
        echo "<tr>";
    }
    ?>
</table>
<br>
<button class="btn btn-link"><a href="base/main.php">Voltar ao início</a></button> <br>
<?php
include "base/rodape.php";
