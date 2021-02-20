<?php

//Header
echo '<h1>Hurray!! Time to top Up</h1>';

//Use a for loop to iterate our code
for ($index=0; $index<200; $index++){
    
    //Applying the Random function
    
    $TopUp = rand(10000000000000,90000000000000);
    echo $index +1 . '.  '; 
    echo 'PIN: ' . $TopUp."<br>";
    echo 'SERIAL NO: '. rand(111000000000000,222222222222222).'<br>';
    echo "<hr>";
}




?>
<style>
    body{
        background-color: mediumaquamarine;
        display: grid;
        align-items: center;
        justify-content: center;
    }
    h1{
        color: green;
    }
</style>
