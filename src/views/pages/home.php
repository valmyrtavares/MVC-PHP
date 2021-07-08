<?php $render('header');?> 

<!-- BASE: <?php echo $base; ?>   -->
<!-- DEVE SER UMA URL INTERNA DO PHP -->

<a href="<?= $base ?>/novo">Novo Usuário</a>

<table border="1" width="100%">
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>E-MAIL</th>
    <th>AÇÕES</th>
</tr>
<?php foreach($usuarios as $usuario):?>
    <tr>
        <td> <?= $usuario['id']; ?> </td>
        <td> <?= $usuario['nome']; ?> </td>
        <td> <?= $usuario['email']; ?> </td>
        <td> 
            <a href="<?=$base;?>/usuario/<?=$usuario['id'] ?>/editar">Editar</a>
            <a href="<?=$base;?>/usuario/<?=$usuario['id'] ?>/excluir">Excluir</a>
        </td>    
    </tr>
<?php endforeach;?>


</table>

<?php $render('footer');?> 