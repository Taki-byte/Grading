<?php
include "../db.php";

$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST["student_id"];
    $student_name = $_POST["student_name"];
    $task_name = $_POST["task_name"];
    $score = $_POST["score"];
    $week = $_POST["week"];
    $term = $_POST["term"];
    $date = date("Y-m-d");

    $sql = "INSERT INTO grades (student_id, student_name, task_name, score, week, term, date)
            VALUES ('$student_id', '$student_name', '$task_name', $score, '$week', '$term', '$date')";
    if ($conn->query($sql)) {
        $success_message = "Grade submitted successfully!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student grading system</title>
    <style>
        .title{
    background-color: #007bff;
    width: 100%;
    font-size: 40px;
    height: 100px;
    position: fixed;
    margin-top: -100px;
    align-items: center;
    display: flex;
    padding-left: 20px;
        }

        .sidebar {
    width: 200px;
    background-color: #333;
    height: 100vh;
    position: fixed;
    padding-top: 20px;
    color: white;
        }

       .sidebar h2 {
    text-align: center;
    color: #fff;
    margin-bottom: 20px;
        }

       .sidebar a {
    display: block;
    color: white;
    padding: 22px 25px;
    text-decoration: none;
    transition: background 0.3s;
        }

      .sidebar a:hover {
    background-color: #575757;
        }

       .main-content {
    margin-top: 100px;
    margin-left: 250px;
    padding: 20px;
    flex-grow: 1;
        }

        .box {
    width: 99%;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    position: center;
        }

       .box-header {
    background-color: #007bff;
    color: white;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
        }

        .box-content {
    background-color: white;
    padding: 20px;
    font-size:15px;
        }

    </style>
</head>
<body>
    <h1 class="title">Student Grading System</h1>

    <div class="sidebar">
    <a href="/grading-system/teacher/dashboard.php">Dashboard</a>
    <a href="/grading-system/teacher/input.php">Input Grade</a>
    <a href="/grading-system/teacher/view.php">View Grade</a>
    <a href="/grading-system/teacher/section.php">Section</a>
    <a href="/grading-system/teacher/announcement.php">Announcement</a>
    </div>

<div class="main-content">
<div class="box">
<div class="box-header">
    <p>Grades</p>
    </div>
    <div class="box-content">
<form method="POST">
    <a>Student ID:</a>&nbsp;
    <input name="student_id" required><br><br>
    <a>Name:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    <input name="student_name"  required><br><br>
    <a>Task name:</a>
    <input name="task_name" required><br><br>
    <a>Score:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="number" name="score" required><br><br>
    <select name="week">
        <?php for ($i = 1; $i <= 19; $i++) echo "<option>Week $i</option>"; ?>
    </select><br><br>
    <select name="term">
        <option>Prelim</option>
        <option>Midterm</option>
        <option>Finals</option>
    </select><br><br>
    <button type="submit">Submit</button>
</form>
<?php if (!empty($success_message)) : ?>
        <p><?= htmlspecialchars($success_message) ?></p>
    <?php endif; ?>
    </div>

    
</div>
</body>
</html>