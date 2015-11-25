<!-- <!-- Link to Public Repository - https://github.com/Izharkhan/Lab10.git	--> -->

<!DOCTYPE html>

<head>
<style>
body{
	text-align:center;
	background-color:black;

}
header,b{
	font-size:30px;
	color:white;
}
</style>
</head>


<html lang="en">
    <head>
   <meta charset="utf-8" />
  
        </head>
    <body>
		<header><b>Search The word </b></header><br>
		
		
		<b>Enter word you want to search<b>
		
		
		
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
<input type="word" name="word">
<input type="submit" name="sub">
<br><br>
<textarea rows="12" col="100">

		
		
		
		
		
	<?php
if(isset($_POST['sub'])) 
{
$var = $_POST['word'];   
$var= strtoupper($var);
$str = file_get_contents('dictionary.json');
$json = json_decode($str, true); 

$iterate = new RecursiveArrayIterator($json);

if($iterate->valid()) 
//while	($key->value){}

        foreach ($iterate as $key => $value) {
          if(0===strpos($key,$var))  
		  { 
		   echo $key . ' : ' . $value . "<br/>";
			}
        }
    $iterate->next();
}
//$key->value;

?>
      </textarea>
</form>	
    </body>
</html>