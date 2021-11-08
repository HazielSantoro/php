<?php
require_once("layout.php");

$layout = new layout();
#$layout->ValidaSession();

$fdcampo = $_REQUEST["fdcampo"];
$fdpesquisa = $_REQUEST["fdpesquisa"];
$fdativo = $_REQUEST["fdativo"];

$pessoa_id=$_REQUEST["id"];

$_SESSION["PESSOA"]  = "HAZIEL";
$_SESSION["APELIDO"] = "SIX@SIX";
$_SESSION["TIPO"]    = "ADM";

$formrel ="
    <form action=\"pessoa.php\" method=\"post\" name=\"pessoa\">
    <input type=\"hidden\" name=\"pessoa_id\" value=\"$pessoa_id\">
    <input type=\"hidden\" name=\"fdcampo\" value=\"$fdcampo\">
    <input type=\"hidden\" name=\"fdpesquisa\" value=\"$fdpesquisa\">
    <input type=\"hidden\" name=\"fdativo\" value=\"$fdativo\">

          <legend>Pessoa</legend>
            <p><label for=\"name\">Nome: </label> <input class=\"textbox\" type=\"text\" name=\"nome\" id=\"nome\" maxlength=\"50\" size=\"30\"></p>
            <p><label for=\"fone\">Telefone: </label> <input class=\"textbox\" type=\"text\" name=\"telefone\" id=\"telefone\" maxlength=\"11\" size=\"30\"></p>
            <p><label for=\"setor\">Setor:</label>

              <select class=\"textbox\" name=\"setor\">
                  <option value=\"\">Nenhum</option>
                  <option value=\"1\">Administrativo</option>
                  <option value=\"2\">Vendas</option>
                  <option value=\"3\" >Compras</option>
                  <option value=\"4\">Informatica</option>
              </select>
                    <p><label for=\"pessoa\">Ativo</label>
        
                        <select class=\"textbox\" name=\"ativo\">
                            <option value=\"S\">SIM</option>
                            <option value=\"N\">NÃO</option>
                        </select>
            </p>
            <p><input class=\"textbox\" type=\"submit\" value=\"Registrar | Salvar\"> 
            <input class=\"textbox\" type=\"button\" value=\"Cancelar\" onclick=\"window.location='rel_pessoa.php?fdcampo=$fdcampo&fdpesquisa=$fdpesquisa&fdativo=$fdativo';\"></p>
  </form>";
  $layout->setBody($formrel);
  $layout->getLayout();
  ?>