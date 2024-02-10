<?php
include 'SaveEmp.php'
?>
<html>

<head></head>
<link rel="stylesheet" href="css/mystyle.css">

<body style="background-image: url('images/bg1.jpeg');">

    <div class="wrapper">
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <nav>
                <div class="logo">Sharks Incorporated</div>
                <label for="click" class="menu-btn">
                    <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li><a class="active" href="AddEmployee.php">Add Employee</a></li>
                </ul>
            </nav>
            <div class="input-container">
                <div class="container">
                    <label for="rcode">Rankcode</label>
                    <input type="text" name="rcode" value="<?php echo $rcode ?>">
                </div>
                <div class="container">
                    <label for="jrank">Job Rank</label>
                    <input type="text" name="jrank" value="<?php echo $jrank ?>">
                </div>
                <div class="container">
                    <label for="rate">Rate</label>
                    <input type="text" name="rate" value="<?php echo $rate ?>">
                </div>
                <div class="btn-container">
                    <input type="submit" id="submit" name="saverec" value="Save">
                    <input type="submit" id="submit" name="searchData" value="Seach">
                    <input type="submit" id="submit" name="" value="Close">
                    <input type="submit" id="submit" name="cls" value="Clear">
                </div>
            </div>
        </form>
        <?php
        echo $messAlert;
        ?>
    </div>
</body>

</html>