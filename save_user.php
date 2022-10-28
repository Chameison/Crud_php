<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]); //md5 é para a senha nao ficar exposta no phpmyadmin
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ( '{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            
            $resultado = $conn->query($sql);

            if($resultado==true) {
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script>location.href='?page=list';</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar');</script>";
                print "<script>location.href='?page=list';</script>";
            }
            break;
        case 'edit':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]); //md5 é para a senha nao ficar exposta no phpmyadmin
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}', senha='{$senha}', data_nasc='{$data_nasc}' WHERE id=".$_REQUEST["id"];
            
            $resultado = $conn->query($sql);

            if($resultado==true) {
                print "<script>alert('Cadastro editado com sucesso');</script>";
                print "<script>location.href='?page=list';</script>";
            }else{
                print "<script>alert('Não foi possivel editar');</script>";
                print "<script>location.href='?page=list';</script>";
            }
            break;
        case 'delete':
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $resultado = $conn->query($sql);

            if($resultado==true) {
                print "<script>alert('Cadastro Excluido com sucesso');</script>";
                print "<script>location.href='?page=list';</script>";
            }else{
                print "<script>alert('Não foi possivel Excluir');</script>";
                print "<script>location.href='?page=list';</script>";
            }
            
            break;
    }
?>