<h1><?= e($title) ?></h1>

<ul class="lista">
<?php foreach ($users as $u): ?>
    <li>
        <strong>ID:</strong> <?= (int) $u['id'] ?> —
        <a href="<?= url('user/show/' . (int) $u['id']) ?>">
            <?= e($u['name']) ?>
        </a>
        (<?= e($u['email']) ?>)
    </li>
<?php endforeach; ?>
</ul>