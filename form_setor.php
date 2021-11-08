<?php
require_once("layout.php");

$layout = new layout();
#$layout->ValidaSession();

$fdcampo = $_REQUEST["fdcampo"];
$fdpesquisa = $_REQUEST["fdpesquisa"];
$fdativo = $_REQUEST["fdativo"];

$setor_id=$_REQUEST["id"];

$_SESSION["PESSOA"]  = "HAZIEL";
$_SESSION["APELIDO"] = "SIX@SIX";
$_SESSION["TIPO"]    = "ADM";

$formrel ="
    <form action=\"setor.php\" method=\"post\" name=\"setor\">
    <input type=\"hidden\" name=\"setor_id\" value=\"$setor_id\">
    <input type=\"hidden\" name=\"fdcampo\" value=\"$fdcampo\">
    <input type=\"hidden\" name=\"fdpesquisa\" value=\"$fdpesquisa\">
    <input type=\"hidden\" name=\"fdativo\" value=\"$fdativo\">

        <fieldset><legend>Setor</legend>
            <p><label for=\"name\">Nome: </label> <input class=\"textbox\" type=\"text\" name=\"nome\" id=\"nome\" maxlength=\"50\" size=\"30\"></p>
            <p><label for=\"por\">Responsavél: <select class=\"textbox\" name=\"pessoa\"><option value=\"1\">Fulano 1</option><option value=\"2\">Fulano 2</option><option value=\"3\">Fulano 3</option><option value=\"4\">Fulano 4</option></select></p>
                    <p><label for=\"setor\">Ativo</label>
        
                        <select class=\"textbox\" name=\"ativo\">
                            <option value=\"S\">SIM</option>
                            <option value=\"N\">NÃO</option>
                        </select></p>

                        <p><input class=\"textbox\" type=\"submit\" value=\"Registrar | Salvar\"> 
                        <input class=\"textbox\" type=\"button\" value=\"Cancelar\" onclick=\"window.location='rel_setor.php?fdcampo=$fdcampo&fdpesquisa=$fdpesquisa&fdativo=$fdativo';\"></p>
</form>";
$layout->setBody($formrel);
$layout->getLayout();
?>