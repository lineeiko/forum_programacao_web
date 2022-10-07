<!Doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Qual é o seu signo? </title>

    <style>
      

        body {
            background: linear-gradient(90deg, rgba(75,167,184,1) 0%, rgba(219,246,250,1) 35%, rgba(124,205,212,1) 100%);
            text-align:center;
            font-family: sans-serif; 
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: #fff;
            margin: 0 auto;
            margin-top: 10%;
            width: 400px;
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }

        h2{
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 2rem;
            position: relative;
        }

        p{
            text-align: justify;
        }

        button{
            margin-top: 2rem;
            padding: 0.4rem;
            width: 100%;
            background: linear-gradient(90deg, rgba(75,167,184,1) 0%, rgba(219,246,250,1) 35%, rgba(124,205,212,1) 100%);
            cursor: pointer;
            color: gray;
            font-size: 0.9rem;
            font-weight: 300;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        button[type="submit"]:hover {
            letter-spacing: 0.5px;
            background: linear-gradient(90deg, rgba(148,187,233,1) 0%,rgba(238,174,202,1) 100%);
        }

    </style>
    
</head>

<body>
    <main class="container">
        <?php
        $Nome = $_POST['name'];
        $dtaNasc = $_POST['data_nascimento'];
        $date = new DateTime($dtaNasc);
        $dtaSigno = $date->format('m-d');
        $xml = simplexml_load_file('signos.xml');
    
        echo '<h2>' . $Nome.', o seu signo é:</h2>';
        foreach ($xml->signo as $retorno) :
        if ($dtaSigno >= $retorno->dtaInicio and $dtaSigno <= $retorno->dtaFinal) {
        echo '<h1>' . $retorno->descSigno . '</h1>';
        echo '<p>' . nl2br($retorno-> característica) . '<p>';
        }
        endforeach;       
        ?>

        <button onclick="history.go(-1);">Retornar</button>
        
    </main>
    
</body>
</html>