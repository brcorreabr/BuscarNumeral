<?php /* Smarty version Smarty-3.1.14, created on 2014-05-13 10:58:53
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199855372251d965b00-48166873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1399930706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199855372251d965b00-48166873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITENAME' => 0,
    'ListaDosNumeros' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5372251d9a3d11_43819229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5372251d9a3d11_43819229')) {function content_5372251d9a3d11_43819229($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-search"></span><?php echo $_smarty_tpl->tpl_vars['SITENAME']->value;?>
</a>
    </div>
  </div>
</div>

<div class="container">
<div class="col-md-8 col-md-offset-2">

<div class="panel panel-default">
    <div class="panel-heading"><h4>Teste</h4></div>
    <div class="panel-body">
      <p class="text-justify">O número 3025 possui as seguintes características:<br>
        <strong>30 + 25 = 55</strong> <br>
        <strong>55^2 = 3025</strong> <br>
        Imprima todos os números de 4 algarismos que apresentem tal característica, mostrando na impressao que a propriedade foi comprovada</p>
    </div>
    <table class="table table-hover">
      <tr>
        <th>Resultado</th>
      </tr>
      <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ListaDosNumeros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
      </tr>
      <?php } ?>
    </table>
    
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
 <?php }} ?>