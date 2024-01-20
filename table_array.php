<?php
$Employees = array(
    array("id"=>"1","name"=> "kero"  ,"jop"=> "stu","detartment"=> "qqqqqqqq","salary"=> "1500"),
    array("id"=>"2","name"=> "ahmed" ,"jop"=> "doc","detartment"=> "tttttttt","salary"=> "2000"),
    array("id"=>"3","name"=> "mhamed","jop"=> "eng","detartment"=> "uuuuuuuu","salary"=> "2500"),
    array("id"=>"4","name"=> "mhamed","jop"=> "eng","detartment"=> "uuuuuuuu","salary"=> "2500"),
);

$key = array("id","name","job","detartment","salary");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div  class="table-responsive">
        <table border=2 class="table table-primary">
            <thead>
                <tr>
                <?php
                foreach($key as $keys){
                    echo "<td>". $keys   ."</td>";
                }
                ?>
                </tr>
            </thead>
            <tbody>
                <?php 
                for($i=0;$i<sizeof($Employees);$i++){
                    echo "<tr>";
                    foreach($Employees[$i] as $key => $value){
                        echo "<td>" . $value . "</td>";
                    }
                    echo "</tr>";

                }
                    
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>