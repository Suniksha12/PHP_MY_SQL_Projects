<?php

   //read file
//    echo readfile('data.txt');

// //    fopen()
//     $mydata = fopen("data.txt","r");
//     // echo fread($mydata,filesize("data.txt"));
//     // fclose($mydata);

//     //fgets() first line from data file
//     // echo fgets($mydata);
//     //fclose($mydata);

//     //end of file fucntion
//     // if ($mydata) {
//     //     // Read the file line by line
//     //     while (!feof($mydata)) {
//     //         echo fgets($mydata);
//     //         echo "<br>";
//     //     }
//     //     // Close the file after reading
//     //     fclose($mydata);
//     // } else {
//     //     // Handle the error if the file could not be opened
//     //     echo "Error: Unable to open the file.";
//     // }

//     //fgetc character by character output
//     if ($mydata) {
//         // Read the file line by line
//         while (!feof($mydata)) {
//             echo fgetc($mydata);
//             echo "<br>";
//         }
//         // Close the file after reading
//         fclose($mydata);
//     } else {
//         // Handle the error if the file could not be opened
//         echo "Error: Unable to open the file.";
//     }

    //how to write a file and create a file
    //fopen

    $mynewFile = fopen("php.txt","w");
    echo $mynewFile;

    $text = "Suniksha is a human...
    She is a good girl.";
    fwrite($mynewFile,$text);
    $text = " step by step ..hasgyagvcjgtycv";
    fwrite($mynewFile,$text);
?>