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
    margin: 10px auto;
        }

    .users{
        color: #007bff;
    }



    </style>
</head>
<body>
    <h1 class="title">Student Grading System</h1>
    <div class="sidebar">
    <a href="/grading-system/admin/admin.php">Users</a>
    <a href="/grading-system/admin/announcement.php">Announcement</a>
    <a href="/grading-system/admin/view.php">View Grade</a>
    </div>
</div>
    </div>
<div class="main-content">
<h1>Users</h1>

<table>
    <tr>
        <th>
<div class="box">
    <a class ="users"href=""><div class="box-header">
        <h1>prof</h1>
    </div>
    <div class="box-content">
        <p>prof</p>
    </div>
</div></a>
    </th>
    <th>

    </th>
    </tr>
</table>
</div>

</div>
</body>
</html>