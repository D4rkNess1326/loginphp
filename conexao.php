<?php
require_once 'classes/usuarios.php';
$u = new usuario;
?>

<?php
if (isset($_POST['nome']));

{
    $nome addcslashes($_POST['nome']);
    $email addcslashes($_POST['email']);
    $senha addcslashes($_POST['senha']);
    if(!empty($nome) && !empty($email) && !empty($senha)); 
}
$u->conectar("valval", "localhost", "root", "");
if($u->msgErro == "");
{
 if$u->cadastrar($nome,$email,$senha);
 {
echo "Cadastrado com sucesso! Acesse para entrar!";
 }
 else 
 {
     echo "Email já cadastrado!";

 }
}
else
{
    echo "Erro: ".$u->msgErro;
}

    }
    else 
    {
        echo "Preencha todos os campos!";
    }
}

?>