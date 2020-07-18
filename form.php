 
 <?php
        
    try
        {
            
           $connexion = new PDO('mysql:host=localhost; dbname=id14370202_boutique', 'id14370202_prudoloko229','CV&/]1=*?ywaDxV}');
        }
            
    catch(Exception $e)
    {
            
       die('Erreur :'.$e->getMessage());
    }
    $pdoconnect = $connexion->prepare('INSERT INTO formulaire(nom, prenom,mel,command) VALUES ( :nom, :prenom, :mel, :command)');     
    $pdoconnect->execute(array('nom'=>$_POST['seudo'],'prenom'=>$_POST['seudo'], 'mel'=>$_POST['mail'], 'command'=>$_POST['commande']));

    
            $message = 'Votre commande a été bien enregistrer. ';
    

?>
