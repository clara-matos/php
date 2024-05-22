<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>
    <h1> Array - Laços</h1>

    <h2> Array: Definição explicita (sem chave) </h2>
      
    <pre>
       <?php
        $var = array (1,2,3,4);
         
            echo "impressao 1 por 1";
            echo $var [0];
            echo $var [1];
            echo $var [2];  
            echo $var [3];

       ?>
    </pre>

    <h2> Impressão com for </h2>

    <pre>
      <?php
      $var = array (1,2,3,4);
      for ($a=0; $a<count($var); $a++) {
          echo "$var[$a]";
      }

      ?>
    </pre>

     <pre>
       <?php
        $var = array("clara"=>20,
                 "Luna"=>15,
                 "Ryan"=>35,
                 "Lucas"=>40,
        );
         foreach ( $var as $dados);
                 echo "$dados"

        ?>
     </pre> 

     <h1> Foreach com chave valor</h1>
     <pre> 
        <?php
         foreach ( $var as $chave => $valor);
         echo "A idade de $chave é $valor"
      ?>
     </pre>
       <h2> print_r</h2>
      
     <pre>
        <?php
         
         print_r($var);
 
      ?>
     </pre>  

     <pre>
        <?php
        echo "------// Array Multidimencional: Distribuição Explicita<br>";
        $alunos = array( "maria" =>
                        array  ("endereco" => "Rua chile 1446",
                                  "bairro"  => "xavier" ),
                         
                         "Lucas" =>
                         array  ("endereco" => "Rua gonsalves sobrinho 35",
                                   "bairro"  =>  "oliveira"),
                                   
                         "Isabela" => 
                         array  ("endereco" => "Rua veneza 71",
                                   "bairro"  => "alvorada"  )          
                         
                        );

               print_r($alunos = array ("maria") );
         ?>      
     </pre>
</body>
</html>