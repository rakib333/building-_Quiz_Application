<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
</head>

<body>
    <?php
    $quizData = file_get_contents('data/quiz.json');
    $quizzes = json_decode($quizData, true);

    echo "<code>";
    print_r($_POST);
    echo "</code>";


    ?>
</body>

</html>