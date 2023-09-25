<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

function redirect(){
    header('Location: /');
    exit();
}
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'] )) {
    redirect();
}

$category = $_POST['category'];
$title =  $_POST['title'];
$desc = $_POST['description'];

$filePath = "categories/{$category}/{$title}.txt";

if (false === file_put_contents($filePath, $desc)){
    throw new Exception('Something went wrong');
}


$client = new Google_Client();
$client->setApplicationName('Google Sheets in PHP');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');

$service = new Google_Service_Sheets($client);
$data = [
    [
        $category, $title, $desc
    ]
];

$values = new Google_Service_Sheets_ValueRange([
    'values'=>$data
]);
$spreadsheetId = '1EaJJ0s0RU0FC61bFhSqmXSRPWWH8M323HEcQgd-o39Y';

$result = $service->spreadsheets_values->get($spreadsheetId, 'A:A');
$rows = $result->getValues();

$lI = $rows ? count($rows) + 1 : 1;

$range = 'A'.$lI.':C'.$lI;

$values = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);
$options = [
    'valueInputOption' => 'RAW'
];


$service->spreadsheets_values->update($spreadsheetId, $range, $values, $options);

$response = $service->spreadsheets_values->get($spreadsheetId, $range);

foreach ($response->getValues() as $item) {
    echo "<tr>";
    echo "<td>".$item[1]."</td>";
    echo "<td>".$item[0]."</td>";
    echo "<td>".$item[2]."</td>";
    echo "</tr>";
}
?>

