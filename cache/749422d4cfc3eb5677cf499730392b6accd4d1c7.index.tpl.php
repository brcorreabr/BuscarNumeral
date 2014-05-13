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
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1399928663,
      2 => 'file',
    ),
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1399925074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199855372251d965b00-48166873',
  'variables' => 
  array (
    'SITENAME' => 0,
    'ListaDosNumeros' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5372251d9db000_01023347',
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5372251d9db000_01023347')) {function content_5372251d9db000_01023347($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
<meta name="description" content="Busca de numerais de quatro digitos que divididos em duas partes, somados e elevados ao quadrado encontramos o mesmo numeral">
<meta name="author" content="Bruno Correa">
<meta name="keywords" content="TWITTER-BOOTSTRAP,HTML,CSS,PHP">
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="lib/css/reset.css">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<title>Buscar Numeral</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-search"></span>Buscar Numeral</a>
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
            <tr>
        <td>O número 2025 gera os números 20 e 25 somados temos 45 se elevarmos ao quadrado temos 2025</td>
      </tr>
            <tr>
        <td>O número 3025 gera os números 30 e 25 somados temos 55 se elevarmos ao quadrado temos 3025</td>
      </tr>
            <tr>
        <td>O número 9801 gera os números 98 e 1 somados temos 99 se elevarmos ao quadrado temos 9801</td>
      </tr>
          </table>
    
  </div>
</div>
</body>
</html>
 <?php }} ?>