<link rel="stylesheet" type="text/css" href="style.css">

<html>
    <head>
         
        <title>Whale da massa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <?php
    $cone = mysqli_connect("localhost","id6080111_whaleadmin","whale123","id6080111_whaledata"); 

   if(!$cone){
    echo "Deu pau no banco de dados"; 
   }else{
   
   }
 $peganome =  $_GET["nomep"]; 
      
 $email = ""; 
$consulta = "SELECT * FROM Hemocentros WHERE Nome = '$peganome'";   
 $resultado = mysqli_query($cone,$consulta) 
     or die ("deu erro"); 
   
    
    $Termina = false; 
    
    while($registro = mysqli_fetch_array($resultado)){
        
          
        $codmaps = "emBreveMapa"; 
        $nome = $registro['Nome']; 
        $endereco = $registro['Endereco']; 
        $telefone = $registro['Telefone']; 
        $site = $registro['Site']; 
        $CodMaps = $registro['CodMaps']; 
        $cidade = $registro['Cidade']; 
        $horario = $registro['Horario']; 
        $nHemocentro = $registro['ID']; 
        $email = $registro['email']; 
        $nomefoto1 = $registro['NomeFoto1'];
        $nomefoto2 = $registro['NomeFoto2']; 
        
        
        
    }
    
    
    ?>
    
    <body>
     
        
       
        
       <div class = "TudoInfo">
           <div class = "tituloInfo">
              <font face="Rockwell" color ="white"><?php echo $nome;?></font>   
           </div>
           <div class = "banner">
            <br>
            <br>
               <img src = "<?php echo $nomefoto1?>" width="260" height="150">
            <br>
            <br>
           </div>                     
           <div class =  "contato">
                    <div class = "imagemContato">
                    <img  src = "img/imgContato.png" width="35" height="35">
                    </div>
                    <div class = "TextoContato">
                    <?php  echo $telefone ?>
                    </div>
                                        
                <div class =  "Localizacao">
                    <div class = "imagemLocalizacao">
                    <img  src = "img/imgLocalizacao.png" width="35" height="35">
                    </div>
                    <div class = "Textolocalizacao">
                     <?php  echo $endereco ?>
                   
                    </div>
                       <div class=  "mapa">
                  
               </div>  
                <div class =  "Horario">
                    <div class = "imagemHorario">
                    <img  src = "img/imgHorario.png" width="35" height="35">
                    </div>
                    <div class = "TextoHorario">
                    
                        <?php  echo $horario ?>
                        
                    </div>
                </div> 
               <br>
               <div class =  "SITE">
                    <div class = "imagemSITE">
                    <img  src = "img/imgSite.png" width="35" height="35">
                    </div>
                    <div class = "TextoSITE">
                     <a href="<?php echo $site;?>"><?php echo $site;?></a>
                      
                        
                        
                    </div>
                </div>    
               
               <div class = "LinhaBotoes">
                   <div class = "BotaoVoltar3">
                   <a href="index.html" >
                   <img src = "img/BtnVoltar.png" width="120" height="45">
                   </a>
                   </div>
                <div class = "BotaoContato">
                    
                
                   </div>
                
               </div>
                    
                    
                    
                    
        </div>
           
      
 
              </body>
</html>
