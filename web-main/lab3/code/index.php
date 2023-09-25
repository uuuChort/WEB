<?php
function path(){
    $dir = 'categories/';
    $cateroty_mas = scandir($dir);
    unset($cateroty_mas[0]);
    unset($cateroty_mas[1]);
    return $cateroty_mas;
}
function fullpath()
{
    $category_mas = path();
    $mas = [];
    for ($i = 0; $i < sizeof($category_mas); $i++){
        $mas[$i] = [];
    }
    $count = 0;
    for ($i = 0; $i < sizeof($category_mas); $i++) {
        $dir = "categories/{$category_mas[$i+2]}";
        $path_to_txt = scandir($dir);
        unset($path_to_txt[0]);
        unset($path_to_txt[1]);
        for ($q = 0; $q < sizeof($path_to_txt); $q++) {
            $mas[$i+2][$category_mas[$i+2]][] = $path_to_txt[$q+2];
            $count +=1 ;
        }
    }
    var_dump($mas);
    return [$mas, $count];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
2.a
<form action="lab3_2a.php" method="post">
    <textarea rows="3" name="Our_text"></textarea>
    <input type="submit" value="Save" class="my_button">
    <br>
</form>
2.b
<form action="lab3_2b.php" method="post">
    <label>Имя: <input type="text" name="Name"></label>
    <label>Фамилия: <input type="text" name="Surname"></label>
    <label>Возраст: <input name="Age"></label>
    <button class="my_button">Save</button><br>
    <a href="index3_2b.php">Go here</a>
    <br>
</form>
2.c
<form action="lab3_2c.php" method="post">
    <label>Имя: <input type="text" name="Name"></label>
    <label>Зарплата: <input type="text" name="Your_Cash"></label>
    <label>Возраст: <input name="Age"></label>
    <label>Место работы: <input name="Work_Area"></label>
    <button class="my_button">Save</button><br>
    <a href="index3_2c.php">Go here</a>
    <br>
</form>
3.
    <div id="form">
        <form action="save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="category">Категория</label>
            <select name="category">
                <?php
                $cateroty_mas = path();
                foreach ($cateroty_mas as $value){
                    ?>
                    <option value=<?php echo $value;?>>
                       <?php echo $value; ?>
                    </option>
                    <?php
                }
                ?>
            </select>

            <label for="title">Название</label>
            <input type="text" name="title">

            <label for="description">Текст</label>
            <textarea rows="3" name="description"></textarea>

            <input type="submit" value="Save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
            <th>Категория</th>
            <th>Название</th>
            <th>Текст</th>
            </thead>
            <tbody>
            <?php
            $tmp = fullpath();
            $mas = $tmp[0];
            $count = $tmp[1];
            foreach ($mas as $j => $value){
                if($value != null){
                    foreach ($value as $category => $mean){
                        foreach ($mean as $q => $title){
                            $filepath = "categories/{$category}/{$title}";
                            $desc = file_get_contents($filepath);
                            $title = trim($title, ".txt");
                            ?>
                            <tr>
                                <td><?php echo $category; ?></td>
                                <td><?php echo $title; ?></td>
                                <td><?php echo $desc; ?></td>
                            </tr>
                            <?php
                        }
                    }
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>