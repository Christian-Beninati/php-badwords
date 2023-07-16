<?php

// CENSURE WORD
$censured_word = $_GET['censure'];

// PARAGRAPH
$paragraph = $_GET['paragraph'];
$paragraph_length = strlen(trim($paragraph));

// CENSURED PARAGRAPH
$censured_paragraph = str_ireplace($censured_word, '***', $paragraph);
$censured_paragraph_length = strlen(trim($censured_paragraph));


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>

<body>
    <!-- PARAGRAPH -->
    <div class="paragraph">
        <h3>Original Paragraph</h3>
        <p> <?= $paragraph ?> </p>
        <p>The original paragraph was <?= $paragraph_length ?> characters long</p>
    </div>

    <hr>

    <!-- CENSURED PARAGRAPH -->
    <div class="censured-paragraph">
        <h3>Censored Paragraph</h3>
        <p> <?= $censured_paragraph ?> </p>
        <p>The censored paragraph is <?= $censured_paragraph_length ?> characters long</p>
    </div>

</body>

</html>