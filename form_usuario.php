<?php
require_once("layout.php");

$layout = new layout();
#$layout->ValidaSession();

$fdcampo = $_REQUEST["fdcampo"];
$fdpesquisa = $_REQUEST["fdpesquisa"];
$fdativo = $_REQUEST["fdativo"];

$usuario_id=$_REQUEST["id"];

$_SESSION["PESSOA"]  = "HAZIEL";
$_SESSION["APELIDO"] = "SIX@SIX";
$_SESSION["TIPO"]    = "ADM";

$TRAVALOGIN = $_SESSION["TIPO"]=="ADM"?"":"readonly";



$formrel ="
    <form action=\"usuario.php\" method=\"post\" name=\"usuario\">
    <input type=\"hidden\" name=\"usuario_id\" value=\"$usuario_id\">
    <input type=\"hidden\" name=\"fdcampo\" value=\"$fdcampo\">
    <input type=\"hidden\" name=\"fdpesquisa\" value=\"$fdpesquisa\">
    <input type=\"hidden\" name=\"fdativo\" value=\"$fdativo\">

        <legend>Usuario</legend>
            <p><label for=\"usuario\">Usuario: </label> <input class=\"textbox\" type=\"text\" name=\"apelido\" id=\"usuario\" maxlength=\"50\" size=\"30\" $TRAVALOGIN></p>
            <p><label for=\"senha\">Senha: </label> <input class=\"textbox\" type=\"password\" name=\"senha\" id=\"senha\" maxlength=\"50\" size=\"30\"></p>
            <p><label for=\"tipo\">Perfil:</label>";
            
            if($TRAVALOGIN == ""){
                $formrel .="<select class=\"textbox\" name=\"tipo\">
                <option value=\"USR\">Usuario</option>
                <option value=\"ADM\">Administrador</option>
            </select>
                  <p><label for=\"usuario\">Ativo</label>
                      <select class=\"textbox\" name=\"ativo\">
                          <option value=\"S\">SIM</option>
                          <option value=\"N\">NÃO</option>
                      </select>";
            }else{
                $formrel .="<select class=\"textbox\" name=\"tipo\">
                <option value=\"USR\">Usuario</option>
            </select>
            <input type=\"hidden\" name=\"ativo\" value=\"$ativo\">";
            }
            $formrel .="<p><input class=\"textbox\" type=\"submit\" value=\"Registrar | Salvar\"> 
              <input class=\"textbox\" type=\"button\" value=\"Cancelar\" onclick=\"window.location='rel_usuario.php?fdcampo=$fdcampo&fdpesquisa=$fdpesquisa&fdativo=$fdativo';\"></p>
</form>";
$layout->setBody($formrel);
$layout->getLayout();
?>