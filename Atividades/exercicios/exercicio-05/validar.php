<?php
    $name = $_POST['nome'];
    $address = $_POST['endereco'];
    $phone = $_POST['tel'];
    $mail = $_POST['email'];

    $genero = $_POST['genero'];

    //$interesses = $_POST['interesses'];
    $area0 = $_POST['area0'];
    $area1 = $_POST['area1'];
    $area2 = $_POST['area2'];
    $area3 = $_POST['area3'];

    echo "<h1>Nome: $name!</h1>";
    echo "<p>Endereço: $address </p>";
    echo "<p>Telefone: $phone </p>";
    echo "<p>email: $mail </p>";
   
    if ($genero == "F"){
        echo "<p>Gênero: Feminino!</p>";
    }else if ($genero == "M"){
        echo "<p>Gênero: Masculino!</p>";
    }else if ($genero == "NB"){
        echo "<p>Gênero: Não binário!</p>";
    }else{
        echo "<p>Gênero: Não informado!</p>";
    }

    echo "<p>Área(s) de interesse:</p>";

    if ($area0 == "W"){
        echo "<p>Sistemas Web</p>";
    }
    if ($area1 == "D"){
        echo "<p>Banco de Dados</p>";
    }
    if ($area2 == "R"){
        echo "<p>Redes</p>";
    }
    if ($area3 == "E"){
        echo "<p>Engenharia de Software</p>";
    }

    //echo "<a href=\"/login/index.php\">Voltar</a>";
    echo '<a href="cadastro.html">Voltar</a>';