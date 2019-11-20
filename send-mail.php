<?php
require './inc/head.php';

$err='';
$nbreerr=0;

if (isset($_POST['inputName'])  && !empty($_POST['inputName'])  )
    {$inputName=htmlspecialchars($_POST['inputName']);
    }
else{
    $nbreerr++;
     $err .="le champ name est vide \n";
     
    }

 if (isset($_POST['inputPrenom'])  && !empty($_POST['inputPrenom']) )
    {$inputPrenom=htmlspecialchars($_POST['inputPrenom']);
    }
else{
    $nbreerr++;
     $err .="le champ prenom est vide \n" ;
    }

 if (isset($_POST['inputEmail']) && !empty($_POST['inputEmail'])){
      
  //  $email=htmlspecialchars($_POST['email']);
    if (filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL)) {
        $email=htmlspecialchars($_POST['inputEmail']);
    } else {
    $nbreerr++;
    $err .= "l'email n'est pas valid.\n";
            }

   
  
    }
else{
    $nbreerr++;
     $err .="le champ email     est vide \n";
    }

if (isset($_POST['message']) && !empty($_POST['message'])) 
    {$message=htmlspecialchars($_POST['message']);
    }
else{
    $nbreerr++;
     $err .="le message  est vide";
    }


if ($nbreerr >=1)
{echo nl2br($err);}
else{


    echo"<h3>Votre message</h3>";;
    echo nl2br("NOM : $inputName \n PRENOM : $inputPrenom \n EMAIL : $email \n MESSAGE : $message ") ;
    echo "<h4 class='py-5'>Nous allons vous repondre un jour. Merci de patienter</h4>";
}



require './inc/foot.php';
?>