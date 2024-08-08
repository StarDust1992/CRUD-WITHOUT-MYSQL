<div class="container">
    <h1>Admin Page</h1>
    <div class="row">
        <a href="create.php">Create Term</a>
    </div>
    <a href="../logout.php">Logout</a>
    <div class="row">
        <table class="table table-striped">
            <?php if (is_array($model) && !empty($model)): ?>
                <?php foreach ($model as $item): ?>
                    <?php if (isset($item['term']) && isset($item['definition'])): ?>
                        <tr>
                            <td><a href="edit.php?key=<?= $item['term'] ?>"> Edit Term </a></td>
                            <td><?=$item['term']?></td>
                            <td><?= $item['definition'] ?></td>
                            <td><a href="delete.php?key=<?= $item['term'] ?>"> Delete Term </a></td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>
```


