<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles</title>
</head>
<body>
    <?php
    //EJERCICIO 1//
    $i=1;
    while ($i <= 100) {
        print "<p>$i</p>\n";
        $i++;
    }

    //EJERCICIO 2//
    $i=100;
    while ($i >=1) {
        print "<p>$i</p>\n";
        $i--;
    }

    //EJERCICIO 3//
    $i=2;
    do {
        print "<p>$i</p>\n";
        $i+=2;
    } while ($i <= 100);

    //EJERCICIO 4//
    $i=1;
    do {
       print "<p>$i</p>\n";
        $i+=2;
    } while ($i <= 100);

   //EJERCICIO 5//
   $i=1;
   $suma=0;
   for ($i=1; $i<=20; $i++) {
    print "<p>$i</p>\n";
    $suma+=$i;
   }

  //EJERCICIO 6//
  $i=2;
  $suma=0;
  for ($i=2; $i<=20; $i+=2) {
    print "<p>$i</p>\n";
    $suma+=$i;
  }

    ?>
</body>
</html>