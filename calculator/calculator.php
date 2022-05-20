<!DOCTYP	E html>
<html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   </head>
  <body>
    <div>
     <h2>Simple Calculator</h2>
    </div>
   <form class="calc.php" method="get">
    <!-- The form for inputs of the first number-->
    <input type="text" name="num1" placeholder="number1"> 
    <br>
<!-- The operations to consider-->
    <select name="operator">
        <option>Select</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
        <option>Modulus</option>
     </select> 
    <br>
 <!-- The form for inputs of the second number-->
    <input type="text" name="num2" placeholder="number2">
   <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
   </form>
     <p><strong>Answer:</strong></p>
<?php
//to ask for get method, to check for submit
    if (isset($_GET['submit'])){
//to get variables from the url and give them php varaiable names
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

//now lets tell it what to do based on the operation specified
                    switch ($operator) {
                           case "Select":
	                  	 echo "You need to selcect an operator!";
                           break;
                           case "Add":
                           	echo $result1 + $result2;
                           break;
			   case "Subtract":
                           	echo $result1 - $result2;
                       	   break;
                     	   case "Multiply":
                             	 echo $result1 * $result2;
                           break;
                           case "Divide":
                                 echo $result1 / $result2;
                           break;
                           case "Modulus":
                                 echo $result1 % $result2;
			   break;     
		                       }
   				 }	
																					 ?>		
  </body>
</html>
