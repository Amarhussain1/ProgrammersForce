<?php 
$employee=array
(
    array(1,"Amar","Manager",500000),
    array(2,"Ahmad","Salesman",15000),
    array(3,"Hamza","Computer Operator",10000),
    array(4,"Atif","Driver",5000),
 );
$employee2 = array
(
    array(5, "ali", "gatekeeper", 500000),
);
echo"<table border='1px' cellpadding='5px' cellspacing='0px'>;
<tr>

<th>Employee Id</th>
<th>Employee Name</th>
<th>Employee Designation</th>
<th>Employee sallary</th>
</tr>";
foreach ($employee as list($id, $name, $degignation, $sallary))
echo "<tr><td>$id</td> <td>$name </td> <td>$degignation</td> <td> $sallary</td></tr>";
    
//echo "<pre>";
 //print_r($employee);
 //echo "</pre>";

echo"</table> <br>";
echo "count of Employees<br>"; 
echo sizeof($employee);
echo "<br>";
print_r(array_keys($employee));
echo "<br>";
echo "Insert data to the end of an array:<br>";
echo"<pre>";
print_r(array_merge($employee,$employee2));
echo "</pre>";
array_push($employee,5,"ali","gatekeeper","30000");
// echo "<pre>";
// print_r($employee);
// echo "</pre>";
echo "Remove the first element from an array, and return the value of the removed element<br>";
echo array_shift($employee);
echo "<pre>";
print_r ($employee);
echo "</pre>";
echo "Delete the last element of an array:";
array_pop($employee);
echo "<pre>";
print_r($employee);
echo "</pre>";
echo "Insert the element  to an array:";
array_unshift($employee,"9","alia","female","3000");
echo "<pre>";
print_r($employee);
echo "</pre>";
echo "Sort the elements of the  array in descending alphabetical order";
rsort($employee);
echo "<pre>";
print_r($employee);
echo "</pre>";
?>
