<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>lab2php</title>
</head>
<body>
<?php
// 1-  Search for how to make \n work in browser.
header('Content-type: text/plain');
echo "Line 1\nLine 2";
// 2-  Search for 3 built-in function of a string.
// First one 
$str = "My Name Is Hagar Hosny Gad";
echo chunk_split($str,1,".");
// second one
$stre = "My Name Is Hagar Hosny Gad";
echo $stre . "<br>";
echo chop($stre,"Gad");
// Third one 
$strg = "My Name Is Hagar Hosny Gad";
print_r (explode(" ",$strg));

// 3-  Write a PHP script to get the sum and avg of an indexed array
$the_value[0] = "12";
$cthe_value[1] = "45";
$the_value[2] = "10";
$the_value[3] = "25";
 rsort($the_value);  //arrange in descing order 
 sort($the_value);  // arrange in asceding order 
 array_sum($the_value);//sum
$average = array_sum($the_value)/count($the_value); //average
echo $average;
 
// 4-  Write a PHP script to sort the following associative array :

$names[31] = "sara";
$names[41] = "john";
$names[39] = "walaa";
$names[40] = "ramy";

// a) ascending order sort by value
asort($names);
// b) ascending order sort by Key
kasort($names);
// c) descending order sorting by Value
arsort($names);
// d) descending order sorting by Key  
krsort($names);


// 5- Display the following array in an HTML table with Name, Email and Status table headers.
// Specify PHP status with red color.
$students = array( 
    array (
      "name" => 'alaa',
      "email" => 'alaa@test.com',
      "status" => 'php',	
      
   ),
   
   array (
      "name" => 'shamy',
      "email" => 'shamy@test.com',
      "status" => '.Net',	
      
   ),
   
   array (
      "name" => 'youssef',
      "email" => 'alaa@test.com',
      "status" => 'testing',	
      
   ),
   array (
      "name" => 'waleid',
      "email" => 'waleid@test.com',
      "status" => 'php',	
      
   ),
   array (
      "name" => 'rahma',
      "email" => 'rahma@test.com',
      "status" => 'frontend',	
      
   )
);
   ?>


<?php if (count($students) > 0): ?>
   <table border='2'>
     <thead>
       <tr>
         <th><?php echo implode('</th><th>', array_keys(current($students))); ?></th>
       </tr>
     </thead>
     <tbody>
   <?php foreach ($students as $row): array_map('htmlentities', $row); 
  array_map('htmlentities', $row); 
   
   $val = in_array('php', array_column('status',$row),true);
   print_r($val);
   
    if($val === 'php'){
      $tr = 'red';
   }
   else{
      $tr = '#fff';
   } 
   ?>
       <tr style=" background-color:<?php $tr ?>">
         <td><?php echo implode('</td><td>', $row); ?></td>
       </tr>
       
   <?php endforeach; ?>
     </tbody>
   </table>
   <?php endif; ?>
  

</body>
</html>
