<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $usuario , $senha);
        /*
        $query = '
            create table tb_usuarios(
                    id int not null primary key auto_increment,
                    nome varchar (50) not null,
                    email varchar(100) not null,
                    senha varchar(32) not null
                )
        ';
        $retorno = $conexao->exec($query); //retorno 0, pois nao estamos modificando registros

        echo $retorno;
        

         $query = '
                insert into tb_usuarios(
                     nome, email, senha 
                 ) values (
                     "Jorge Sant Ana", "jorge@teste.com.br", "123456"
                 )
         ';
        $query = '
               delete from tb_usuarios
        ';
        */
        /*
        $query = '
            insert into tb_usuarios(
                nome, email, senha
            ) values (
                "titico03", "titioc03@teste.com.br", "123456"
            )
            ';
        $conexao->exec($query);

        $query = '
            insert into tb_usuarios(
                nome, email, senha
            ) values (
                "Sant Ana", "anita@teste.com.br", "123456"
            )
            ';
        $conexao->exec($query);

        $query = '
            insert into tb_usuarios(
                nome, email, senha
            ) values (
                "Sant", "Sant@teste.com.br", "123456"
            )
            ';
        $conexao->exec($query);
       
        $retorno = $conexao->exec($query); //vai retornar 1
        echo $retorno;
        */
        /*
        $query = '
            select * from tb_usuarios
        ';

       $stmt = $conexao->query($query);
       $lista = $stmt->fetchAll();

       echo "<pre>";
       print_r($lista);
       echo "</pre>";
       
       echo $lista[0]['nome'];
       */
       /*
       $query = '
            select * from tb_usuarios
        ';

       $stmt = $conexao->query($query);
       $lista = $stmt->fetchAll(PDO::FETCH_OBJ); //FETCH_NUM // FETCH_OBJ //FETCH_ASSOC

       echo "<pre>";
       print_r($lista);
       echo "</pre>";
       
       echo $lista[0]->nome;
       */
       $query = '
            select * from tb_usuarios where id = 2
        ';

       $stmt = $conexao->query($query);
       $usuario = $stmt->fetch(PDO::FETCH_OBJ); //FETCH_NUM // FETCH_OBJ //FETCH_ASSOC

       echo "<pre>";
       print_r($usuario);
       echo "</pre>";
       
       echo $usuario->nome;




    } catch(PDOException $e) {
        echo '<pre>';
            print_r($e);
        echo '</pre>';

        echo 'Erro: '. $e->getCode(). ' Mensagem: '. $e->getMessage();
        //registrar o erro de alguma forma.
    }