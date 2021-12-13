

<!DOCTYPE html>
<html>
<head>
    <title>Formulário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>

</head>
<body>
    
<?php
    include_once('CRUD.php');

    $ObjCRUD = new CRUD();

    if(isset($_POST['btnEnviar'])){
        if ($ObjCRUD->InserirForm($_POST) == 'ok') {
            header('location: /formulario/index.php');
        } else {
            echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
        }
        
     }
    

?>

        <form name="formCard" method="POST" action="">
            <h2>
                Formulário de Contato
            </h2>
            
            <div class="input">
              <input name="nome"required type="text" >
              <label> Nome </label>
               
              <span class="error"></span>
            </div>
           
            <div class="input">
               <input name="email" required type="email"  >
                <label> Email: </label>     
            </div>
             
            <div class="input">
                <input name="pais" required type="text" >
                <label>País: </label>
                    
            </div>
            
            <div class="input">
                <input name="telefone" required type="tel" maxlength="15" placeholder="(xx) xxxxx-xxxx" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"  >
                <label> Telefone: </label>
                    <!--input type="tel" name="telefone"--> 
            </div>

            <div class="input">        
                <label> Assunto: </label>
                <select type="text" name = "assunto" id="senioridade" required > 
                    <option selected disabled value="">Selecione</option>
                    <option>Reclamação de Curso</option>
                    <option>Reclamação de software</option>
                    <option>Reclamação de Conteúdo </option>
                    <option>Reclamação de Atendimento </option>
                    <option>Elogio </option>
                    <option>Outro </option>          
                </select>
            </div> 


            <div class="input">
                <!--input required type="text" name="mensagem"--> 
                <label> Mensagem: </label>
                <textarea required type="text" name="mensagem" rows="4" cols="50"> </textarea>
                    
            </div>
            
           

            <!--input type="submit" name="btnEnviar" value="Enviar"-->

            <button type="submit" name="btnEnviar">Enviar</button> 

        </form>


</body>
</html>