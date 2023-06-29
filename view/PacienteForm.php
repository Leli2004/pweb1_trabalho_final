<?php
include_once '../controller/PacienteController.php';
include "base/header.php";

Util::verificarLogin();

$contato = new PacienteController();

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

<form action="PacienteForm.php" method="post"  >
  <h3>Pacientes</h3>

  <input type="hidden" name="id" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />

  <label for="">Nome</label>
  <input type="text" name="nome_paciente" class="form-control" value="<?php echo (!empty($data->nome_paciente) ? $data->nome_paciente : "") ?>"><br>

  <label for="">CPF</label>
  <input type="text" name="cpf_paciente" class="form-control" value="<?php echo (!empty($data->cpf_paciente) ? $data->cpf_paciente : "") ?>"><br>

  <label for="">Data Nasc.</label>
  <input type="date" name="dataNasc_paciente" class="form-control" value="<?php echo (!empty($data->dataNasc_paciente) ? $data->dataNasc_paciente : "") ?>"><br>

  <label for="">Telefone</label>
  <input type="phone" name="telefone_paciente" class="form-control" value="<?php echo (!empty($data->telefone_paciente) ? $data->telefone_paciente : "") ?>"><br>

  <label for="">Endereço</label>
  <input type="text" name="endereco_paciente" class="form-control" value="<?php echo (!empty($data->endereco_paciente) ? $data->endereco_paciente : "") ?>"><br>
  <br>
  <button type="submit" class="btn btn-success">
    <?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?>
  </button><br>
  <button class="btn btn-link"><a href="PacienteList.php">Voltar</a></button>
  <br><br>
</form>
<?php
include "base/rodape.php";