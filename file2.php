<?php
//  variable = assign value of the 'paragraph' with the Post method 
$paragraph = $_POST['paragraph']; 
//  variable = assign value of the 'word' with the Post method 
$word = $_POST['word']; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- print the value of the $word variable in the h1 -->
<h1>The word I wrote is: <?php echo $word ?> </h1> 
<!-- print the value of the $paragraph variable in the second h1 -->
<h1>The paragraph I wrote is: <?php echo $paragraph ?> </h1> 
<!-- print the length of the paragraph using the strlen() function. -->
<h3>The length of the paragraph is: <?php echo strlen($paragraph) ?> </h3> 
<!-- print the censored word, replacing each occurrence of the word with '***' using the str_replace() function. -->
<h4>The censored word is: <?php echo str_replace($word, '***',$paragraph) ?> </h4> 

</body>
</html>
