<?php $render('header');?> 


<h2>Adicionar um novo usuario</h2>
<form method="POST" action="<?= $base?>/novo">

<label>
    Nome:<br/>
    <input type="text" name="name"/>
</label><br/><br/>
<label>
    E-mail:<br/>
    <input type="email" name="email"/>
</label>
    <input type="submit" value="Adicionar"/>
</form>


<?php $render('footer');?> 