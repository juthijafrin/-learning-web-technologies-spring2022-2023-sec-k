<?php
if(isset($_COOKIE['flag']))
{ 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>
        Welcome Business Analyst 
    </h1>
    <a href="specs.php">Make specifications</a><br><br>
    <?php
    $localhost = '127.0.0.1';
    $username= 'root';
    $password = '';
    $dbname = 'data';
    
    function getconnection ()
    {
           global $localhost;
           global  $username;
           global $password ;
           global $dbname ;
           return mysqli_connect($localhost,$username,$password,$dbname);
    }
    $con = getconnection();
    $sql = "select * FROM data ORDER BY feature";
    $status = mysqli_query($con,$sql);
    //$result = mysqli_fetch_assoc($status) ;
    //print_r($result);
    //taking single row 
    while($row = mysqli_fetch_assoc($status)){
        echo "</br></br>";
        ?>
        <b><u> Feature Name </u>:</b>
        <?php

        echo $row['feature'];
        echo "</br>";
        echo "</br>";
       //}
    ?>
    <table border=1px>
    <tr>
            <th>
                Phase
            </th>
       
            <th>
                Specification
            </th>
        
            <th>
                Screen Defination 
            </th>
        
            <th>
                User Story 
            </th>
       
            <th>
                Acceptence Criteria
            </th>
      
            <th>
                Tags
            </th>
        </tr>
        <tr>
            <td>
                <?php
                echo $row['phase'];
    
                ?>
            </td>
            <td>
                <?php
                echo $row['specification'];
    
                ?>
            </td>
            <td>
                <?php
                echo $row['user_story'];
    
                ?>
            </td>
            <td>
                <?php
                echo $row['screen_defination'];
    
                ?>
            </td>
            <td>
                <?php
                echo $row['acceptance_criteria'];
    
                ?>
            </td>
           </td>
            <td>
                <?php
                echo $row['tags'];
                //echo "</br></br>";
    
    
                ?>
            </td>
        </tr>
    </table>
    <?php
    }
    ?>
    <?php
    echo "</br></br>";
    ?>
    <a href="logout.php">Logout</a>
    
</body>
</html>






    <?php

}
else {
    echo "invalid request";
}

?>