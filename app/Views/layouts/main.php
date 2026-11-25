<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>REDE LIMPA</title>
        <!-- Favicon-->
             <link rel="icon" href="<?= asset('img/logo.png') ?>">
        <!-- Core theme CSS (includes Bootstrap)-->
         <link rel="stylesheet" href="<?= asset('css/styles.css') ?>">

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">REDE LIMPA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Sobre nós</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contato</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Seja Bem-Vindo(a) ao REDE LIMPA!</h1>
                    <p class="lead mb-0">Informação, prevenção e orientação: o seu guia diário para navegar<br> com segurança e combater a impunidade digital.</p>
                </div>
            </div>
        </header>
        <!-- Page content-->

=======
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= e($title ?? 'Projeto MVC') ?></title>

    <link rel="icon" href="<?= asset('img/logo.png') ?>">
    <link rel="stylesheet" href="<?= asset('css/estilo.css') ?>">
</head>

<body>

    <header class="topo">
        <img src="<?= asset('img/logo.png') ?>"
             alt="Logo do projeto"
             width="40" height="40">

        <nav>
            <a href="<?= url('user/index') ?>">Usuários</a>
            <a href="<?= url('user/create') ?>">Cadastrar usuário</a>
        </nav>
    </header>
>>>>>>> fca81a8f451c9e731e920b6dd60a59fd81cbf282

    <main>
        <?= $content ?>
    </main>

<<<<<<< HEAD
<footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Rede Limpa 2026</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
            <script src="<?= asset('js/scripts.js') ?>" defer></script>
    </body>
=======
    <script src="<?= asset('js/app.js') ?>" defer></script>

</body>
>>>>>>> fca81a8f451c9e731e920b6dd60a59fd81cbf282
</html>     