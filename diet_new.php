<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" href="images/favico.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style_diet_new.css">
    <title>Diet</title>
  </head>
  <body>
<?php
include "header.php";
?>
    <div class="container-fluid">
        <div class="row">
            <div id="leftNav" class="col-2">
<form method="get" action="diet_new.php">
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day1"){echo "active";}?>" type="submit" name="day" id="day1" value="day1">Dzień 1</button><br>
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day2"){echo "active";}?>" type="submit" name="day" id="day2" value="day2">Dzień 2</button><br>
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day3"){echo "active";}?>" type="submit" name="day" id="day3" value="day3">Dzień 3</button><br>
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day4"){echo "active";}?>" type="submit" name="day" id="day4" value="day4">Dzień 4</button><br>
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day5"){echo "active";}?>" type="submit" name="day" id="day5" value="day5">Dzień 5</button><br>
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day6"){echo "active";}?>" type="submit" name="day" id="day6" value="day6">Dzień 6</button><br>
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day7"){echo "active";}?>" type="submit" name="day" id="day7" value="day7">Dzień 7</button><br>
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day8"){echo "active";}?>" type="submit" name="day" id="day8" value="day8">Dzień 8</button><br>
<button class="btn myBtn <?php if($_GET)if($_GET["day"]=="day9"){echo "active";}?>" type="submit" name="day" id="day9" value="day9">Dzień 9</button><br>
</form>
    </div>
    <div id="dayInfo" class="offset-1 col-9 row">
        <div class="col-12" id="dayHeader"><h5>Dzień 
            <?php
                if($_GET)switch($_GET["day"]){
                    case "day1": echo " 1"; break;
                    case "day2": echo " 2"; break;
                    case "day3": echo " 3"; break;
                    case "day4": echo " 4"; break;
                    case "day5": echo " 5"; break;
                    case "day6": echo " 6"; break;
                    case "day7": echo " 7"; break;
                    case "day8": echo " 8"; break;
                    case "day9": echo " 9"; break;
                }
            ?>
            
            </h5></div>
        <div id="breakfast" class="col-6">
            <h5>Śniadanie 7:00</h5>
<?php
if($_GET)switch($_GET["day"]){
    case "day1":
            echo "<p>512kcal Owsianka z kaszą jaglaną i owocami suszonymi
            <br>płatki owsiane 20g
            <br>kasza jaglana 30g
            <br>mleko sojowe 375ml
            <br>daktyle 10g
            <br>suszone śliwki 10g
            <br>suszona żurawina 12g
            </p>";
            break;
    case "day2":
            echo "<p>300kcal Twarożek z awokado i kiełkami rzodkiewki
            <br>120g półtłustego twarogu
            <br>awokado 50g
            <br>rzodkiewka 16g
            <br>jogurt naturalny 80g
            </p>";
            break;
    case "day3":
            echo "<p>476kcal Omlet
            <br>2 jajka 120g
            <br>szpinak 25g
            <br>pomidor 170g
            <br>cebula 50g
            <br>pieczywo pełnoziarniste 70g
            </p> ";
            break;
    case "day4":
            echo "<p>420kcal Musli z kefirem
            <br>kefir 250g
            <br>płatki owsiane 30g
            <br>płatki jęczmienne 10g
            <br>płatki żytnie 10g
            <br>maliny 120g
            <br>miód naturalny 100% 12g
            <br>migdały 12g
            <br>mięta 3g
            </p>  ";
            break;
    case "day5":
            echo "<p>375kcal serowa pasta z ziołami
            <br>chudy twaróg 100g
            <br>chleb razowy 90g
            <br>pomidor 200g
            <br>kolendra, koperek, bazylia
            <br>sok z cytryny
            </p> ";
            break;
    case "day6":
            echo "<p>Jajka pieczone ze szpinakiem i twarogiem
            <br>jajka 120g
            <br>twaróg 30g
            <br>szpinak 25g
            <br>czosnek 7g
            <br>olej 5g
            </p> ";
            break;
    case "day7":
            echo "<p>jaglanka z owocami
            <br>kasza jaglana 26g
            <br>mleko 220ml
            <br>miód 5g
            <br>jabłko 170g
            <br>rodzynki 15g
            <br>woda 220g
            <br>orzechy 12g
            </p> ";
            break;
    case "day8":
            echo "<p>Omlet ziołowy z pomidorami
            <br>Pomidor 160g
            <br>jajka 120g
            <br>oliwa 10g
            </p> ";
            break;
    case "day9":
            echo "<p>Jajecznica z pieczywem
            <br>jajka 120g
            <br>papryka 60g
            <br>pomidor 65g
            <br>szynka 15g
            <br>olej 5g
            <br>pieczywo 70g
            </p> ";
            break; 
}
?>
        </div>
        <div id="secBreakfast" class="col-6">
            <h5>Drugie śniadanie 11:00</h5>
<?php
if($_GET)switch($_GET["day"]){
    case "day1":
            echo "<p>182kcal Mus owocowy z siemiem lnianym
            <br>1 średni banan 120g
            <br>maliny 75g
            <br>jagody 45g
            <br>siemie lniane 5g
            </p>";
            break;
    case "day2":
            echo "<p>184kcal pasta z guacamole
            <br>awokado 70g
            <br>limonka 3g
            <br>czosnek 2.5g
            <br>pieczywo razowe 30g
            </p> ";
            break;
    case "day3":
            echo "<p>225kcal Mus owocowy
            <br>banan 120g
            <br>maliny 75g
            <br>truskawki 45g
            <br>jogurt naturalny 100g
            </p> ";
            break;
    case "day4":
            echo "<p>185kcal koktajl jagodowy
            <br>jagody 65g
            <br>naturalny jogurt 160g
            <br>miód 100% 12g
            <br>mix nasion 6g
            </p> ";
            break;
    case "day5":
            echo "<p>179kcal Koktajl z mango i banana 
            <br>banan 40g
            <br>mango 75g
            <br>jabłko 80g
            <br>jogurt naturalny 125g
            </p> ";
            break;
    case "day6":
            echo "<p>Koktaj cytrynowy z kiwi i pietruszką
            <br>pietruszka 2g
            <br>kiwi 330g
            <br>cytryna segmenty lub sok 80g
            <br>nasiona dyni 5g
            <br>siemie lniane 5g
            </p> ";
            break;
    case "day7":
            echo "<p>Musli z owocami i jogurtem
            <br>płatki owsiane 20g
            <br>jogurt 150g
            <br>kiwi 110g
            <br>ananas 30g
            </p> ";
            break;
    case "day8":
            echo "<p>Musli z jugurtem orzechami i malinami 
            <br>jogurt 150g
            <br>maliny 140g
            <br>płatki owsiane 20g
            <br>orzechy 6g
            </p> ";
            break;
    case "day9":
            echo "<p>Musli z truskawkami
            <br>płatki owsiane 30g
            <br>mleko 220ml
            <br>truskawki 80g
            </p> ";
            break; 
}
?>        
        </div>
        <div id="lunch" class="col-6">
            <h5>Obiad 14:00</h5>
<?php
if($_GET)switch($_GET["day"]){
    case "day1":
            echo "<p>624kcal Falafel
            <br>ciecieżyca 90g
            <br>mąka pełnoziarnista 15g
            <br>cebula 75g
            <br>czosnek 3g
            <br>kolendra 3g
            <br>sól morska 2g
            <br>pieprz czarny 2g
            <br><b>Sos czosnkowy</b>
            <br>jougurt naturalny 120g
            <br>czosnek 5g
            <br>mięta 3g
            <br><b>Surówka</b>
            <br>marchewka 120g
            <br>por 40g
            <br>oliwa z oliwek 5g
            </p> ";
            break;
    case "day2":
            echo "<p>Ciecieżyca ze szpinakiem i serem feta
            <br>surowa ciecieżyca 45g (ugotowana 100g)
            <br>szpinak 225g
            <br>ser feta 50g
            <br>cebula 50g
            <br>czosnek 5g
            <br>oliwa z oliwek 20g
            </p> ";
            break;
    case "day3":
            echo "<p>548kcal Leczo z cukinią
            <br>cukini 200g
            <br>pomidor 340g
            <br>papryka 240g
            <br>cebula 75g
            <br>czosnek 5g
            <br>oliwa z oliwek 20g
            <br>ryż brązowy 60g
            </p> ";
            break;
    case "day4":
            echo "<p>651kcal Cielencina z warzywami
            <br>cielęcina 150g
            <br>fasola szparagowa 200g
            <br>marchewka 60g
            <br>czosnek 2.5g
            <br>oliwa z oliwek 20g
            <br>balsamik ocet 3g
            <br>szczypiorek 4g
            <br>kasza jęczmienna 45g
            </p> ";
            break;
    case "day5":
            echo "<p>721kcal Warzywne kotleciki
            <br>cebula 50g
            <br>pietruszka
            <br>oliwa z oliwek 5g
            <br>czosnek 1g
            <br>kasza jęczmienna 30g
            <br>kasza jaglana 30g
            <br>jajka 25g
            <br>ser żółty 30g
            <br>kalafior romanesco 200g
            </p> ";
            break;
    case "day6":
            echo "<p>Łosoś pieczony z sosem pietruszkowym z surówką 
            <br>Łosoś 100g
            <br>kasza 39g
            <br>jogurt 50g
            <br>olej 5g
            <br>cytryny 5g
            <br>pietruszka 5g
            </p> ";
            break;
    case "day7":
            echo "<p>Zupa rybna
            <br>tłusta ryba 100g
            <br>cebula 110g
            <br>czosnek 3g
            <br>oliwa 10g 
            <br>pieczywo 70g
            <br>woda 220g
            </p> ";
            break;
    case "day8":
            echo "<p>Mięso mielone z rodzynkami i makaronem
            <br>mięso mielone chude 100g
            <br>makaron pełnoziarnisty 50g
            <br>rodzynki 15g
            <br>papryka 120g
            <br>cebula 30g
            <br>czosnek 7g
            <br>olej 5g
            <br>przyprawy
            </p> ";
            break;
    case "day9":
            echo "<p>makaron z kurczakiem i szpinakiem 
            <br>makaron pełnoziarnisty 70g
            <br>mięso pierś kurczaka 100g (pokrojone)
            <br>szpinak 70g
            <br>jogurt 70g
            <br>olej 10g
            <br>papryka 60g
            </p> ";
            break; 
}
?>        
        </div>
        <div id="diner" class="col-6">
            <h5>Kolacja 18:00</h5>
<?php
if($_GET)switch($_GET["day"]){
    case "day1":
            echo "<p>326kcal Fasola z serem feta i sezamem
            <br>200g fasoli szparagowej 
            <br>50g sera feta
            <br>czosnek 5g
            <br>sezam 10g
            <br>oliwa z oliwek 10g
            <br>sól pieprz
            </p> ";
            break;
    case "day2":
            echo "<p>245kcal Zupa z dyni
            <br>dynia 200g
            <br>marchewka 20g
            <br>cebula 10g
            <br>czosnek 2g
            <br>jogurt naturalny 10g
            <br>chleb graham 30g
            </p> ";
            break;
    case "day3":
            echo "<p>Sałatka grecka
            <br>feta 100g
            <br>pomidor 170g
            <br>ogórek 90g
            <br>cebula czerwona 25g
            <br>czarne oliwki 15g
            <br>pestki słonecznkia 10g
            <br>oliwa z oliwek 10g
            <br>pieczywo pełnoziarniste 35g
            </p>  ";
            break;
    case "day4":
            echo "<p>205kcal Zupa z czerwonej soczewicy
            <br>czerwonej soczewicy 20g
            <br>włoszczyzna 50g
            <br>pomidor 120g
            <br>cebula 25g
            <br>czosnek 2g
            <br>oliwa z oliwek 5g
            <br>woda 250ml
            <br>pietruszka 10g
            </p> ";
            break;
    case "day5":
            echo "<p>211kcal Sałatka z jajkami
            <br>rukola 100g
            <br>pomidor 120g
            <br>rzodkiewka 75g
            <br>jajka 90g
            <br>brokół 16g
            <br>nasiona słonecznika 25g
            <br>oliwa z oliwek 5g
            <br>jogurt naturalny 40g
            </p> ";
            break;
    case "day6":
            echo "<p>Sałatka kuskus z szynką i ogórkiem 
            <br>kuskus 52g
            <br>szynka 45g
            <br>ogórek 140g
            <br>czosnek 7g
            <br>olej 10g
            </p> ";
            break;
    case "day7":
            echo "<p>kuskus z avocado i pomidorem
            <br>kuskus 52g
            <br>awokado 60g
            <br>pomidor 130g
            <br>nasiona dyni 5g 
            <br>siemie lniane 5g
            </p> ";
            break;
    case "day8":
            echo "<p>Kanapka z pastą z sera i awokado
            <br>awokado 35g
            <br>twaróg 40g
            <br>pieczywo 70g
            <br>rzodkiewka 45g
            <br>pomidor 65g
            <br>pietruszka 2g
            </p> ";
            break;
    case "day9":
            echo "<p>Ogórki naziewane miodem i migdałami
            <br>ogórek zielony 340g
            <br>migdały prażone 30g
            <br>miód naturalny 40g
            </p> ";
            break; 
}
?>       
        </div>
    </div>
        </div>  
    </div>
<?php
include "footer.php";
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

