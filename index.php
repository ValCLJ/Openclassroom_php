<?php

$users = [
[
'full_name' => 'Mickaël Andrieu',
'email' => 'mickael.andrieu@exemple.com',
'age' => 34,
],
[
"full_name" => 'Mathieu Nebra',
'email' => 'mathieu.nebra@exemple.com',
'age' => 34,
],
[
'full_name' => 'Laurène Castor',
'email' => 'laurene.castor@exemple.com',
'age' => 28,
],
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes !</title>
</head>
<body>
    <ul>
        
        </ul>


        <?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];  
?>


    <!-- fonction d'affichage recette/autheur -->
        <?php 
        function displayAuthor(array $user)  {
            
                        return $user["full_name"] .", ".$user["age"] . "ans.";

        } ?>

       
        <?php 
        $i = 0;
        foreach($users as $user ){
            echo "<p>";
       echo displayAuthor($user); 
       echo $recipes[$i]["title"]." - ".$recipes[$i]["recipe"]." - ".$recipes[$i]["author"];
       $i++;
       echo "</p>";
         }?>
</body>
</html>

