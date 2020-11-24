<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-10 09:43:39
  from '/home/sqygyv8xg2vi/public_html/admin/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5faab52b546c43_40433312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1adcd230a9eb6727f266391b9cc9bdfc1f88447d' => 
    array (
      0 => '/home/sqygyv8xg2vi/public_html/admin/templates/header.tpl',
      1 => 1605023001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faab52b546c43_40433312 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html id="html">
<head><meta charset="gb18030">
    <title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"><?php echo '</script'; ?>
>

</head>
<body>
<div class="container-fluid">
	<?php if ($_smarty_tpl->tpl_vars['Title']->value == 'Inicio') {?>
<div class="row">
	<div class="col">

		Bienvenido <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

		
	</div>
	
	<div class="col" style="text-align: right;">
	<a href="cerrar.php" style="font-size: 18px; font-weight: bold; color:#000;">Salir</a>
	</div>
	
</div>
<?php }?>
</div><?php }
}
