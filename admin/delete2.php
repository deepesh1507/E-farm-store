<?php
include("../functions.php");
include("../Includes/db.php");


global $con;

// Check if the delete button was clicked
if (isset($_POST['delete'])) {
    // Get the list
           $checkedRows = $_POST['check'];
        // check if any rows were checked
        if (empty($checkedRows)) {
            // if no rows were checked, redirect back to the table page
            header("Location: usermanage2.php");
            exit();
        }
        // connect to database
       
        // loop through the checked rows array and delete each row
        foreach ($checkedRows as $rowId) {
            // escape the row id to prevent SQL injection
            $rowId = mysqli_real_escape_string($con, $rowId);
            // build the delete query
            $query = "DELETE FROM farmerregistration WHERE farmer_id = '$rowId'";
            // execute the query
            if (!mysqli_query($con, $query)) {
                // if query fails, show error message and exit
                echo "Error deleting row: " . mysqli_error($con);
                exit();
            }
        }
        // close the database connection
        mysqli_close($con);
        // redirect back to the table page
        header("Location: usermanage2.php");
        exit();
    }
    ?>
    