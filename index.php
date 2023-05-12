<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST PHP</title>
</head>
<body>

    <?php
    include "db.php";
    $query = "SELECT * FROM products";
    $db = $connection->query($query);

    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PRICE</th>
            <th>STOCK</th>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($db)){ ?>
        <tr>
            <td><?php echo $data["id"]; ?> </td>
            <td><?php echo $data["name"]; ?></td>
            <td><?php echo $data["price"]; ?></td>
            <td><?php echo $data["stock"]; ?></td>
        </tr>
       
    <?php } ?>
</table>
</body>
</html>