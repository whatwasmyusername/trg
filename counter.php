<div class="counter">
    <?php 
    // $f = __DIR__.'/count.txt';
    // if (file_exists($f)){
    //     $number = file_get_contents($f);
    // }
    // else{
    //     $number = 0;
    // }
    $number = 25900;
    
    while(strlen($number) < 5){
        $number = '0' . $number;
    }
    ?><div class="ds">$</div><?php
    for($i=0;$i<strlen($number);$i++){
        ?><div class="number"><?= substr($number, $i, 1)?></div><?php    
    }
    ?>
</div>