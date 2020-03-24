<link rel="stylesheet" type="text/css" href="style.css">

    <head>
        <title>Whale da massa</title>
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
   <div class="TudoNicho">
   <?php
    include('pegaCidade.php');
    echo $cliente; 

    $cone = mysqli_connect("localhost","id6080111_whaleadmin","whale123","id6080111_whaledata"); 

   if(!$cone){
    echo "Deu pau no banco de dados"; 
   }else{
   
   }
 $pegaCidade =  $cliente; 
    
     

$consulta = "SELECT * FROM  ONGCultura WHERE cidade = '$pegaCidade'";   
 $resultado = mysqli_query($cone,$consulta) 
     or die ("deu erro"); 
   
    
    $i = 0 ; 
    while($registro = mysqli_fetch_array($resultado)){
        
        
        
        $nome[$i] = $registro['Nome']; 
        $endereco[$i] = $registro['Endereco']; 
        $ID[$i] = $registro['ID']; 
        $Foto[$i] = $registro['NomeFoto1'];
        
        $parametro = $nome[$i];
       $Teste = "<body>
       <div class  = tudo id = 'nicho'> 
        <div class= 'Nicho'>
        <div class = 'Imagem'>
        <a href='TelaInformacoesCultura.php?nomep=$parametro'>
        <img src ='$Foto[$i]' height='175' width='250'>
            </a>
        </div>
        <img src = 'img/TelaNicho.png' height= '250' width= '250' align = 'Center'>
        </div>
              <div class = 'Titulo'>
            <a href='TelaInformacoesCultura.php?nomep=$parametro'>
                $nome[$i]
                  </a>
        </div>
         <div class = Endereco>
        <a href= 'TelaInformacoesCultura.php?nomep=$parametro'>  
             $endereco[$i] 
        </a>
        </div> 
        </div>
            </body>
";
        
        echo $Teste; 
        
         $numero = $ID[$i]; 
 
    }
    $i=0;
    
          
        
        
    ?>
  
     
    <script>
    var nVezes = <?php echo $numero;?> 
        while(nVezes>0)
        {
         <?php 
              
            
         ?>
            nVezes--; 
        }
        
    </script>
</div>
   