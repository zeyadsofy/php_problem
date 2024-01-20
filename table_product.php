<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table border=2 class="table table-primary">
            <tbody>
                <?php
                for($i=1;$i<=6;$i++){
                    echo "<tr>";
                    for($n=1;$n<6;$n++){
                        echo "<td>";
                        echo "$i * $n =" . $i*$n;
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                 ?>
            </tbody>
        </table>
    
</body>
</html>