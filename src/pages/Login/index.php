    <title>Login</title>
    <link rel="stylesheet" href="src/global.css">
    <link rel="stylesheet" href="src/pages/Login/css/style.css">
    <script type="javascript" src="src/pages/Login/js/script.js"></script>
</head>
<!-- End head -->
<body>
    <?php require_once('./src/backend/authentication/userVerify.php');?>
    <div class="container">
        <div class="content">
            <form method="POST" action=<?php htmlspecialchars($_SERVER['PHP_SELF'])?>>
                <label for="Usuario">Usuario:</label>
                <input type="text" name="userName"/>
                <label for="Senha">Senha:</label>
                <input type="password" name="password"/>
                <button class="btn" name="submit">Entrar</button>
                <a href="#esqueci">esqueci minha senha</a>
            </form>
        </div>
    </div>
</body>
