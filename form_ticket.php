<?php
require_once("layout.php");

$layout = new layout();
#$layout->ValidaSession();

$fdcampo = $_REQUEST["fdcampo"];
$fdpesquisa = $_REQUEST["fdpesquisa"];
$fdativo = $_REQUEST["fdativo"];

$ticket_id=$_REQUEST["id"];

$_SESSION["PESSOA"]  = "HAZIEL";
$_SESSION["APELIDO"] = "SIX@SIX";
$_SESSION["TIPO"]    = "ADM";

$formrel ="
    <form>
        <input type=\"hidden\" name=\"ticket_id\" value=\"$ticket_id\">
        <input type=\"hidden\" name=\"fdcampo\" value=\"$fdcampo\">
        <input type=\"hidden\" name=\"fdpesquisa\" value=\"$fdpesquisa\">
        <input type=\"hidden\" name=\"fdativo\" value=\"$fdativo\">

       <legend>Chamado 100000</legend>
            <p><label for=\"date\">Data de Abertura: </label> <input class=\"textbox\" type=\"date\" name=\"dataemissao\" id=\"date\"></p>
            <p><label for=\"por\">Solicitante:</label> <select class=\"textbox\" name=\"pessoa\">
            <option value=\"1\">Fulano 1</option>
            <option value=\"2\">Fulano 2</option>
            <option value=\"3\">Fulano 3</option>
            <option value=\"4\">Fulano 4</option>
          </select></p>
            <p><label for=\"categoria\">Categoria:</label>

                <select class=\"textbox\" name=\"categoria\">
                    <option value=\"\">Nenhum</option>
                    <option value=\"1\">Internet</option>
                    <option value=\"2\">computador</option>
                    <option value=\"3\" >Impressora</option>
                    <option value=\"4\">Perifericos</option>
                </select></p>
            <p><label>Descrição:</label><br>
            <textarea class=\"textbox\" name=\"descricao\" cols=\"60\" rows=\"5\"></textarea></p>
            <p><label for=\"categoria\">Atribuido para:</label>

                <select class=\"textbox\" name=\"executador\">
                    <option value=\"1\">Tecnico 1</option>
                    <option value=\"2\">Tecnico 2</option>
                    <option value=\"3\">Tecnico 3</option>
                    <option value=\"3\">Tecnico 4</option>
                    <option value=\"4\">Tecnico 5</option>
                </select> <label for=\"date\">Data do Executado: </label> <input class=\"textbox\" type=\"date\" name=\"dataexecuta\" id=\"date\"></p>
                <p><label>Solução do Técnico:</label><br>
                    <textarea class=\"textbox\" name=\"solucao\" cols=\"60\" rows=\"5\"></textarea></p>
                    <p><label for=\"categoria\">Ativo</label>
        
                        <select class=\"textbox\" name=\"ativo\">
                            <option value=\"S\">SIM</option>
                            <option value=\"N\">NÃO</option>
                        </select> <label for=\"date\">Data de Encerrado: </label> <input class=\"textbox\" type=\"date\" name=\"dataencerra\" id=\"date\"></p>

           <p><input class=\"textbox\" type=\"submit\" value=\"Registrar | Salvar\"> 
            <input class=\"textbox\" type=\"button\" value=\"Cancelar\" onclick=\"window.location='rel_ticket.php?fdcampo=$fdcampo&fdpesquisa=$fdpesquisa&fdativo=$fdativo';\"></p>
          </form>";
  $layout->setBody($formrel);
  $layout->getLayout();
?>