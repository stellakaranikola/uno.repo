<?php
    include('../server.php');
    $sql = "SELECT * FROM games";
    $result = mysqli_query($db, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>";
        echo "<Button class='btn'> Join </Button>";
        echo "   Game ID: ";
        echo "<b>";
        echo $row['gameid'];
        echo "</b>";
        echo "  Name: ";
        echo $row['gamename'];



        echo "<p>";
        echo "<p>";
        echo "<p>";
    }



?>