<link rel="stylesheet" type="text/css" href="style.css">
<html>
    <head>
        <title>Whale da massa</title>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style> 
    input[type=text] {
        /* Isso são configuração que serão carregadas em todos os inputs */
 
    padding: 5px 20px;
    margin: 6px 0;
    box-sizing: border-box;
    border: none;
    background-color: #2E2E2E;
    color: white;
    font-size:15 ;  
        font-weight: bold; 
    
    font-family: "Tw Cen MT";
    border-bottom-color:#2E2E2E;  
    border-bottom: none; 
        outline: none;
                     }
    
    </style>
    
            </head>
        
    <body>
    
        
        <div class = "tudoContato">
        
              <div class = "linha1">
            <div class = "TextoNome">
            Nome:
            </div>
            <div class="inputNome" >
                <form name = "MandaNome" method="post" action="TelaContato.php" id="MandaNome">
            <input id="Nome" type = "text" name ="nome">
                
                                  
                    </div>
            <div class = "ImagemFundo1">
            <img src = "img/Barra.png" width="200" height="35">
            </div>
              </div>
            
            
             <div class = "linha2">
            <div class = "TextoSobrenome">
            Sobrenome:
            </div>
            <div class = "ImagemFundo2" >
            <img src = "img/Barra.png" width="155" height= "35">    
            </div>
            <div class= "InputSobrenome" type = "text2">
            <input id = "Sobrenome" type="text" name= "sobrenome">
            </div>
            </div>
            
            <div class = "linha3">
                <div class = "TextoEmail">
                Email:
                </div>
                <div class = "ImagemFundo3">
                <img src = "img/Barra.png" width="200" height= "35"> 
                </div>
                <div class = "InputEmail">
                <input id = "Email" type = "text" name = "email">
                </div>
             </div>
            
            <div class = tudoPergunta>
            <div class = "TextoPergunta">
                Sua pergunta: 
                </div>
                <div class = "ImagemCaixaTexto">
                <img src = "img/CaixaTexto.png" width = "265" height="200">
                </div>
                <div class = "InputCaixaTexto">
                <textarea id = CaixaTexto type="text"  name = "mensagem" cols = "36" > 
               
                </textarea>
                    </div>
            </div>
            
        
        <div class = "linhaBotoesContato">
        <div  class = "Botaovoltar2">
       
            <a href="index.html" >
            <img src = "img/BtnVoltar.png" width="120" height="45">
            </a>
        </div>
        
        <div  class = "BotaoEnviar2">
     
           <input type="image" src="img/BtnEnviar.png" value="ENVIAR" width="120" height="45" />
        
        </div>
            </div>
                </div>
         </form>
        

       
        
        
        <?php
        $cone = mysqli_connect("localhost","id6080111_whaleadmin","whale123","id6080111_whaledata"); 

   if(!$cone){
    echo "Deu pau no banco de dados"; 
   }else{
   
   }
 $peganome =  "Hospital do Servidor Público Municipal"; 
       

$consulta = "SELECT * FROM Hemocentros WHERE Nome = 'Hospital do Servidor Público Municipal'";   
 $resultado = mysqli_query($cone,$consulta) 
     or die ("deu erro"); 
   
    
    $Termina = false; 
    
    while($registro = mysqli_fetch_array($resultado)){
        
       
 
        $nomeONG = $registro['Nome']; 
        $emailu = $registro['email']; 
         
          ini_set('display_errors', 1);

            error_reporting(E_ALL);

            $from = "ermsharo@gmail.com";
            
                
            $nome = $_GET[‘nome’];

            
            $sobrenome = $_POST[‘sobrenome’];
                
                                          
            
            $to = "ermsharo@gmail.com";

            $subject = "$nome $sobrenome ($emailu) mandou messagem: <br> $menssagem <br><br><br>Enviado por Whale APP" ;


            $headers = "$nome $sobrenome mandou uma mensagem para vocês";

            mail($to, $subject, $message, $headers);

     }
            ?>
 
    </body>
</html>
