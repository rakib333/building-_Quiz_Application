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
    $score = 0;
    $questions = $quizzes['questions'];
    $totalQuestion = count($questions);


    for ($i = 0; $i < $totalQuestion; $i++) {
        $userAnswer = $_POST['quiz' . $i] ?? null;

        if ($questions[$i]['type'] == 'single') {
            $answer = $questions[$i]['answer'];
            if ($answer == $userAnswer) {
                $score++;
            }
        } elseif ($questions[$i]['type'] == 'multiple') {
            $answer = $questions[$i]['answer'];
            if ($answer == $userAnswer) {
                $score++;
            }
        }
    }

    // echo "<code>";
    // print_r($_POST);
    // echo "</code>";
    echo "<h2>Your score is  $score out of $totalQuestion </h2>"
    ?>

    <p>Go back to <a href="index.php">Quiz</a></p>
</body>

</html>