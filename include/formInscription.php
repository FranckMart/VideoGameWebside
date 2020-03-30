<form action="index.php" method="POST">
    <div class="formTop">
        <div class="form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" class="form-control" id="pseudo" name="pseudo">
        </div>
        <div class="form-group">
            <label for="mdp">Mot de passe</label>
            <input type="password" class="form-control" id="mdp" name="mdp">
        </div>
        <div class="form-group">
            <label for="mail">E-mail</label>
            <input type="mail" class="form-control" id="mail" name="mail">
        </div>
    </div>
    <div class="contentBtn">
        <button type="submit" class="btn-submit">S'inscrire</button>
    </div>

</form>


<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=ScoopGame;charset=utf8', 'root','root');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

if(isset($_POST['pseudo'])&& (isset($_POST['mdp'])) && (isset($_POST['mail']))){
    
    $req = $bdd->prepare('INSERT INTO Create_user (pseudo,mdp,mail) VALUES(?,?,?)');
    $req->execute(array($_POST['pseudo'],$_POST['mdp'],$_POST['mail']));


    header('Location: index.php');
    
}

?>