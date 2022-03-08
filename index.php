<?php include ("User.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Connectez vous !!!!</title>
</head>

<body>
    <form action="" method="Post">
       login <input type="text" name="login">
       mot de pass <input type="text" name="mdp">
        <input type="submit" name="connexion" value="connexion">
    </form>

    <?php
        $U1 = new User("Mathys","1234");
        $TableauUser = array();

        array_push($TableauUser,$U1);
        array_push($TableauUser,$U2);

        if(isset($_POST["connexion"]))
        {
            $trouve = false;
            foreach ($TableauUser as  $TheUser) 
            {
                if($TheUser->getNom()==$_POST['login'])
                {
                    $trouve = true;
                    if($TheUser->seConnecter($_POST['mdp']))
                    {
                        ?> <p>connecter</p> <?php
                    }
                    else
                    {
                        ?> <p>Mauvais Mot de passe</p> <?php
                    }
                }
            }
            if(!$trouve)
            {
                echo "user inconnue";
            }       
        }
    ?>
</body>
</html>