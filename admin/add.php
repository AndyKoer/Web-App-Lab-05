<?php
session_start();
include('../connectems.php');






// Function to add a student
function addStudent($connect, $stu_id, $stu_name, $stu_major, $stu_year_of_enrollment, $cgpa, $year_of_graduation) {
    $query = "INSERT INTO student_tab (Stu_id, Stu_name, Stu_major, Stu_year_of_enrollment, CGPA, year_of_graduation) VALUES ('$stu_id', '$stu_name', '$stu_major', '$stu_year_of_enrollment', '$cgpa', '$year_of_graduation')";
    return mysqli_query($connect, $query);
}

// Function to add a faculty
function addFaculty($connect, $fac_id, $fac_name, $fac_DOJ, $qualification, $department) {
    $query = "INSERT INTO faculty_tab (Fac_id, Fac_name, Fac_DOJ, qualification, department) VALUES ('$fac_id', '$fac_name', '$fac_DOJ', '$qualification', '$department')";
    return mysqli_query($connect, $query);
}





// Handle add student form submission
if (isset($_POST['add_student'])) {
    $stu_id = $_POST['stu_id'];
    $stu_name = $_POST['stu_name'];
    $stu_major = $_POST['stu_major'];
    $stu_year_of_enrollment = $_POST['stu_year_of_enrollment'];
    $cgpa = $_POST['cgpa'];
    $year_of_graduation = $_POST['year_of_graduation'];

    // Call function to add student 
    addStudent($connect, $stu_id, $stu_name, $stu_major, $stu_year_of_enrollment, $cgpa, $year_of_graduation);

    // Go back
    header("Location: index.php");
    exit();
}

// same thing, but now faculty


// Handle add faculty form submission
if (isset($_POST['add_faculty'])) {
    $fac_id = $_POST['fac_id'];
    $fac_name = $_POST['fac_name'];
    $fac_DOJ = $_POST['fac_DOJ'];
    $qualification = $_POST['qualification'];
    $department = $_POST['department'];

    // Call function to add faculty 
    addFaculty($connect, $fac_id, $fac_name, $fac_DOJ, $qualification, $department);

    // Go back
   header("Location: index.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>



