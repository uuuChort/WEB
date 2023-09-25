<?php

if (isset($_POST))
{
    $email = $_POST['email'];
    $title = $_POST['title'];
    $descr = $_POST['description'];
    $category = $_POST['category'];

}

    $mysqli = new mysqli("db", "root", "helloword", "das");
    if(mysqli_connect_errno())
    {
        printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }

    $mysqli->query("INSERT INTO ad (email, title, descr, category) VALUES ('$email', '$title', '$descr', '$category')");
    if ($result = $mysqli->query('SELECT * from ad ORDER BY created DESC')) {
        //print("Email \n");

        while ($row = $result->fetch_assoc()) {
            ?>
            <tr><td><?php echo $row['category'];?></td>
                <td><?php echo $row['title'];?>
                </td><td><?php echo $row['descr'];?></td>
                <td><?php echo $row['email'];?></td></tr>
            <?php
        }

        $result->close();
    }
    $mysqli->close();

?>