
<div class="row">
    <div class="container">
        <div class="row">
            <h1><?=$view_bag["title"]?></h1>
            <h1><?= $model->term; ?></h1>
            <?php if (isset($data)): ?>
    <h1><?php echo $data['term']; ?></h1>
    <!-- Add your definition details here -->
<?php else: ?>
    <h1></h1>
<?php endif; ?>
        </div>
    </div>
</div>
