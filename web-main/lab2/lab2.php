<?php
//1
$very_bad_unclear_name = "15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and three tomato sauces!";
echo "\nYour order is:  $very_bad_unclear_name.<br/>";

//2
$a = 4;
$b = 13.3;
$last_month = 1187.23;
$this_month = 1089.98;
echo "first = $a <br/>";
echo "\n";
echo "second = $b <br/>";
echo 16-4,"<br/>";
echo "В прошлом месяце я потратила на ", ($last_month-$this_month), " больше, чем в этом.<br/>";

//11
$num_languages = 4;
$months = 11;
$days =  $months * 16;
$days_per_language = $days/$num_languages;
echo "$days_per_language <br/> ";

//12
echo 8**2, "<br/> ";

//13
$my_num = 24;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "$answer <br/> ";

//14
$a=10;
$b=3;
echo $a%$b ,"<br/> ";
if( $a % $b == 0) {
    echo "делится", $a / $b, "<br/>";
} else {
    echo "делится с остатком ", $a % $b, "<br/>";
}
$st = pow(2, 10);
echo "2^10 = ", $st, "<br/>";
echo "square root of 245 = ", sqrt(245), "<br/>";

$arr = Array(4,2,5,19,13,0,10);
$res = 0;
foreach ($arr as $n) {
    $res += $n**2;
}
echo "square root of res = ", sqrt($res), "<br/>";
echo "square root of 379 = ", round(sqrt(379), 0), ", ",
round(sqrt(379), 1), ", ", round(sqrt(379), 2), "<br/>";
echo "square root of 587 = ", ceil(sqrt(587)), ", ",
floor(sqrt(379)), "<br/>";
$mas = Array('floor' => floor(sqrt(379)), 'ceil' =>ceil(sqrt(587)));

echo "max = ", max(4,-2,5,19,-130,0,10), ", min = ", min(4,-2,5,19,-130,0,10), "<br/>";

echo "Случайное число от 1 до 100: ", rand(1,100), "<br/>";
$arr = range(1,10);
for ($n=0; $n<10; $n++) {
    $arr[$n] = rand(1, 100);
    echo $arr[$n], " ";
}  echo "<br/>";

$a = rand(-50,50);
$b = rand(-50,50);
echo "|($a) - ($b)| = ", abs($a-$b), "<br/>";
$arr = Array(1,2,-1,-2,3,-3);
for($n=0; $n < sizeof($arr); $n++) {
    if ($n == sizeof($arr) - 1) {
        echo abs($arr[$n]), "<br/>";
    }
    else {
        echo abs($arr[$n]), ", ";
    }
}

$var = 6;
$arr = Array(1);
echo 1, " ";
for($n=2; $n <= floor(sqrt($var)); $n++) {
    if($var % $n == 0) {
        array_push($arr, $n);
        echo $arr[sizeof($arr) - 1], " ";
        array_push($arr, $var / $n);
        echo $arr[sizeof($arr) - 1], " ";
    }
}
array_push($arr, $var);
echo $var, "<br/>";

$arr = Array(1,2,3,4,5,6,7,8,9,10);
$result = $arr[0];
for($n=1; $n < 10; $n++) {
    $result += $arr[$n];
    if( $result > 10) {
        echo "Нужно сложить ", $n+1, " элементов <br/>";
        break;
    }
}

//15
function printStringReturnNumber(){
    echo "Hello world<br/>";
    return 1;
}
$my_num = printStringReturnNumber();
echo "my_num = ", $my_num, "<br/>";

//16

function increaseEnthusiasm($str){
    return ($str."!");
}
echo increaseEnthusiasm("Hello world"), "<br/>";
function repeatThreeTimes($str){
    return ($str.$str.$str);
}
echo repeatThreeTimes(" today is friday,"), "<br/>";
echo increaseEnthusiasm(repeatThreeTimes(" >today is friday>")), "<br/>";

function cut($str, $num, $default=10){
    return substr($str, 0, $num);
}

function print_arr($arr, $i){
    if($i < sizeof($arr)) {
        echo $arr[$i], " ";
        print_arr($arr, $i+1);
    }
    if($i == 0) {
        echo "<br/>";
    }
    return 0;
}
$arr = range(-5,5);
print_arr($arr, 0);

function add($var){
    if ($var < 10) {
        return $var;
    }
    while ($var > 9) {
        $tmp = $var;
        $var = 0;
        while ($tmp != 0) {
            $var += $tmp % 10;
            $tmp = (int)($tmp / 10);
        }
    }
    return $var;
}

$res = add(861);
echo $res, "<br/>";

//17

$arr = Array("x");
echo $arr[0], " ";
for($n = 1; $n < 5; $n++) {
    $s = str_repeat("x", $n+1);
    array_push($arr, $s);
    echo $arr[$n], " ";
}   echo "<br/>";

function arrayFill($val, $len){
    if($len > 0) {
        $arr = Array($val);
        for($n = 1; $n < $len; $n++)
        {
            array_push($arr, $val);
        }
        return $arr;
    }
}
$arr = arrayFill('x', 5);
for($n = 0; $n < 5; $n++) {
    echo $arr[$n], " ";
} echo "<br/>";

$arr = Array(array(1,2,3),
    array(4,5),
    array(6),
);
echo (array_sum($arr[0]) + array_sum($arr[1]) + array_sum($arr[2])), "<br/>";

$arr = array();
$i = 1;
for($n = 0; $n < 3; $n++) {
    array_push($arr, array());
    for($j = 0; $j < 3; $j++) {
        array_push($arr[$n], $i);
        $i++;
        echo $arr[$n][$j], " ";
    }
} echo "<br/>";

$arr = array(2,5,3,9);
$result = $arr[0]*$arr[1] + $arr[2]*$arr[3];
echo "result = ", $result, "<br/>";

$user = array('name'=>'Александр', 'surname' => 'Пушкин', 'patronymic' => 'Сергеевич');
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'], "<br/>";

$date = array('year' => 2023, 'month' => 03, 'day' => 10);
echo $date['year'], ".", $date['month'], ".", $date['day'], "<br/>";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "Длина -", sizeof($arr), "<br/>";
echo "Последний элемент - ", $arr[sizeof($arr)-1], ", предпоследний - ", $arr[sizeof($arr)-2], "<br/>";

//18

function Ten($a, $b){
    return (($a + $b) > 10);
}
$res = Ten(2, 11);
echo $res ? "true" : "false" , "<br/>";

function Equality($a, $b){
    return ($a == $b) ;
}
$res = Equality(1, 0);
echo $res ? 'true' : 'false', "<br/>";

$test = 0;
echo (($test == 0) ? 'Верно' : ''), "<br/>";

$age = 60;
if($age < 10 || $age > 99) {
    echo "Число меньше 10 или больше 99";
} else {
    echo ($age%10+(int)($age/10) <= 9) ? "Cумма цифр однозначна" : "Cумма цифр двузначна" , "<br/>";
}

$arr = range(1,3);
function Check($arr){
    return (sizeof($arr)==3);
}
echo (check($arr) == 1) ? array_sum($arr) : 'В массиве не три элемента';
echo "<br/>";

//19

for($n = 1; $n <= 20; $n++) {
    for($i = 0; $i < $n; $i++) {
        echo "x";
    }
    echo "<br/>";
}

//20

$arr = range(1,5);
echo "Cреднее арифметическое ", (array_sum($arr) / sizeof($arr)), "<br/>";
echo "Cумма чисел от 1 до 100 = ", (1+100)*100/2, "<br/>";
$arr = array(144, 64, 36, 100);
$arr = array_map("sqrt", $arr);
for($n=0; $n < sizeof($arr); $n++) {
    echo $arr[$n], " ";
}
echo "<br/>";

$keys = range('a', 'z');
$values = range(1,26);
$arr = array_combine($keys, $values);
foreach($keys as $n)
{
    echo "arr[$n] = ", $arr[$n], ", ";
}
echo "<br/>";

$str = '1234567890';
$arr = str_split($str, 2);
$res = array_sum($arr);
echo $res, "<br/>";