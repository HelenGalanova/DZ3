<?php
error_reporting(-1);
mb_internal_encoding('utf-8');
$cart = array(
    "orderID" => 12345,
    "shopperName" => "Ivan Ivanov",
    "shopperEmail" => "ivanov@example.com",
    "contents" => array(
        array(
            "productID" => 34,
            "productName" => "Some stuff",
            "quantity" => 1
        ),
        array(
            "productID" => 56,
            "productName" => "Super some stuff etc",
            "quantity" => 3
        )
    ),
    "orderCompleted" => true
);
$json_text = json_encode($cart);
$fp = fopen('output.json', 'w');
file_put_contents('output.json', $json_text);
fclose($fp);

$changer=mt_rand(0,1); 
if($changer==1){
    $oldname='12345';
    $name='45345';
    $oldname = trim($oldname);               
    $newname = trim($name);                
    $file = file_get_contents('output.json');
    $taskList=json_decode($file,TRUE);
    foreach ( $taskList  as $key => $value){
        if ( $oldname == $value) {
            $taskList[$key]  = $newname; 
        }
    }
    file_put_contents('output2.json',json_encode($taskList)); 
    unset($taskList);  
}else
{
    echo "<br/>Ничего не изменилось</br>";
    $file = file_get_contents('output.json');
    $taskList=json_decode($file,TRUE);
    file_put_contents('output2.json',json_encode($taskList));
    unset($taskList);

}

$readFromFiles = file_get_contents('output2.json') or die('ошибка');
echo $readFromFiles;
$SourceFile= file_get_contents('output.json');
$SecondFile= file_get_contents('output2.json');
$taskListO=json_decode($SourceFile,TRUE);
$taskListS=json_decode($SecondFile,TRUE);
echo "<br>";
$result = array_diff($taskListO, $taskListS);
echo "<br><br>Разница между файлами<br>";
echo "------------------------------------<br>";
print_r($result);
?>