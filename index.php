<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <link href="estilo.css"rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem de Cadastro</title>
    <style>
    body{
        background-color:whitesmoke;
    }
    *{
     text-align: center;
     }
    </style>
</head>
<body>
    <h1>SISTEMA DE CADASTRO</h1>
    <br>
    <div class="conteiner">
        <div class="row">
            <div class=>
                <form action="cadastrar.php"method="POST">
                    <DIV>
                        <div class="mb-1"><label>nome</label>
                            <input type="text"
                             name="nome"
                             class="form-control">
                             <br><br>    
                        </div>
                    </DIV>
                    <DIV>
                        <div class="mb-2"><label>email</label>
                            <input type="email"
                             name="email"
                             class="form-control">
                             <br><br> 
                        </div>
                    </DIV>
                    <DIV>
                        <div class="mb-3"><label>senha </label>
                            <input type="password"
                             name="senha"
                             class="form-control"> 
                             <br><br> 
                        </div> 
                    </div>
                    <DIV>
                        <div class="mb-3">
                            <button type="submit">Cadastrar</button>                            
                        </div>
                    </div>
                    </DIV>
                </form>
            </div>
        </div>
    </div>
</body>
</html>