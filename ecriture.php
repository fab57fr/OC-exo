<?php
//FABRICE
                  
    if (isset($_POST["submit"]))
            {
             
                $date=date('H:i:s');
                $req=$bdd->prepare('INSERT INTO chat(Pseudo,Message,Date) VALUE(:nom,:msg,NOW())');
                $req->execute(array(
                        'nom'=>$_POST["name"],
                        'msg'=>$_POST["msg"],
                        //'date'=>$date
                ));
               
            }
?>