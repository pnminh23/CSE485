
<?php
    $arrs = ["PHP","HTML","CSS","JS"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tên khoá học</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($arrs as $i){
            ?>
            <tr>
                <td>
                    <?php echo $i;?>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>
    