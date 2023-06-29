<?php
include_once '../controller/ContatoController.php';
include "base/header.php";

Util::verificarLogin();

$contato = new ContatoController();

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

<form action="ContatoForm.php" method="post" class="form">
  <h3>Formulário Contato</h3>

  <input type="hidden" name="id" class="form-control" value="<?php echo (!empty($data->id) ? $data->id : "") ?>" />
  <label for="">Nome</label>
  <input type="text" name="nome" class="form-control" value="<?php echo (!empty($data->nome) ? $data->nome : "") ?>"><br>

  <label for="">Email</label>
  <input type="mail" name="email" class="form-control" value="<?php echo (!empty($data->email) ? $data->email : "") ?>"><br>

  <label for="">Telefone</label>
  <input type="phone" name="telefone" class="form-control" value="<?php echo (!empty($data->telefone) ? $data->telefone : "") ?>"><br>

  <button type="submit" class="btn btn-success">
    <?php echo (empty($_GET['id']) ? "Salvar" : "Atualizar") ?>
  </button><br>
  <button class="btn btn-link"><a href="PacienteList.php">Voltar</a></button>
</form>
<?php
include "base/rodape.php";