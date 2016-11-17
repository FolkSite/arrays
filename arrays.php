<?php
//1
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $value){
    echo $value . '<br>';};
//2
$sum2=0;
$arr2 = [1, 20, 15, 17, 24, 35];
foreach ($arr2 as $value2){
    $sum2 += $value2 ;};
echo 'сумма масива = ' . $sum2 . '<br>';

//3
$sum3=0;
$arr3 = [26, 17, 136, 12, 79, 15];
foreach ($arr3 as $value3){
    $sum3 += ($value3*$value3) ;};
echo  'сумма квадратов масива = ' . $sum3 . '<br>';

//4
$arr4 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr4 as $key => $value4){
    echo   $key  . '<br>' ;};
foreach ($arr4 as $key => $value4){
    echo   $value4 . '<br>'  ;};
//5
$arr5 = array('Коля'=>'200', 'Вася'=>'300','Петя'=>'400');
foreach($arr5 as $key => $value5){
    echo  $key . ' зарплата - ' . $value5 . '<br>';
};
//6

$arr6 = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$len= count($arr6);

foreach ($arr6 as $key => $value){
    $en[] = $key;
    $ru[] = $value;
};

print_r ( $en  );
echo    '<br>';
print_r ( $ru )  ;
echo    '<br>';
//7
$arr7 = [2, 5, 9, 15, 0, 4];
foreach ($arr7 as $key => $value){
    if ($value>3 && $value<10){
        echo $value . '<br>';
    };
};
//8
$arr8 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '';
foreach ($arr8 as $value){
    $str .= $value;
};
var_dump ($str );
echo    '<br>';
// 9
for ($i= 1 ; $i<101 ; $i++){
    echo $i . '<br>';
};
//10
for ($i= 11 ; $i<34 ; $i++){
    echo $i . '<br>';
}  ;
//11
for ($i= 2 ; $i<101 ; $i +=2){
    echo $i . '<br>';
};
//12
$n = 1000;
$num =0;
while( $n>50){
    $num++;
    $n /= 2;
};
echo $num.'<br>';
echo $n.'<br>';
//13
$i=1;
do {
    $j = 1;
    do {
        echo "$i*$j= " . ($j * $i) . "<br>";
        $j++;
    } while ($j<10);
    $i++;
} while ($i<10);
//14
$arr10 = [4, 2, 5, 19, 13, 0, 10];
foreach ($arr10 as $value){
    if ($value == 3 || $value == 4 || $value == 5){
        echo 'ecть';
        continue;
    };
};
echo "Нет" . '<br>';
//15
$arr10 = [4, 2, 5, 19, 13, 0, 10];
$count=0;
foreach ($arr10 as  $key => $value){
    $count++;
}
echo $count;
//16
$str = '';
$arr10 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr10 as $value  ){
    if ($value== 3 || $value== 6 || $value == 9){

        $str .= $value .'<br>' ;
    } else {
        $str .= $value  ;};
};
echo $str;
//17
$arr11 = [ 'січень' , 'лютий', 'березень', 'квитень', 'травень', 'червень', 'липень', 'серпень' ,'вересень', 'жовтень', 'листопад', 'грудень'];
$month= 11;
foreach($arr11 as $key => $value  ){
    if ($key == $month-1 ){
        echo '<b>' . $value . '</b>' . '<br>'  ;

    }else{
        echo $value  . '<br>' ;
    };
};
//18
$arr11 = [ 'Пн' , 'ВТ', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд', ];
foreach($arr11 as $key => $value  ){
    if ($key == 6 or $key == 5 ){
        echo '<b>' . $value . '</b>' . '<br>'  ;

    }else{
        echo $value  . '<br>' ;
    };
};
//19
$arr11 = [ 'Пн' , 'ВТ', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд', ];
$day=2;
foreach($arr11 as $key => $value  ){
    if ($key == $day-1 ){
        echo '<i>' . $value . '</i>' . '<br>'  ;

    }else{
        echo $value  . '<br>' ;
    };
}
//20
$i=0;
$str = '';
for ($i=1; $i<10;$i++){
    $str .= $i;
    echo $str .'<br>';
};
//21

$str = '';
for ($i=1; $i<21;$i++){

    $str .= 'x';

    echo $str .'<br>';
};
//22

$str = '';
for ($i=1; $i<10;$i++){

    $str .= 'xx';

    echo $str .'<br>';
};
$str = '';
while( $i<20){
    $i++;
    $str.='xx';
    echo $str .'<br>';
};

//23
$html='';
$sum =0;
$number=0;
$html .= '<form method="post"> <input type="text" name="number" value="">Введите число<Br>  <br>
		         <input type="submit" name="result" value="Вычислить"> 
         </form><br>'  ;
$number= $_POST["number"];


$count=strlen($number);
if ($_POST["result"]){

    for ($i=0;$i<$count;$i++){
        $sum += $number[$i];

    };
};

$html .= $sum	;
echo $html;
echo '<br>';

//24
$num=442158755745;
$a = substr_count($num,5);
echo $a . '<br>';
//25

for ($i = 0; $i < 10; $i++) {
    $arr25[$i]=rand(0,10);

};
print_r ($arr25);
 echo '<br>';
$max=max($arr25);
$min=min($arr25);
for ($i=1;$i<10;$i++){
    $min_i=array_search($min,$arr25);
    $max_i=array_search($max,$arr25);
}
$min_k=$min_i;
$max_k=$max_i;
$arr25[$min_k]=$max;
$arr25[$max_k]=$min;
print_r($arr25);
echo '<br>';
//27
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$colorsRand = array_rand($colors,1);
//$colorsTable =  $colors[$colorsRand] ;
//echo $colorsTable;
$row= rand(1,10);
$cols= rand(1,10);
$html="";
$html .= '<table border="1px">';
for ($i=0; $i<$row;$i++) {
    $html .= '<tr>';
    for ($j=0;$j<$cols;$j++){

        //$html .=
        for ($k=0;$k<$cols;$k++){
            $colorsRand = array_rand($colors,1);
            $colorsTable =  $colors[$colorsRand] ;
            //echo $colorsTable ;
        };
        $html .= '<td style=background-color:' . $colorsTable .'>';
        $html .= $colorsTable;
        $html .='</td>';};
};
$html .= '</tr>';

$html .= '</table>';

echo $html;
echo '<br>';

//28
$html="";
$html .= '<table border="1px"><thead><tr><th></th>';
for($i=1;$i<10;$i++){
    $html .='<th>' . $i .'</th>';
};
$html .= '</tr></thead><tbody>';
for ($j=1;$j<10;$j++ ){
    $html .='<tr><td>' . $j . '</td>';
    for ($k=1;$k<10;$k++ ){
        $html .='<td>' . $j*$k . '</td>';

    };
    $html .=' </tr>';
}
$html .=' </tbody></table>';
echo $html;
?>