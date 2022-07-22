<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
     $paragraph = 'Oggi è un bel giorno per non lavorare';
     $paragraphLength = strlen($paragraph);
     $hide = $_GET['hide'];
     $newParagraph = str_replace($hide, '***', $paragraph);
     $newParagraphLength = strlen($newParagraph);

    echo "$paragraph". "  "."- Lunghezza:" . "$paragraphLength".' <hr>
    '. $newParagraph . "  "."- Lunghezza:" . "$newParagraphLength";
 ?>  
</body>
</html>