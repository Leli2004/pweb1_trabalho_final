<?php
include_once '../controller/FuncController.php';
include "base/header.php";
Util::verificarLogin();

$contato = new FuncController();

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

<form action="FuncForm.php" method="post">
  <h3>Funcionários</h3>

  <input type="hidden" name="id" class="form-control" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />

  <label for="">Nome</label>
  <input type="text" name="nome_func" class="form-control" value="<?php echo (!empty($data->nome_func) ? $data->nome_func : "") ?>"><br>

  <label for="">CPF</label>
  <input type="text" name="cpf_func" class="form-control" value="<?php echo (!empty($data->cpf_func) ? $data->cpf_func : "") ?>"><br>

  <label for="">N° crachá</label>
  <input type="text" name="numCracha_func" class="form-control"  value="<?php echo (!empty($data->numCracha_func) ? $data->numCracha_func : "") ?>"><br>

  <label for="">Cargo</label>
  <input type="text" name="cargo_func" class="form-control" value="<?php echo (!empty($data->cargo_func) ? $data->cargo_func : "") ?>"><br>

  <label for="">Setor</label>
  <input type="text" name="setor_func" class="form-control" value="<?php echo (!empty($data->setor_func) ? $data->setor_func : "") ?>"><br>

  <label for="">Data início</label>
  <input type="date" name="datainicio_func" class="form-control" value="<?php echo (!empty($data->datainicio_func) ? $data->datainicio_func : "") ?>"><br>

  <button type="submit" class="btn btn-success">
    <?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?>
  </button><br>
  <button class="btn btn-link"><a href="PacienteList.php">Voltar</a></button>
</form>
<?php
include "base/rodape.php";