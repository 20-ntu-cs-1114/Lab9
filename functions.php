<?php
    // Q no 1
    echo "<h3>Qno 1</h3>";
    $email= $_POST['email'];
    $password= $_POST['password'];
    echo "<p>Email: $email</p>";
    echo "<p>Password: $password</p>";

    // Q no 2
    echo "<h3>Qno2</h3>";
    $radio= $_POST['radio'];
    echo "<p>".$radio."</p>";

    //Qno 3
    echo "<h3>Qno3</h3>";
    if(isset($_POST['checkbox'])){
        echo "<p>True</p>";
    }else{
        echo "<p>False</p>";
    }

    //Qno 4
    echo "<h3>Qno4</h3>";
    function sortArray($array,$arg="ASC"){
       if ($arg=="ASC"){
            asort($array);
        }else if($arg=="DES"){
            arsort($array);
        }else{
            echo "Please provide valid argument";
        }
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    $arr = array(4,5,1,2);
    echo "<p>Sorting in Ascending</p>";
    sortArray($arr);

    //Qno 5 and Qno6
    echo "<h3>Qno5 and Qno6</h3>";
    $integerArray = [100];
    if($radio=="First Radio"){
        echo "Ascending Sorting";
        for($i=0; $i<100; $i++){
            $integerArray[$i] = rand(0,1000);
        }
        sortArray($integerArray);
    }else if ($radio == "Second Radio"){
        echo "Descending Sort";
        $keys = [100];
        for($i=0; $i<100; $i++){
            $keys[$i] = rand(0,2000);
        }
        $assocArray = [100];
        for($i=0; $i<100; $i++){
           $assocArray["$keys[$i]"] = rand(0,5000);
        }
        sortArray($assocArray,"DES");
    }


    // $a = array('a'=>1,'b'=>8);
    // $a['c'] = 44;
    // func($a);
    // print_r($a);
?>