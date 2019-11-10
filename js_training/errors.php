<?php
session_start()
?>

<?php if (count($erros)>0): ?>

<div class="errors">
<?php foreach($erros as $erro) : ?>

<p> <?php echo $error ?></p>

<?php endforeach ?>

</div>

<?php endif ?>
