<?php 
$title = "Exercise 1: Getting Started with PHP - Jekaterina";
$md = "Introduction to PHP";
$topic = "Exercise 1";
include 'header.php' 
?> 
        <?php
            $title = "PHP is interesting";
            $g1 = 5;
            $g2 = 4;
            $g3 = 5;
            echo"<h3>Hello world! My name is \"Kate\"</h3>";
            echo "<h4>$title</h4>"; 
        ?>
        <table border="1">
            <tr>
                <th>S. n.</th>
                <th>Name</th>
                <th>Grade</th>
            </tr>    
            <tr>
                <th>1</th>
                <th>John</th>
                <th><?php echo $g1 ?></th>
            </tr> 
            <tr>
                <th>2</th>
                <th>Alice</th>
                <th><?php echo $g2 ?></th>
            </tr>  
            <tr>
                <th>3</th>
                <th>Bob</th>
                <th><?php echo $g3 ?></th>
            </tr>  
        </table>    
            <img src="Screenshot 2026-02-02 150539.png">
<?php include 'footer.php'; ?>    