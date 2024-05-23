<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Management</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        .btn {
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin: 20px;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-update {
            background-color: #28a745;
        }
        footer {
            background-color: teal;
            text-align: center;
            width: 100%;
            height: 70px;
            color: white;
            font-size: 25px;
            position: fixed;
            bottom: 0;
            left: 0;
        }
    </style>
</head>
<body>
<center><h2 class="heading"><i>Online Investment Training Platform System</i></h2>

<h2 style="text-align: center;">Instructor Management</h2>

<table>
    <thead>
        <tr>
            <th>Enrollment ID</th>
            <th>User Id</th>
            <th>Course Id</th>
            <th>Enrollment date</th>
            <th>Completion Status</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // PHP Code to Retrieve Data from Database
        include('db_connection.php');

        $sql = "SELECT * FROM enrollments";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["EnrollmentID"]."</td>";
                echo "<td>".$row["UserID"]."</td>";
                echo "<td>".$row["CourseID"]."</td>";
                echo "<td>".$row["EnrollmentDate"]."</td>";
                echo "<td>".$row["CompletionStatus"]."</td>";
                echo "<td>";
                echo "<a href='update_enrollment.php?EnrollmentID=".$row["EnrollmentID"]."' class='btn btn-update'>Update</a>";
                echo "<a href='delete_enrollment.php?EnrollmentID=".$row["EnrollmentID"]."' class='btn btn-delete'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </tbody>
</table>

<footer>
    <p style="text-align: center;">Designed by Aimee Diane KUBWIMANA_222002776 &copy; YEAR TWO BIT GROUP A &reg; 2024</p>
</footer>

</body>
</html>