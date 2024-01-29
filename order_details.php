<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - User Details</title>
<style>
    table,th,td 
    {
        border: 1px solid black;
        border-collapse:collapse;
    }
</style>
</head>
<body>
    <h1>Order Details</h1>
    <table style="width:100%">
        <tr>
            
            <!-- <th>order id</th> -->
            <th>first name</th>
            <th>phone number</th>
            <th>email</th>
            <th>booking date</th>
            <th>service you want</th>
            <th>address</th>
            <th>order id</th>
            <th>order status</th>
            <!-- <th>Other Details</th> -->
        </tr>
        <?php
        // Connect to the database (similar to your previous code)
        $host = "localhost";
        $db_name = "order";
        $db_user = "root";
        $db_pass = "";

        $conn = mysqli_connect('localhost','root','','order');

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Retrieve user details from the database
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            // echo "<td>" . $row['user_id'] . "</td>";
            // echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['number'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['service'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            // echo "<td>" . $row['order_status'] . "</td>";
            echo "<td>" . $row['order_id'] . "</td>";
            echo "<td>" . $row['order_status'] . "</td>";
            
            echo "</tr>";
        }

        mysqli_close($conn);
        ?>
    </table>
</body>
</html>