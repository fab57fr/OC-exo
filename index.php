<?php
    //FAB
    //error_reporting(E_ALL);
    //ini_set('display_errors', 1);
    // try {
        $bdd = new PDO('mysql:host=127.0.0.1;port=3307;dbname=htmltest', 'fab', 'fab');
    // } catch(Exception $e) {
    //     echo $e->getMessage();
    // }
    //phpinfo();

    //$name='';
    if (isset($_POST['name'])){
        setcookie('pseudo',$_POST['name'],time() + 24*3600, null, null, false, true);
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="refresh" content="20" />
        <link rel="stylesheet" href="./cssindex.css" />
        <title>TchatcheMoiCaEvent Delle</title>
    </head>

    <body>
        <form action="" method="post">
            
            <p>Pseudo<br><input type="text"   name="name"    value="<?php if (isset($_COOKIE['pseudo'])) {echo $_COOKIE['pseudo'];}?>" ></p>
            <p>Message<br><input type="area"   name="msg"     value="" autofocus required ></p>
            <input type="submit" name="submit"  value="ENVOIE">
        </form>
        
        <h1><?php echo date('d/m/Y H:i:s'); ?></h1>
        <br>
        <br>
        <br>

        <?php include "ecriture.php"; ?>

        <table>
                <tr>					
                    <th id='pseudo'>Pseudo</th>
                    <th id='msg'>Message</th>
                    <th id="date">Heure</th>
                </tr>      
                
                <?php   include "lecture.php"; ?>
        </table>
 


    </body>
</html>
