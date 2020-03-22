<link rel="stylesheet" type="text/css" href="style.css">
<html>
    <head>
        <title>Whale da massa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="height:100% ; width: 120%"  >
        <script type = "text/javascript" src=""></script>  
  
       <div class = "tudoTelaCidade">

       <br/>
        <div class = "ht">   
          <p> &nbsp &nbsp &nbsp <font face="Rockwell" color ="white"> Qual a sua cidade</font>  </div>

    <BR/>
    <BR/>
   

    <div class="FundoCombo">
        &nbsp;
        

        <img src = "img/Barra.png"  width="250" height="55">
        </div>
    <DIV class = "ComboCidade">
        
&nbsp;&nbsp;&nbsp;
        <form action='NichoAdocao.php' method='POST'>
        <select  name="cidades">
            
            
            <?php 
             $cone = mysqli_connect("localhost","id6080111_whaleadmin","whale123","id6080111_whaledata"); 

   if(!$cone){
    echo "Deu pau no banco de dados"; 
   }else{
   
   }
 $peganome =  "Hospital do Servidor Público Municipal"; 
       

$consulta = "SELECT * FROM CidadeAdotar";   
 $resultado = mysqli_query($cone,$consulta) 
     or die ("deu erro"); 
   
    
    $Termina = false; 
    
    while($registro = mysqli_fetch_array($resultado)){
        
       
        $nome = $registro['NomeCidade']; 
        
         echo "<OPTION value  = '$nome'>$nome </OPTION>";
        
        
        
    }
    
    
              
           ?>
           

        </select>
        
    </DIV>
    <div class =FundoBarra>
        <img src="img/BarraCagada.PNG">
    </div>

        
        <div  class = "Botaovoltar">
           
            <a href="index.html" >
            <img src = "img/BtnVoltar.png" width="120" height="45">
            </a>
        </div>
        
                <div  class = "BotaoProximo">
            
          <input type="image" src = "img/BtnProximo.png" width="120" height="45">
            
            
        </div>
        


        </div>
       
       </form>
    </body>
</html>

