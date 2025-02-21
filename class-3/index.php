<?php


	// function square($num){
	// 	return $num * $num;
	// }

	// $number = 5;

	// echo "The squre of $number is: " . square($number);



  // Find the Maximum of Two Numbers in PHP



// function findMax($num1, $num2) {
//     if ($num1 > $num2) {
//         return $num1;
//     } else {
//         return $num2;
//     }
// }

// Example usage
// echo findMax(10, 20); // Output: 20


// $string = "phppoint";

// $length = strlen($string);
// for($i = ($length-1); $i>0; $i--){
//   echo $string[$i];
// }


// if(isset($_POST['submit'])){
// 	$str=$_POST['str'];
// 	$revstr="";
// 	$count=strlen($str)-1;
// 	for($i=$count;$i>=0;$i--){
// 		$revstr.=$str[$i];
// 	}
// 	echo $revstr;
// }



// <!-- <form method="post">
// 	 <input type="textbox" name="str" required/>
// 	 <input type="submit" name="submit"/>
// </form> -->


// function countVowels($str){
// 	$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'o', 'U'];
// 	$count = 0;

// 	// Loop through each character in the string
// 	for($i = 0; $i< strlen($str); $i++){
// 		if(in_array($str[$i], $vowels)){
// 			$count++;
// 		}
// 	}

// 	return $count;
// }

// // Example usage
// $input = "Hello Wrld!";
// echo "Number of vowels: " . countVowels($input);



// String

// $string = "Online web tutor"; // Vowels are:

// // Vowels set of array
// $volwels = ['a', 'e', 'i', 'o', 'u'];

// // Find string length
// $length = strlen($string);

// // Counter
// $number = 0;

// // For loop
// for($i = 0; $i <$length; $i++){

// 	// #

//    if(in_array($string[$i], $volwels)){

//    	$number = $number + 1;
//    }
// }

// echo "Total Vowels: " . $number;


// function countVowels($str){
// 	$vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
// 	$countt = 0;

// 	for($i = 0; $i < strlen($str); $i++){
// 		if(in_array($str[$i], $vowels)){
// 			$countt++;
// 		}
// 	}
// 	return $countt;
// }

// $string = "Hello World!";
// echo "Number of vowels: " . countVowels($string);


// Scenario 6: Find the Sum of an Array

// function arraySum($arr){
// 	$sum = 0;
// 	foreach ($arr as $num){
// 		$sum += $num;
// 	}
// 	return $sum;
// }

// $number = [1, 2, 3, 4, 5];

// echo "Sum of array: " . arraySum($number);

// $ar=array('one'=>2.1, 'two'=>4.5, 'three'=>5.5);
// echo "Total : ".array_sum($ar)."\n";
// echo "No :".count($ar)."\n";
// echo "Average : ".array_sum($ar)/count($ar);

// $celsius;

// function celsiusToFahrenheit($celsius){
// 	$Fahrenheit = ($celsius * 9 / 5)+32;
// 	return $Fahrenheit;
// }

// $celsius = 32;
// $Fahrenheit = celsiusToFahrenheit($celsius);

// echo "Temperature in Celsius: $celsius C \n";

// echo "Temperature in Fahrenheit: $Fahrenheit F \n";

// Print prime number 1 to 100;

// for($num = 1; $num <= 100; $num++){

//    $checkNum = 0;

//    for($prime = 2; $prime < $num / 2; $prime++){

//       // check prime
//       if($num % $prime == 0){
//          $checkNum = 1;
//          break;
//       }
//    }

//    if($checkNum == 0){
//       echo "<br/> Prime Number ". $num;
//    }
// }

// // Find number is prime

// $num = 60;

// for($prime = 2; $prime <= $num-1; $prime++){

//    if($num % $prime == 0){
//       $checkPrime = true;
//    }
// }

// if(isset($checkPrime) && $checkPrime){
//    echo "This number is not prime number ". $num;
// } else{
//    echo "This number is primare " . $num;
// }



// function isPrime($num){
//       if($num < 2){
//            return false;
//       }

//       for($i = 2; $i <= sqrt($num); $i++){
//             if($num % $i == 0){
//                return false;
//             }
//       }

//       return true;
// }

// // Example usage;

// $number = 20;

// if(isPrime($number)){
//   echo "$number is a prime number.";
// } else{
//       echo "$number is not a prime number.";
// }


// Scenario 9: Generate a Random Password

// $str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
// $str = str_shuffle($str);
// $str = substr($str, 0,8);
// echo $str;

// function factorial ($n){

//       // if($n < 0){
//       //    return "Invalid input! Factorial is not defined for negative numbers.";
//       // }

//       $fact =1;
//       for($i = 1; $i <= $n; $i++){
//             $fact *= $i;
//       }

//       return $fact;
// }

// // Example usage
// $number = 5;
// echo "Factorial of $number is: " . factorial($number);

// function greetUser($name){
//       echo "Hello, $name! welcome! \n";
// }

// function greetMultipleUsers($names){
//       foreach ($names as $name){
//             greetUser($name);
//       }
// }

// $users = ["Alice", "Bob", "Charlie"];
// greetMultipleUsers($users);


// $array1 = array(12,14,15,2);
// $large = $array1[0];


// for($i=1; $i<count($array1); $i++){
//    if($array1[$i] < $large){
//      $large = $array1[$i];
//    }
// }

// echo "Max Values " .$large;

