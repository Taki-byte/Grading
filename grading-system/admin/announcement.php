<!DOCTYPE html>
<html>
<head>
    <title>Student Grading System - Announcement</title>
    <style>
        .title {
            background-color: #007bff;
            width: 100%;
            font-size: 40px;
            height: 100px;
            position: fixed;
            margin-top: -100px;
            align-items: center;
            display: flex;
            padding-left: 20px;
            color: white;
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

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .announcement-preview {
            margin-top: 30px;
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
        }

        .announcement-preview h3 {
            color: #007bff;
        }
    </style>
</head>
<body>

<?php
$postedTitle = '';
$postedMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $postedTitle = htmlspecialchars($_POST["title"]);
    $postedMessage = htmlspecialchars($_POST["message"]);
}
?>

<h1 class="title">Student Grading System</h1>
<div class="sidebar">
    <a href="/grading-system/admin/admin.php">Users</a>
    <a href="/grading-system/admin/announcement.php">Announcement</a>
    <a href="/grading-system/admin/view.php">View Grade</a>
</div>

<div class="main-content">
    <div class="box">
        <div class="box-header">Post Announcement</div>
        <div class="box-content">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Post</button>
            </form>
        </div>
    </div>

    <?php if ($postedTitle && $postedMessage): ?>
    <div class="box announcement-preview">
        <h3><?= $postedTitle ?></h3>
        <p><?= nl2br($postedMessage) ?></p>
    </div>
    <?php endif; ?>
</div>

</body>
</html>
