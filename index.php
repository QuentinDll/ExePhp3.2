<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
      <?php
      $age = 21;
      $gender = "Homme";

      if ($age >= 18 && $gender == "Homme"){
        echo "Vous êtes un homme et vous êtes majeur";
      }
      elseif ($age < 18 && $gender == "Homme"){
        echo "Vous êtes un homme et vous êtes mineur";
      }
      elseif ($age >= 18 && $gender == "Femme"){
        echo "Vous êtes une femme et vous êtes majeur";
      }
      elseif ($age < 18 && $gender == "Femme"){
        echo "Vous êtes une femme et vous êtes mineur";
      }
       ?>
    </p>
  </body>
</html>
