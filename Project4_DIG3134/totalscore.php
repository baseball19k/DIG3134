<?php
$user = $_SESSION['username'];
$query = "SELECT results FROM quiz WHERE username='$user'";
$results = mysqli_query($db, $query);

if (mysqli_num_rows($results) == 1) {
    while ($row = $results->fetch_assoc()) {
        if ($row !== null){
            echo "Your score: " . $row['results']."<br>";   
        } else {
            echo "No score";
        }
    }
}else {
    echo "No score";
}


// $result == array_sum($total);

// if (count($total) == 4) {
//     echo $result;
// } else if (count($total) < 4) {
//     echo "You haven't completed all of the quizzes";
// } else if (count($total) > 4) {
//     echo "You submitted too many times";<br>
    
//     echo "Reset Quiz? <button class="yes">Yes</button>" 
//         if
//         unset($total);
//         $total = array();
// }

?>
