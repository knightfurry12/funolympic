 <?php
include 'inc/header.php';
?>
 <?php
    // Set up your MySQL connection
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "event_database";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve sport events from the database
    $sql = "SELECT * FROM events_table ORDER BY event_date ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output the events as a table
        echo "<table>";
        echo "<tr>";
        echo "<th>Event</th>";
        echo "<th>Date</th>";
        echo "<th>Location</th>";
        echo "</tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['event_name']."</td>";
            echo "<td>".$row['event_date']."</td>";
            echo "<td>".$row['event_location']."</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No sport events available.";
    }

    // Close the database connection
    $conn->close();
    ?>
     <?php
  include 'inc/footer.php';

  ?>
