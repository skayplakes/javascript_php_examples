<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Calculator</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      button {
        height: 50px;
        width: 50px;
      }
      input {
        width: 315px;
        height: 50px;
      }
    </style>

  </head>
  <body>
    <h1>Calculator</h1>

      <div class="container">
        <div class="col-md-3 col-md-4 text-center">

          <div class="row" id="resultbox">
            <input type="text" name="result">
          </div>

            <div class="row">
              <button type="button" id="seven" class="col-sm-3">7</button>
              <button type="button" id="eight" class="col-sm-3">8</button>
              <button type="button" id="nine" class="col-sm-3">9</button>
              <button type="button" id="divide" class="col-sm-3">/</button>
              <button type="button" id="multiply" class="col-sm-3">*</button>
              <button type="button" id="clear" class="col-sm-3">CE</button>
            </div>

            <div class="row">
              <button type="button" id="four" class="col-sm-3">4</button>
              <button type="button" id="five" class="col-sm-3">5</button>
              <button type="button" id="six" class="col-sm-3">6</button>
              <button type="button" id="minus" class="col-sm-3">-</button>
              <button type="button" id="plus" class="col-sm-3">+</button>
              <button type="button" id="percent" class="col-sm-3">%</button>
            </div>

            <div class="row">
              <button type="button" id="zero" class="col-sm-3">0</button>
              <button type="button" id="one" class="col-sm-3">1</button>
              <button type="button" id="two" class="col-sm-3">2</button>
              <button type="button" id="three" class="col-sm-3">3</button>
              <button type="button" id="delete" class="col-sm-3">Del</button>
              <button type="button" id="equals" class="col-sm-3">=</button>
            </div>

        </div>

      </div>

      <script type="text/javascript">

      document.getElementsByTagName('button') = function(){
        
        
      }







      </script>
        

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>