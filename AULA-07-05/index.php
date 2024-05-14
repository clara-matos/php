<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2> array: definição implincita</h2>
    <pre> 
         <?php
           $aluno = array ( "clara", "luna", "Ryan", "Italo", "livia", "pedro", "Isa");
        for ($a=0; $a<7; $a++) {
            echo " $a = $aluno[$a] <br>";
        }
       ?> 
    </pre>
    <h2> array: Definição Explicita </h2>
     <pre>
       <?php
       $var = array (1, 2, 3, 4);
       for ($a=0; $a<count($var); $a++) {
           echo "$var[$a]";
       }
     ?>
     </pre>
     <h2> exemplo com foreach</h2>
     <pre>
      <?php
      $var = ["Hubert" => 20, "CLara" => 5, "Luna" =>6.1, "Ryan" =>4.1];
      echo "exemplo com foreach <br>";
      $var = ["huber" => 3, "ariel" => 5, "luiz " => 6, "ryan" => 10];

      foreach ($var as $chave => $valor){
          if($valor >=6 && $valor<=10){
              echo "aluno aprovado";
              echo "o Aluno: $chave <br>";
              echo" obteve a nota : $valor <br>";
          } else if ($valor<6){
              echo "aluno reprovados";
              echo "o Aluno: $chave <br>";
              echo "obteve a nota : $valor <br>";
          }
          
      }
      ?>
     </pre>
    
     
   
    

     

</body>
</html>