<?php
include "../model/BD.class.php";

class LoginController
{
        
    private $model;
    private $table = "usuario";

    public function __construct()
    {
        $this->model = new BD();
    }

    public function salvar($dados)
    {

        try {
            
            if ($dados['senha'] === $dados['c_senha']) {

                $dados['senha'] = password_hash($dados['senha'], PASSWORD_BCRYPT);
                unset($dados['c_senha']);

                $obj = $this->model->inserir($this->table, $dados);

                $_SESSION['url'] = "login.php";
                $_SESSION['msg'] = "Registro Salvo com sucesso!";
            } else {
                throw new Exception(" As senhas devem coincidirem");
            }

        } catch (Exception $e) {
            $_SESSION['dados'] = $dados;
            $_SESSION['url'] = 'RegistrarUsuarioForm.php';
            $_SESSION['msg'] = $e->getMessage();

        }
    }

    public function logar($dados)
    {
        try {

            $usuario = $this->model->login($this->table, $dados);
            if ($usuario) {
                $_SESSION['url'] = "base/main.php";
                $_SESSION['nome'] = $usuario->nome;
                $_SESSION['usuario_id'] = $usuario->id;
            }
            $_SESSION['login'] = $dados['login'];

        } catch (Exception $e) {
            $_SESSION['dados'] = $dados;
            $_SESSION['url'] = "http://" . $_SERVER['HTTP_HOST'] . '/view/login.php';
            $_SESSION['msg'] = $e->getMessage();

        }
    }

}