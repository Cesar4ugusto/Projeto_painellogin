<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Open Code Login</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" class="sign-in-form">
                    <h2 class="title">Entrar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome de Usuário" name="user">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="password">
                    </div>
                    <input type="submit" value="Login" class="btn solid">
                </form>

                <form action="" class="sign-up-form">
                    <h2 class="title">Cadastrar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome de Usuário" name="user">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" placeholder="Email" name="email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="password">
                    </div>
                    <input type="submit" value="Cadastrar" class="btn solid">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Novo aqui?</h3>
                    <p>Faça o seu cadastro para poder usar a plataforma.</p>
                    <button class="btn transparent" id="sign-up-btn">Cadastrar</button>
                </div>

                <img src="img/log.svg" alt="imagem" class="image">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Um de nós?</h3>
                    <p>Se você já está entre nós, efetue seu login!</p>
                    <button class="btn transparent" id="sign-in-btn">Logar</button>
                </div>

                <img src="img/register.svg" alt="imagem" class="image">
            </div>
        </div>
    </div>

    <script src="js/kit-fontawesome.js"></script>
    <script src="js/app.js"></script>
</body>
</html>