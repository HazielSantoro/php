<?php
require_once("layout.php");

$layout = new layout();
#$layout->ValidaSession();

$fdcampo = $_REQUEST["fdcampo"];
$fdpesquisa = $_REQUEST["fdpesquisa"];
$fdativo = $_REQUEST["fdativo"];

$categoria_id=$_REQUEST["id"];

$_SESSION["PESSOA"]  = "HAZIEL";
$_SESSION["APELIDO"] = "SIX@SIX";
$_SESSION["TIPO"]    = "ADM";

$formrel ="
    <form action=\"categoria.php\" method=\"post\" name=\"categoria\">
    <input type=\"hidden\" name=\"categoria_id\" value=\"$categoria_id\">
    <input type=\"hidden\" name=\"fdcampo\" value=\"$fdcampo\">
    <input type=\"hidden\" name=\"fdpesquisa\" value=\"$fdpesquisa\">
    <input type=\"hidden\" name=\"fdativo\" value=\"$fdativo\">

        <legend>Categoria</legend>
            <p><label for=\"name\">Nome: </label> <input class=\"textbox\" type=\"text\" name=\"nome\" id=\"nome\" maxlength=\"50\" size=\"30\"></p>
                    <p><label for=\"categoria\">Ativo</label>
        
                        <select class=\"textbox\" name=\"ativo\">
                            <option value=\"S\">SIM</option>
                            <option value=\"N\">NÃO</option>
                        </select>
            </p>
            <p><input class=\"textbox\" type=\"submit\" value=\"Registrar | Salvar\"> 
            <input class=\"textbox\" type=\"button\" value=\"Cancelar\" onclick=\"window.location='rel_categoria.php?fdcampo=$fdcampo&fdpesquisa=$fdpesquisa&fdativo=$fdativo';\"></p>
</form>";
$layout->setBody($formrel);
$layout->getLayout();
?>