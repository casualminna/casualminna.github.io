<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="lotto.css">
  <title>Lotto</title>
</head>
<body>
<div class="background">
  <div class="wrapper">
    <div class="neon-wrapper">
        <span class="txt" >LOTTO MASIINA</span>
        <span class="gradient"></span>
        <span class="dodge"></span>
    </div>
  </div>
  <div class="wrapper2">
    <div class="neon-wrapper2">
        <span class="txt2" >VALITSE KUUSI NUMEROA</span>
        <span class="gradient2"></span>
    </div>
  </div>
  <div class="container">
    <form class="lottery" action="lotto.php" method="post">
      <?php
          $i = 1;
          while($i <= 30) {
              echo "<input type='checkbox' name='numbers[]' value=$i id='toggle$i'/><label for='toggle$i'>$i</label>";
              $i++;
          }
        ?>
      <br><input type="submit" name="submit" value="Submit"/>
    </form>
  </div>


  <?php
    $checked = $_POST['numbers'];
    $count = count($checked);
    $LotNumbers = range(1,30);

    if (isset($_POST['submit']) && $count != 6)  {
      echo "Ei oikea määrä valittuja numeroita. Valitse uudelleen"; }
    if (isset($_POST['submit']) && $count == 6) {
      echo "<h2>Valitut numerot: </h2>";
    foreach ($checked as $numbers){
      echo $numbers." ";
      }


      shuffle($LotNumbers);
      $RaffledNumbers=array($LotNumbers[0],$LotNumbers[1],$LotNumbers[2],$LotNumbers[3],$LotNumbers[4],$LotNumbers[5]);
      sort($RaffledNumbers);
      echo '<h2>Voittonumerot</h2>'.$RaffledNumbers[0].' '.$RaffledNumbers[1].' '.$RaffledNumbers[2].' '.$RaffledNumbers[3].' '.$RaffledNumbers[4].' '.$RaffledNumbers[5].'<br>';


      $a = 0;
      $correct = array();
      $correct[] = $a[1];

    if (count($a)){
      foreach ($checked as $numbers){
        if ($LotNumbers[0] == $numbers) {
          $a++;
        }
        if ($LotNumbers[1] == $numbers) {
          $a++;
        }
        if ($LotNumbers[2] == $numbers) {
          $a++;
        }
        if ($LotNumbers[3] == $numbers) {
          $a++;
        }
        if ($LotNumbers[4] == $numbers) {
          $a++;
        }
        if ($LotNumbers[5] == $numbers) {
          $a++;
        }

        }

    }   if ($a==0) {
        echo "<br>Ei yhtään oikein";
        }
        else { echo "<br>".$a++." oikein";}


}
    else {
      ;
    }


 ?>

</div>
</body>
</html>
