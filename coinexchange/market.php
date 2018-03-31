<?php

    include '../function/coinexchange.php';

    if (isset($_POST['go'])) {

      function redirect($location) {
          header("Location: " . $location);
          exit;
      }

      $market = htmlentities(strip_tags($_POST['market']));

      $market = "../".$market."/market.php";

      redirect($market);

    }

    $records = all();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Popular Cryptocurrencies</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <!-- <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script> -->
</head>

<body>
  <div id="banner">
      <p class=""> <img class="img img-responsive market-logo" src="../img/logo.png" alt=""></p>
  </div>

  <div class="row">
      <form class="" action="" method="post">

          <div class="col-md-offset-7 col-md-3">
            <div class="form-group">

              <select class="form-control" name="market" id="select">
                <option value="option" selected="" disabled="">Select an exchange to view market data</option>
                <option value="poloniex">Poloniex</option>
                <option value="coinexchange">Coinexchange</option>
                <option value="bittrex">Bittrex</option>
                <option value="kucoin">Kucoin</option>
                <option value="binance">Binance</option>
              </select>
           </div>
          </div>

          <div class="col-md-2">
            <div class="form-group">
                 <button type="submit" id="btn" class="btn btn-primary" name="go">View Market Data</button>
            </div>
          </div>

      </form>
  </div>

    <h2 id="heading">Coinexchange Cryptocurrencies Trade Guide</h2>
    <!-- <h5>Sorted by popularity, in descending order</h5> -->
    <div class="container">

      <div class="row">

          <div class="col-md-12">
             <h4>Top Gaining Cryptocurrencies</h4>
             <table class="table table-striped table-responsive">
                 <thead>
                     <tr>
                         <th>S/no</th>
                         <th>Coin</th>
                         <th>Currency Pair</th>
                         <th>Buy trade Vol.</th>
                         <th>Total buy trade vol.</th>
                         <th>% Change</th>
                         <!-- <th>Current Buy trade Vol.</th>
                         <th>Current Total buy trade volume</th>
                         <th>% of coin in total buy trade volume</th> -->

                     </tr>
                 </thead>
                 <tbody>

                   <?php

                    // Initialize counter
                    $counter = 1;

                    // Loop through records
                    foreach ($records as $key => $record) {

                 ?>
                            <tr>
                              <td><?=$counter;?></td>
                              <td><?=$record['coin'];?></td>
                              <td>BTC_<?=$record['currencypair'];?></td>
                              <td><?=$record['buy'];?></td>
                              <td><?=$record['buy'];?></td>
                              <td><?=$record['change'];?></td>
                              <!-- <td><?=$record['buy'];?></td>
                              <td><?=$record['buy'];?></td>
                              <td><?=$record['change'];?></td> -->

                            </tr>

                    <?php
                            $counter++;
                            }

                            // arsort($percentage_array);
                            //
                            // // Get the top coin as the most popular coin
                            // $most_popular_coin = array_keys($percentage_array)[0];
                            // $most_popular_coin_value = array_values($percentage_array)[0];
                            //
                            // $current_top_coin_details = GetCurrentTopCoinDetails($most_popular_coin);
                            //
                            // $word = $prev_top_coin_current_buy_trade < $prev_top_coin_buy_trade ? "an increase" : "a decrease";

                     ?>

               </tbody>
               </table>

          </div>

      </div>

    </div>

</body></html>
