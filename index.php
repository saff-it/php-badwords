<?php 
    $badWords = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi officiis labore sequi, dolorem ex provident voluptates temporibus aliquam illo tenetur? Ullam hic aut consectetur cupiditate consequatur expedita laudantium numquam facilis.';
    $censuredName = $_GET['name'];
    $censuredWords = str_replace( $censuredName, '***', $badWords );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1>Bad Words</h1>
    <p> <?php 
        echo $badWords; 
        echo strlen($badWords); 
        echo $censuredWords;
        echo strlen($censuredWords); 
        
        ?> 
    </p>
</body>
</html>