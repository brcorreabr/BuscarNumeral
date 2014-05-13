{include file="header.tpl"}
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-search"></span>{$SITENAME}</a>
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
      {foreach from=$ListaDosNumeros item="item" }
      <tr>
        <td>{$item}</td>
      </tr>
      {/foreach}
    </table>
    
  </div>
</div>
{include file="footer.tpl"} 