<?php
include_once '../controller/ConsultaController.php';
include "base/header.php";
Util::verificarLogin();

$contato = new ConsultaController();

if (!empty($_POST)) {
  if (empty($_POST['id'])) {
    $contato->salvar($_POST);
  } else {
    $contato->atualizar($_POST);
  }
  header("location: " . $_SESSION['url']);
}
if (!empty($_GET['id'])) {
  $data = $contato->buscar($_GET['id']);
}
?>

<form action="ConsultaForm.php" method="post" class="form">
  <h3>Consultas agendadas</h3>

  <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />

  <label for="" placeholder="dd/mm/aaaa">Data serviço</label>
  <input type="date" name="data_con" class="form-control" value="<?php echo (!empty($data->data_con) ? $data->data_con : "") ?>"><br>

  <label for="" placeholder="hh:mm">Horário serviço</label>
  <input type="time" name="hora_con" class="form-control" value="<?php echo (!empty($data->hora_con) ? $data->hora_con : "") ?>"><br>

  <label for="" placeholder="000.000.000-00">CPF paciente</label>
  <input type="text" name="paciente_con" class="form-control" value="<?php echo (!empty($data->paciente_con) ? $data->paciente_con : "") ?>"><br>

  <label for="" placeholder="Exame, consulta...">Tipo de atendimento</label>
  <input type="text" name="atend_con" class="form-control" value="<?php echo (!empty($data->atend_con) ? $data->atend_con : "") ?>"> <br>

    <label for="" placeholder="Coleta de dados, mostrar exame...">Tipo de serviço</label>
    <input type="text" name="tipo_con" class="form-control" value="<?php echo (!empty($data->tipo_con) ? $data->tipo_con : "") ?>"> <br>

    <label for="" placeholder="Clínico geral, urologia, pediatria...">Área médica</label>
    <input type="text" name="area_con" class="form-control" value="<?php echo (!empty($data->area_con) ? $data->area_con : "") ?>"> <br>

  <button type="submit" class="btn btn-success">
    <?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?>
  </button><br>
  <button class="btn btn-link"><a href="PacienteList.php">Voltar</a></button>
</form>
<?php
include "base/rodape.php";