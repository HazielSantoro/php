<?php
require_once("layout.php");

$layout = new layout();

$formlogin = "<form action=\"index.php\">     
<div class=\"login-box\">
  <h1>Login</h1>
  <div class=\"textbox\">
    <i class=\"fas fa-user\"></i>
    <input type=\"text\" placeholder=\"Usuário\">
  </div>

  <div class=\"textbox\">
    <i class=\"fas fa-lock\"></i>
    <input type=\"password\" placeholder=\"Senha\">
  </div>

  <input type=\"submit\" class=\"btn\" value=\"ACESSAR\">
</div>
</form>";

$layout->setBody($formlogin);
$layout->getLayoutIndex();

?>