<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Play:400,700&display=swap" rel="stylesheet">        
        <style><?php echo file_get_contents("total.css"); ?></style>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>Результаты</title>
    </head>
    <body>
        <?php
        $tot = ["Камиль...","Адыл...","Ринат..."];
        shuffle($tot);
        $dobavka = [0,2,4];
        shuffle($dobavka);
        $kazik = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60.61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100];
        shuffle($kazik);
        $r = $kazik[20];
        $t = $kazik[68];
        $y = $kazik[43];
        $q= $dobavka[0];
        $w= $dobavka[1];
        $e= $dobavka[2];
        $a = $tot[0];
        $b = $tot[1];
        $c = $tot[2];
        echo "<br><p align='center'; font-size:50pt; class='winners'>Победители:<br>Первым курит $a<br>Вторым курит $b<br>Третьим курит
        $c</p><br>Fast 420 game:<br>Камилю выпал $q<br>Адылу выпал $w<br>Ринату выпал $e<br>У кого больше тот и победил<br><hr>
        Казино:<br>Правила:Каждый загадывает число и сравнивает с получившимся.<br> Кто оказался ближе, тот выиграл и забирает ставки<br>Число Адыла $r<br>Число Рината $t<br>Число Камиля $y</p>"
        ?>
    </body>
</html>
