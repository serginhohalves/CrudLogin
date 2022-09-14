<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar' :
            $email = $_REQUEST["email"];
            $password = md5($_REQUEST["password"]);

            if($email == "" || $password == ""){
                print "<p class='alert alert-danger'>Preencha todos os campos</p>";
                print "<a href='?page=novo' class='btn btn-primary'>Voltar</a>";
            } else {
                $sql = "INSERT INTO login (email, password) VALUES ('$email', '$password')";
                $res = $conn->query($sql) or die($conn->error);
                if($res == true){
                    print " <script>alert('Cadastro Realizado com Sucesso')</script>";
                    print " <script>location.href='?page=listar'</script>";
                } else {
                    print " <script>alert('Não foi possivel realizar o cadastro')</script>";
                    print " <script>location.href='?page=novo'</script>"; 
                }
            }            
            break;
        case 'editar' :
            $email = $_REQUEST["email"];
            $password = md5($_REQUEST["password"]);

            if($email == "" || $password == ""){
                print "<p class='alert alert-danger'>Preencha todos os campos</p>";
                print "<a href='?page=editar' class='btn btn-primary'>Voltar</a>";
            } else {
                $sql = "UPDATE login SET email = '$email', password = '$password' WHERE id = " .$_REQUEST["id"];
                $res = $conn->query($sql) or die($conn->error);
                if($res == true){
                    print " <script>alert('Cadastro Editado com Sucesso')</script>";
                    print " <script>location.href='?page=listar'</script>";
                } else {
                    print " <script>alert('Não foi possivel editar o cadastro')</script>";
                    print " <script>location.href='?page=editar&id=" .$_REQUEST["id"] . "'</script>"; 
                }
            }
            
            break;
        case 'excluir' :
            $sql = "DELETE FROM login WHERE id = " .$_REQUEST["id"];
            $res = $conn->query($sql) or die($conn->error);
            if($res == true){
                print " <script>alert('Cadastro Excluido com Sucesso')</script>";
                print " <script>location.href='?page=listar'</script>";
            } else {
                print " <script>alert('Não foi possivel excluir o cadastro')</script>";
                print " <script>location.href='?page=listar'</script>"; 
            }
            break; 
        default:
    }
