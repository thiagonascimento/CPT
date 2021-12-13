<?php

include_once('Conexao.php');


   Class CRUD{

    private $con;
    private $nome;
    private $email;
    private $pais;
    private $telefone;
    private $mensagem;
    private $assunto;

    public function __construct(){
        $this->con = new Conexao();
        
    }

    public function __set($atributo, $valor){
            $this->$atributo = $valor;
    }

    public function __get($atributo){
            return $this->$atributo;
    }

    public function InserirForm($dados){
        try{
            $this->nome = $dados["nome"]; 
            $this->email = $dados["email"];
            $this->pais = $dados["pais"];
            $this->telefone = $dados["telefone"];
            $this->mensagem = $dados["mensagem"];
            $this->assunto = $dados["assunto"];

           $cst = $this->con->connect_mysql()->prepare("INSERT INTO `Formulario` ( `Nome`, `Telefone`,  `Email`, `Pais`, `Assunto`, 
                `Mensagem`) VALUES (:Nome, :Telefone, :Email, :Pais, :Assunto, :Mensagem)");
           $cst->bindParam(":Nome", $this->nome, PDO::PARAM_STR);
           $cst->bindParam(":Telefone", $this->telefone, PDO::PARAM_STR);
           $cst->bindParam(":Email", $this->email, PDO::PARAM_STR);
           $cst->bindParam(":Pais", $this->pais, PDO::PARAM_STR);
           $cst->bindParam(":Assunto", $this->assunto, PDO::PARAM_STR);
           $cst->bindParam(":Mensagem", $this->mensagem, PDO::PARAM_STR);
           
           if($cst->execute()){
            return 'ok';
        }else{
            return 'erro';
        }
            
        }catch(PDOException $ex){
            return 'error'.$ex->getMessage();;
        }
    }

    /*
    $nome = $_POST ["nome"]; 
    $email = $_POST ["email"];
    $pais = $_POST ["pais"];
    $telefone = $_POST ["telefone"];
    $mensagem = $_POST ["mensagem"];
    $assunto = $_POST ["assunto"];
    */
   
       
    /*   
       $sql = "INSERT INTO `Formulario` (`idCliente`, `Nome`, `Telefone`,  `Email`, `Pais`, `Assunto`, 
       `Mensagem`) VALUES (NULL, '".$this->nome."', '".$this->telefone."', '".$this->email."', 
       '".$this->pais."', '".$this->assunto."', '".$this->mensagem."')";
    */

    
 }


?>