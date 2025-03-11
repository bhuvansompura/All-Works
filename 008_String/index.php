<!-- implode() function -->




<?php

// implode(string $separator, array $array): string
$array = ['apple', 'banana', 'cherry'];
$string = implode(', ', $array);

echo $string; 

// Output: apple, banana, cherry

?>
<br>





<!-- explode() function -->



<?php


// explode(string $separator, string $string): array


$string = "apple, banana, cherry";
$array = explode(', ', $string);

print_r($array);
// Output:
// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => cherry
// )


?>



