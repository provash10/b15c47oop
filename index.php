
<?php

// Class Test {

//     public function __construct (){
//         echo "This is Constructor Function!<br>";
//     }
//     public function show (){
//         echo "Hello World!<br>";
//     }

//     public function greetings(){
//         echo "Good Evenings.<br>";
//     }

//     public function __destruct (){
//         echo "This is Destructor Function!";
//     }
// }
// $testObject = new Test ();
// $testObject->show();
// $testObject->greetings();

//Inheritance

class Parents {
    public function flat(){
        echo "2BHK Flat<br>";
    }

    public function car(){
        echo "Ferari<br>";
    }
}

// class Child{
//     public function bike(){
//         echo "R15";
//     }
// }

class Child extends Parents{
    public function bike(){
        echo "R15<br>";
    }
}
$parentsObject = new Parents();
$parentsObject->flat();
$parentsObject->flat();

$childObject = new child();
$childObject->bike();
$childObject->car();
?>