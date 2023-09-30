 <?php
 $vowels =array("a", "e", "i", "o", "u"); 
 $text="Rushita";
 $length = strlen($text); 
 $count = 0; 
 for ($i =0; $i < $length; $i++) 
 	{ 
 		if (array_search($text[$i], $vowels)) 
 			{ 
 				$count++; 
 			} 
 	}
  echo 'There are (' . $count . ') vowels in : Rushita ';
?>