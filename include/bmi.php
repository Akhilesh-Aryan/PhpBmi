<?php
if(isset($_GET['send'])){
    $weight = $_GET['body_weight'];
    $height = $_GET['body_height'];
    
    function bmi($weight, $height){
        $square = ($height * $height);
        $bmi = $weight/$square;
        return $bmi;
    }
    $bmi = bmi($weight,$height);
    if($bmi <= 0.00185){
        $output = "Under Weight";
        echo "<div class='alert bg-warning'>Result :- Your BMI is : $bmi, And You are : $output</div><hr>";
    }
    elseif($bmi > 0.00185 AND $bmi <= 0.00249){
        $output = "Normal Weight";
        echo "<div class='alert bg-success text-white'>Result :- Your BMI is : $bmi, And You are : $output</div><hr>";
    }
    elseif($bmi >0.00249 AND $bmi <= 0.00299){
        $output  = "Over Weight";
        echo "<div class='alert bg-warning'>Result :- Your BMI is : $bmi, And You are : $output</div><hr>";
    }
    elseif($bmi >0.0030){
        $output = "Very fat please join jim soon";
        echo "<div class='alert bg-danger text-white'>Result :- Your BMI is : $bmi, And You are : $output</div><hr>";
    }
}
?>