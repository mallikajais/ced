<?php
// session_start();
$pickup=$_POST['pickup'];
$drop=$_POST['drop'];
$cabtype=$_POST['cabtype'];
$weight=$_POST['weight'];



echo "Pickup : ".$pickup."<br>";
echo "Destination : ".$drop."<br>";

$distance=array(
    "Charbagh" => 0,
    "Indira Nagar" => 10,
    "BBD"=> 30,
    "Barabanki"=> 60,
    "Faizabad" => 100,
    "Basti"=> 150,
    "Gorakhpur"=> 210
);

if($pickup=="Charbagh"){
    $distance=$distance[$drop];
    echo "Distance : ".$distance."<br>";
    
}
else{
    $distance=abs($distance[$drop]-$distance[$pickup]);
    echo "Distance : ".$distance."<br>";
}

class fare{
    function totalfare($cabtype,$weight){
        global $fixedfare,$fare,$distance,$totalfare,$cabtype,$weight;
        // $this->cabtype = $cabtype;
        // $this->weight = $weight;
//cedmicro
        if($cabtype=='CedMicro'){
            $fixedfare=50;
            if($distance<=10){
                $weight=0;
                $fare=$fixedfare+13.50*$distance;
                echo "Fare without luggage : ". $fare."<br>";
            }
            elseif($distance>10 && $distance<=50){
                $fare=$fixedfare+ 13.50*10 +($distance-10)*12.00;
                echo "Fare without luggage : ".$fare."<br>";
            }
            elseif($distance>50 && $distance<=100){
                $fare=($fixedfare+ 13.50*10 + 12.00*50+($distance-60)*10.20);
                echo "Fare without luggage : ".$fare."<br>";
            }
            elseif($distance >100){
                $fare=($fixedfare+ 13.50*10 + 12.00*50 + 10.20*100+($distance-160)*8.50);
                echo "Fare without luggage : ".$fare."<br>";
            }
            
        }
        //cedmini
        elseif($cabtype=='CedMini'){
            $fixedfare=150;
            if($distance<=10){
                $fare=$fixedfare+14.50*$distance;
                echo "Fare : ".$fare."<br>";
            }
            elseif($distance>10 && $distance<=50){
                $fare=$fixedfare+14.50*10+($distance-10)*13.00;
                echo "Fare : ".$fare."<br>";
            }
            elseif($distance>50 && $distance<=100){
                $fare=($fixedfare+14.50*10+13.00*50+($distance-60)*11.20);
                echo "Fare : ".$fare."<br>";
            }
            elseif($distance >100){
                $fare=($fixedfare+14.50*10+13.00*50+11.20*100+($distance-160)*9.50);
                echo "Fare : ".$fare."<br>";
            }
        }
        //cedroyal
        elseif($cabtype=='CedRoyal'){
            $fixedfare=200;
            if($distance<=10){
                $fare=$fixedfare+15.50*$distance;
                echo "Fare : ".$fare."<br>";
            }
            elseif($distance>10 && $distance<=50){
                $fare=$fixedfare+15.50*10+($distance-10)*14.00;
                echo "Fare : ".$fare."<br>";
            }
            elseif($distance>50 && $distance<=100){
                $fare=$fixedfare+15.50*10+14.00*50+($distance-60)*12.20;
                echo "Fare : ".$fare."<br>";
            }
            elseif($distance >100){
                $fare=$fixedfare+15.50*10+14.00*50+12.20*100+($distance-160)*10.50;
                echo "Fare : ".$fare."<br>";
            }
        }
        else{
            $fixedfare=250;
            if($distance<=10){
                $fare=$fixedfare+(16.50*$distance);
                echo "Fare : ".$fare."<br>";
            }
            elseif($distance>10 && $distance<=50){
                $fare=$fixedfare+(16.50*10)+($distance-10)*15.00;
                echo "Fare : ".$fare."<br>";
            }
            elseif($distance>50 && $distance<=160){
                $fare=$fixedfare+(16.50*10)+(15.00*50)+($distance-60)*13.20;
                echo "Fare : ".$fare."<br>";
            }
            else{
                $fare=$fixedfare+(16.50*10)+(15.00*50)+(13.20*100)+($distance-160)*11.50;
                echo "Fare : ".$fare."<br>";
            }
        }

// \\\\\\\\\\\\\\\\\\\\\
        if($cabtype=='CedMicro'){
            echo "";
        }
        elseif($cabtype=="CedSUV"){
            if($weight>0 && $weight<=10){
                $totalfare=$fare+100;
                echo "Fare with luggage : ".$totalfare;
            }
            elseif($weight>10 && $weight<=20){
                $totalfare=$fare+200;
                echo "Fare with luggage : ". $totalfare;
            }
            elseif($weight==0){
                $totalfare=$fare;
                echo "Fare with luggage : ".$totalfare;

            }
            else{
                $totalfare=$fare+400;
                echo  "Fare with luggage : ".$totalfare;
            }
        }
        
        elseif($cabtype==('CedMini' || 'CedRoyal')){
            if($weight>0 && $weight<=10){
                $totalfare=$fare+50;
                echo " Fare with luggage : ".$totalfare;
            }
            elseif($weight>10 && $weight<=20){
                $totalfare=$fare+100;
                echo "Fare with luggage : ".$totalfare;
            }
            elseif($weight==0){
                $totalfare=$fare;
                echo "Fare with luggage : ".$totalfare;

            }
            else{
                $totalfare=$fare+200;
                echo "Fare with luggage: ".$totalfare;
            }
        }
    }
}
$obj=new fare;
$obj->totalfare($cabtype,$weight);
// $_SESSION["pickup"] = $pickup;
// $_SESSION["drop"] = $drop;
// $_SESSION["cabtype"] = $cabtype;
// $_SESSION["weight"] = $weight;
// $_SESSION['fare']=$fare;
// $_SESSION['totalfare']=$totalfare;
// $_SESSION['distance']=$distance;

?>