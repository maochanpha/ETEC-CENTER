<?php
$score1 = 85;
$score2 = 90;
$score3 = 78;
$score4 = 92;
$score5 = 88;

$total = $score1 + $score2 + $score3 + $score4 + $score5;
$average = ($score1 + $score2 + $score3 + $score4 + $score5) / 5;
if($average >= 100){
    $grade = "A+";
}elseif($average >= 90){
    $grade = "A";
}elseif($average >= 80){
    $grade = "B";  
}elseif($average >= 70){
    $grade = "C";
}elseif ($average >= 60){
    $grade = "D";
}elseif ($average >= 50){
    $grade = "E";
}else{
    $grade = "F";   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
        <h1 class="text-center m-2 p-2">Students Score</h1>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Score1</th>
                <th>Score2</th>
                <th>Score3</th>
                <th>Score4</th>
                <th>Score5</th>
            </tr>
            <tr>
                <td><?php echo $score1; ?></td>
                <td><?php echo $score2 ?></td>
                <td><?php echo $score3 ?></td>
                <td><?php echo $score4 ?></td>
                <td><?php echo $score5 ?></td>
            </tr>

            <tr>
                <th>Total</th>
                <th>Average</th>
                <th>Grade</th>
                <th>Opinion</th>
                <th>Remarks</th>
            </tr>

            <tr>
                <td><?php echo $total ?></td>
                <td><?php echo $average ?></td>
                <td><?php echo $grade ?></td>
            </tr>
        </table>
</body>
</html>