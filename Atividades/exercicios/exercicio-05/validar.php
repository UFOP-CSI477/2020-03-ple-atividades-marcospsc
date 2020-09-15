<?php
    //echo "POST";
    //var_dump($_POST);

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $genero = $_POST['genero'];

    $interesses = $_POST['interesses'];

    echo "<h1>Nome: $nome!</h1>";
    echo "<p>Endereço: $endereco </p>";
    echo "<p>Telefone: $tel </p>";
    echo "<p>email: $email </p>";
   
    /*/if ($genero == "F"){
        //echo "<h1>Gênero: Feminino!</h1>";
    //}else if ($genero == "M"){
        //echo "<h1>Gênero: Masculino!</h1>";
    }else if ($genero == "NB"){
        echo "<h1>Gênero: Não binário!</h1>";
    }else{
        echo "<h1>Gênero: Não informado!</h1>";
    }

    if ($interesses == "F"){
        echo "<h1>Gênero: Feminino!</h1>";
    }else if ($interesses == "M"){
        echo "<h1>Gênero: Masculino!</h1>";
    }else if ($interesses == "NB"){
        echo "<h1>Gênero: Não binário!</h1>";
    }else{
        echo "<h1>Gênero: Não informado!</h1>";
    }
*/
    echo "<a href=\"/login/index.php\">Voltar</a>";
    echo '<a href="index.php">Voltar</a>';