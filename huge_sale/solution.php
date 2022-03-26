<?php
    function getmaxprofit($items,$n,$m){
        $profit=0;
        sort($items);

        foreach($items as $value){
            if($value >= 0 || $m==0) break;
            $profit+=abs($value);
            $m--;
        }

        return $profit;
    }

    function solve(){
        $m = (int) readline('Enter Truck Capacity:');
        $n = (int) readline('Enter number of junk items:');

        $items = explode(' ', readline('Enter space separated values of junk items:'));

        echo getmaxprofit($items,$n,$m);
        echo "\n";
    }

    solve();

?>