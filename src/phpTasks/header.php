<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $md; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>
        <?php if(isset($title) && !empty($title)) {
            echo $title;
        }
        else {
            echo "DEFAULT TITLE TAG";
        }
        ?>
    </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            margin: 0;
            padding: 0; 
            width: 100%;
            box-sizing: border-box;
        }
        header.container-fluid {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px; 
        }
        header nav {
            float: right;
            width: 50%;
        }
        header nav ul {
            list-style: none;
            display: flex;
            justify-content: space-between;
            padding-left: 0;
            margin: 0;  
        }
        header nav ul li {
            display: inline-block;
        }
        header nav ul li a {
            color: #f4f4f4;
            text-decoration: none;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        main {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header class="container-fluid">
        <div>
            <h1><?php echo $topic ?></h1>
            <p><?php echo $md ?></p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="ex1.php">Ex1</a></li>
                <li><a href="ex2.php">Ex2</a></li>
                <li><a href="ex3.php">Ex3</a></li>
                <li><a href="ex2.php">Ex4</a></li>
                <li><a href="ex2.php">Ex5</a></li>
                <li><a href="ex2.php">Ex6</a></li>
                <li><a href="ex2.php">Ex7</a></li>
            </ul>
        </nav>
    </header>