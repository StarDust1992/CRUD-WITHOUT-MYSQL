
<div class="row">
    <div class="container">
        <div class="row">
        <h1><?=$view_bag["title"]?></h1>
        <h1><?= $model->definition; ?></h1>
        </div>
   <!-- view/definition.view.php -->

<?php if (isset($data) && is_object($data) && property_exists($data, 'definition')): ?>
    <h1><?php echo $data->definition; ?></h1>
    <!-- Add your definition details here -->
<?php else: ?>
    <h1></h1>
<?php endif; ?>
    </div>
</div>

