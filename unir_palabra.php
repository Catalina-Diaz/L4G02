<html>
    <h3>Unir palabra</h3>     
    <!--Texto plano-->

    <?php

        $array= ["hamster", "gat,ter,pol,hams,sop"];
        $palabra = explode(",", $array[1]);
        echo('<pre>'); var_dump($array); echo('</pre>');
        
        //ciclo
        for($i=0; $i<count($palabra); $i++){
            $p = "";
            for($v=0; $v <count($palabra); $v++ ){
                //for($s=0; $s <count($palabra); $s++ ){

                if($v!= $i) {
                    $p =$palabra[$i].$palabra[$v];//$palabra[$s];
                }
                if($p==$array [0]){
                    echo "<b>Palabra Armada: </b>". $palabra[$i]. ",".$palabra[$v];//.",".$palabra[$s];
                }
                //}  
            }
        }    
    ?>
</html>