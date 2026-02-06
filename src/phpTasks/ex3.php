<?php 
$title = "Exercise 3";
$md = "Variable, Strings & Operators";
$topic = "Exercise 3";
include 'header.php'
?>

<form method="post" action="" style="width: 400px">
        <div class="mb-3">
            <label for="firstname" class="form-label">Firstname:</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter your firstname" required>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Lastname:</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter your lastname" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstname = htmlspecialchars(trim($_POST['firstname']));
        $lastname = htmlspecialchars(trim($_POST['lastname']));

        echo "<h3 class='mt-4'>Hello $firstname $lastname!</h3>";
    }
?>

<div class="container mt-3">            
  <table class="table table-bordered" style="width: 400px">
    <thead>
      <tr>
        <th>S. n.</th>
        <th>Name</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John</td>
        <td>5</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Alice</td>
        <td>4</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bob</td>
        <td>5</td>
      </tr>
    </tbody>
  </table>
</div>

<?php
$str1 = "Hello";
$str2 = "World";

$combined = $str1 . " " . $str2; 

echo "Combined string: " . $combined . "<br>";
echo "String's length: " . strlen($combined); 
?>
<br>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

$sum = $num1 + $num2 + $num3;

echo "298 + 234 + 46 = " . $sum;
?>
<br>
<?php
$user_agent = $_SERVER['HTTP_USER_AGENT'];

function getBrowser($user_agent){
    if(strpos($user_agent, 'Firefox') !== false)
        return 'Mozilla Firefox';
    elseif(strpos($user_agent, 'Chrome') !== false)
        return 'Google Chrome';
    elseif(strpos($user_agent, 'Safari') !== false)
        return 'Apple Safari';
    elseif(strpos($user_agent, 'Opera') !== false || strpos($user_agent, 'OPR') !== false)
        return 'Opera';
    elseif(strpos($user_agent, 'MSIE') !== false || strpos($user_agent, 'Trident') !== false)
        return 'Internet Explorer';
    else
        return 'Unknown';
}

echo "Your browser: " . getBrowser($user_agent);
?>

<?php include 'footer.php'; ?>