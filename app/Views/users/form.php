<h1><?= e($title) ?></h1>

<form method="post" action="<?= url('user/store') ?>" data-valida-te>

    <input type="hidden" name="csrf" value="<?= e($csrf) ?>">

    <label>Nome
        <input name="name" value="<?= e($old['name'] ?? '') ?>">
    </label>

    <?php if (isset($errors['name'])): ?>
        <p class="erro"><?= e($errors['name']) ?></p>
    <?php endif; ?>

    <label>E-mail
        <input name="email" value="<?= e($old['email'] ?? '') ?>">
    </label>

    <?php if (isset($errors['email'])): ?>
        <p class="erro"><?= e($errors['email']) ?></p>
    <?php endif; ?>

    <button type="submit">Salvar</button>

</form>