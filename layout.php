<?php

class layout{
    private $title = ".: SistemaGLPI - 3DS :.";
    private $head = "";
    private $body = "";
    private $footer = "</html>"; 

    public function layout(){
        $this->setTitle($titulo);
        $this->getHead();
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getHead(){
        $path = "/SistemaGLPI";
        $this->head = "<!DOCTYPE html>
        <html lang=\"pt-br\">
        <head>
          <meta charset=\"utf-8\">
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
          <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF\" crossorigin=\"anonymous\">
          <link href=\"$path/css/sistema.css\" rel=\"stylesheet\">
          <title>".$this->title."</title>
        </head>";
    }

    public function getHeadIndex(){
        $path = "/SistemaGLPI";
        $this->head = "<!DOCTYPE html>
        <html lang=\"pt-br\">
        <head>
          <meta charset=\"utf-8\">
          <link href=\"$path/css/style.css\" rel=\"stylesheet\">
          <title>".$this->title."</title>
        </head>";
    }

    public function getBody(){
        $pageMenu = "<nav class=\"navbar mb-lg-0 navbar-expand-lg navbar-dark bg-grey; mt-4\" style=\"background-color: #246827;\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
          <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"rel_ticket.php\">CHAMADO</a>
            </li>";
            $pageMenuADM = "<li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"rel_pessoa.php\">CLIENTE</a>
            </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"rel_usuario.php\">USUARIO</a>
        </li>
    <li class=\"nav-item\">
      <a class=\"nav-link active\" aria-current=\"page\" href=\"rel_categoria.php\">CATEGORIA</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link active\" aria-current=\"page\" href=\"rel_setor.php\">SETOR</a>
    </li>";
        $pageMenu .= $_SESSION["TIPO"]<>"USR"?$pageMenuADM:"";        
        $pageMenu .= "<li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"form_usuario.php\">".$_SESSION["PESSOA"]."</a>
      </li>
          <li class=\"nav-item\">
        <a class=\"nav-link active\" aria-current=\"page\" href=\"index.php?acao=logout\">SAIR</a>
      </li></ul>
      </div>
    </nav>";
    $pageSemMenu = "<nav class=\"navbar mb-lg-0 navbar-expand-lg navbar-dark bg-grey; mt-4\" style=\"background-color: #246827;\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      &nbsp;
  </div>
</nav>";
    $pageMenu = $_SESSION["APELIDO"]<>""?$pageMenu:$pageSemMenu;
    $dataBody = "<body> 
    $pageMenu
    $this->body
    </body>";
    $this->body = $dataBody;
    }

    public function getBodyIndex(){
    $dataBody = "<body> 
    $this->body
    </body>";
    $this->body = $dataBody;
    }

    public function setBody($body){
        $this->body = $body;
    }

    public function getFooter(){
        $datFooter = "
        $this->footer";
        return $datFooter;
    }
        
    public function setFooter($footer="</html>"){
       $this->footer = "
        $footer";
    }
       
    public function getLayout(){
        $this->getHead();
        $this->getBody();
        $this->getFooter();
        echo "$this->head
        $this->body
        $this->footer";
    }

    public function getLayoutIndex(){
        $this->getHeadIndex();
        $this->getBodyIndex();
        $this->getFooter();
        echo "$this->head
        $this->body
        $this->footer";
    }

    public function Session(){
        session_start();
    }

    public function ValidaSession(){
        if(!$_SESSION["PESSOA"] || !$_SESSION["APELIDO"] || !$_SESSION["TIPO"]){
            header("Location: index.php?erro=Session");
            exit;
        }
    }
        
}

?>