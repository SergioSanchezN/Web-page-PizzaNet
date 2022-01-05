<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de monedas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body class="bg-warning text-dark">
<div class="container bg-light mt-4">
  <div class="row">
    <div class="col-sm">
    <form method="post"> 
      <label>Elija el su moneda actual</label>
      <select name="de" class="form-select">
        <option value="USD">dolares</option>    
        <option value="EUR">euros</option>
        <option value="JPY">yen</option>
        <option value="GBP">libras esterlinas</option>
        <option value="COP">pesos colombinos</option>
        <option value="BTC">Bitcoin</option>
        <option value="ETH">Ether</option>
      </select>
      <br>
      <label>Elija el su moneda actual</label>
      <input type="text" name="valor" class="form-control">
      <br>
      <label>Elija la moneda a la que desea cambiar</label>
      <select name="a" class="form-select">
        <option value="USD">dolares</option>    
        <option value="EUR">euros</option>
        <option value="JPY">yen</option>
        <option value="GBP">libras esterlinas</option>
        <option value="COP">pesos colombinos</option>
        <option value="BTC">Bitcoin</option>
        <option value="ETH">Ether</option>
      </select>
      <br>
      <input type="submit" class="btn btn-danger">
    </form>
    <?php

  function convertCurrency($amount,$from_currency,$to_currency){
    $apikey = '7e44d1be0155f538cfbb';

    $from_Currency = urlencode($from_currency);
    $to_Currency = urlencode($to_currency);
    $query =  "{$from_Currency}_{$to_Currency}";

    // URL para solicitar los datos
    $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
    $obj = json_decode($json, true);

    $val = floatval($obj["$query"]);


    $total = $val * $amount;
    return number_format($total, 2, '.', '');
  }

  //uncomment to test

  if (isset($_POST['valor'],$_POST['de'],$_POST['a'])){
    echo $_POST['valor'];
    echo " ";
    echo $_POST['de'];
    echo " son ";
    echo convertCurrency($_POST['valor'], $_POST['de'], $_POST['a']);
    echo $_POST['a'];
  }
?>
    </div>
  </div>
</div>






</body>
</html>

