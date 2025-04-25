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
    width: 80%;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
    margin: 50px auto;
        }

       .box-header {
    background-color: #007bff;
    color: white;
    padding: 15px;
    font-size: 18px;
    font-weight: bold;
        }

        .box-content {
    background-color: white;
    padding: 20px;
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
</div>
    </div>
<div class="main-content">
<h1>Dashboard</h1>

<div class="box">
    <div class="box-header">
        Profile
    </div>
    <div class="box-content">
        <p> img</p><br>
    </div>
    <div class="box-content">
        <p> Surname:</p><br>
        <p> Name:</p><br>
        <p> Middle name:</p><br>
        <p> Role:</p><br>
    </div>
</div>


</div>
</body>
</html>