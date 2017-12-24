<?php
//$data = [];

//$data[0] = 10;
//$data[1] = 20;
//$data[2] = 30;
//
//$data['name'] = 'Rothee';
//$data['city'] = "Faridpur";
//$data['country'] = "Bangladesh";
//$data = [10, 20, 30 ,'Rothee' , 'Faridpur', 'Bangladesh'];

//$data = [
//    'name' => 'Rothee',
//    'city' => 'Faridpur',
//    'country' => 'Bangladesh',
//    'phone' => '01766839304',
//    'gender' => 'Female'
//];
//echo $data['name'];

//foreach ($data as $value) {
//    echo $value. '<br/>';
//}
//echo '<pre>';
//print_r($data);

//var_dump($data);




//$data = [];
//
//$data[0][0] = 10;
//$data[0][1] = 20;
//$data[0][2] = 30;
//
//$data[1][0] = 40;
//$data[1][1] = 50;
//$data[1][2] = 60;
//
//$data[2][0] = 70;
//$data[2][1] = 80;
//$data[2][2] = 90;
//
//$data[3][0] = 100;
//$data[3][1] = 110;
//$data[3][2] = 120;
//
//foreach ($data as $value) {
//
//
////    echo $value[0].' ', $value[1].' ', $value[2].'<br/>';
//    foreach ($value as $v_value){
//        echo $v_value.' ';
//    }
//    echo '<br/>';
//};
//function demo ($firstName, $lastname=null){
////  $firstName = "Rubaiya";
////  $lastname = "Rothee";
//  $fullName = $firstName.' '.$lastname;
////  echo $fullName;
//    return  $fullName;
//
//}
//echo '<br/>,,,,,,,,,,,,,</br/>';
//echo demo('Rahib', 'Raiba');
//echo '<br/>,,,,,,,,,,,,,</br/>';
//$res = demo('Tarif', 'Afif');
//echo 'Full name is :'.$res;
//echo '<br/>,,,,,,,,,,,,,</br/>';
//$res = demo('Zannat', 'Masabi');
//echo '<h1>'.$res.'</h1>';




class Demo {
   public $name='Rothee Rubaiya';
   public $city='Faridpur';

   function add() {
       echo 'In Add';
   }
   function hello() {
       echo 'In hello';
   }


}

$demo = new Demo;
echo $demo->name;
//echo $name;
//add();