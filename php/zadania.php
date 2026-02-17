<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo"<p>ZADANIE 1</p><br>";
     $liczba1=10;
     if($liczba1%2==0)
        {
            echo"Podana liczba ".$liczba1. " jest parzysta";
        }
  
    else if($liczba1%2!=0)
    {
        echo"Podana liczba ".$liczba1." nie jest parzysta";
    }

    else
        {
            echo"liczba nie istnieje";
        }

    echo"<br>";
    echo"<p>ZADANIE 2</p>";
    $liczba2=2;
         if($liczba1%$liczba2==0)
        {
            echo"Pierwsza liczba jest podzielna przez druga";
        }
    else
        {
            echo"Pierwsza liczba nie jest podzielna przez druga";
        }
    echo"<br>";
    echo"<p>ZADANIE 3</p>";
    $liczbaX=118;
         if($liczbaX>=1&&$liczbaX<=10)
        {
            echo"Liczba jest z przedzialu od 0 do 10 ";
        }
    else if($liczbaX>=17&&$liczbaX<=21)
        {
            echo"Liczba jest z przedzialu od 17 do 21";
        }
    else
        {
            echo"Liczba nie jest z podanych przedziałów";
        }
    echo"<br>";
    echo"<p>ZADANIE 4</p>";
$liczbaY=-10;
             if($liczbaY>0)
        {
            echo"Liczba jest wieksza od zera ";
        }
    else if($liczbaY<0)
        {
            echo"Liczba jest mniejsza od zera";
        }
    else
        {
            echo"Liczba jest rowna zeru";
        }
            echo"<br>";
    echo"<p>ZADANIE 5</p>";
$wiek=17;
             if($wiek<11)
        {
            echo"Z podanego wieku wynika, że jest to dziecko ";
        }
    else if($wiek>11&&$wiek<=17)
        {
            echo"Z podanego wieku wynika, że jest to nastolatek";
        }
    else
        {
            echo"Z podanego wieku wynika, że jest to osoba dorosła";
        }

                    echo"<br>";
    echo"<p>ZADANIE 6</p>";
$haslo="asd5363";
             if($haslo>5)
        {
            echo"Hasło jest bardzo słabe ";
        }
    else if($haslo<5&&$haslo>=8)
        {
            echo"Hasło jest słabe";
        }
    else if($haslo>=9&&$haslo<=11)
        {
            echo"Hasło jest silne";
        }
    else
        {
            echo"Hasło jest bardzo silne";
        }
    ?>
</body>
</html>