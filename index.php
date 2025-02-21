<?php

      // $filename = 'data.txt';

      // $file = fopen($filename, 'w+');

      // fwrite($file, '\nHello World 6\nHellow Bangladesh\n');

     // if(file_exists($filename)){
     //      while(!feof($file)){
     //           echo nl2br(fgetc($file));
     //      }
     // }

      // $file_location = "new/data.txt";
      // if(!is_dir('new')) {
      //     mkdir('new');
      // }

      // $file = fopen($file_location, 'w');

      // fwrite($file, "Hello World 6\nHellow Bangladesh\n");

      // fclose($file);

      // if(file_exists($file_location)){
      //     unlink($file_location);
      // }

     // $filename = 'data.csv';

     // $file = fopen($filename, 'r');

     // $students = [
     //      ['Name' => 'A', 'Age' => 20, 'Email' => 'a@b.com'],
     //      ['Name' => 'B', 'Age' => 21, 'Email' => 'b@b.com'],
     //      ['Name' => 'C', 'Age' => 22, 'Email' => 'c@b.com'],
     //      ['Name' => 'D', 'Age' => 23, 'Email' => 'd@b.com'],
     //      ['Name' => 'E', 'Age' => 24, 'Email' => 'e@b.com'],
     // ];

     // foreach($students as $student){
     //      fputcsv($file, $student);
     // }

     // $new_dir = "new";

     // mkdir($new_dir, 0400, true);

     // var_dump(is_writable($new_dir));

     // $my_file = fopen("a.txt", "w");

     // $txt = "JAJ SftTech";

     // fwrite($my_file, $txt);

     // fclose($my_file);

// $file = fopen("test.text", "w");

// fwrite($file, "Hello you are so greate");

// fclose($file);
// $file = fopen("test.text", "r");
// echo fread($file, filesize('test.text'));


// $filename = "example.txt"; // Specify the file name

// // Open the file for reading
// $file = fopen($filename, "r");

// if ($file) {
//     // Read the file line by line
//     while (($line = fgets($file)) !== false) {
//         echo $line . "<br>"; // Output each line
//     }

//     // Close the file
//     fclose($file);
// } else {
//     echo "Error: Unable to open the file.";
// }


// $filename = "example.txt"; // Specify the file name

// // Open the file for reading
// $file = fopen($filename, "r");

// if ($file) {
//     // Read the file line by line
//     while (($line = fgets($file)) !== false) {
//         echo $line . "<br>"; // Output each line
//     }

//     // Close the file
//     fclose($file);
// } else {
//     echo "Error: Unable to open the file.";
// }

// $file = "example.txt"; // Replace with your file path
// $lines = [];

// if ($handle = fopen($file, "r")) {
//     while (($line = fgets($handle)) !== false) {
//         $lines[] = trim($line); // Store each line in an array
//     }
//     fclose($handle);
// } else {
//     echo "Error opening the file.";
// }

// print_r($lines); // Output the array of lines


// $handele = fopen("test.text", "r");
// while ($char = fgetc($handele)){
//     if($char == "\n")
//     {
//         $char = "<br />";
//     }
//     echo $char;
// }
// fclose($handele);
   

   // echo file_exists("test.text");

    

