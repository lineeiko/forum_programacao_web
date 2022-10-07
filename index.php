<!DOCTYPE html>
<html lang="pt-br">
  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Qual é seu o signo?</title>
 
    <style>
 
        body {
            background: linear-gradient(90deg, rgba(75,167,184,1) 0%, rgba(219,246,250,1) 35%, rgba(124,205,212,1) 100%);
            text-align:center;
            font-family: sans-serif; 
            display: flex;
            align-items: center;
            justify-content: center;
        }
 
        form {
            background-color: #fff;
            margin: 0 auto;
            margin-top: 10%;
            width: 400px;
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);

        }
 
        .form-control {
            text-align: left;
            margin-bottom: 30px;
        }
 
        .form-control label {
            display: block;
            margin-bottom: 10px;
        }
 
        .form-control input,
        .form-control select,
        .form-control textarea {
            border: 1px solid #777;
            border-radius: 50px;
            font-family: 'Cambria';
            padding: 10px;
            display: block;
            width: 95%;
        }
 
        .form-control input[type="radio"],
        .form-control input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }
 
        button {
            background: linear-gradient(90deg, rgba(75,167,184,1) 0%, rgba(219,246,250,1) 35%, rgba(124,205,212,1) 100%);
            border: 1px solid #777;
            border-radius: 50px;
            cursor: pointer;
            font-family: "Roboto", sans-serif;
            font-size: 20px;
            display: block;
            width: 100%;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>

</head>
<body>

   <form method="POST" action="signos.php">
        <h1>Qual é o seu signo?</h1>
        <div class="form-control">
            <label for="name" id="label-name">
                Nome
            </label>
            <input type="text" id="name" name="name" placeholder="Digite o seu nome!" />
        </div>
        <div class="form-control">
            <label for="data_nascimento" id="label-data_nascimento">
                Data de Nascimento
            </label>
             <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Data de nascimento" />
        </div>
        
        <button type="submit" value="submit">
            Procurar
        </button>
    </form>
</body> 
</html>