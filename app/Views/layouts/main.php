<!DOCTYPE html>
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
            <a href="<?= url('user/create') ?>">Novo usuário</a>
        </nav>
    </header>

    <main>
        <?= $content ?>
    </main>

    <script src="<?= asset('js/app.js') ?>" defer></script>

</body>
</html>