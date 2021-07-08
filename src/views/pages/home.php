<?php $render('header');?>

Meu nom e é: <?php echo $nome ?> <br/>
Meu nom e é: <?php echo $idade ?> <br/>

<hr/>
<?php foreach($post as $item): ?>
<h3><?php echo $item['titulo']; ?></h3>
<p><?php echo $item['corpo']; ?></p>
<p><?php echo $item['idade']; ?></p>
<?php endforeach?>