<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Random Number Generator Web App</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="bg-info">
    <div class="text-center mt-5 text-white">
        <h1>Random Number Generator</h1>
    </div>
  <div class="container card my-5 w-50 bg-light">
    <div class="row justify-content-center m-5">
<form method="post">
  <div class="form-group">
    <label for="Dice" class="text-muted">Enter the number of Dice to roll</label>
    <input type="dice_num" class="form-control" id="dice_num" name="dice_num" aria-describedby="emailHelp" placeholder="Enter number of dice to roll">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-muted">Select the side of dice</label>
    <select name="side">
      <option value="4">D4</option>
      <option value="6">D6</option>
      <option value="8">D8</option>
      <option value="10">D10</option>
      <option value="12">D12</option>
      <option value="20">D20</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary d-flex justify-content-end ml-5" name="submit">Submit</button>
</form>
</div>
<?php 
if(isset($_POST['submit'])){
  $number_of_dice = $_POST['dice_num'];
  $dice_type = $_POST['side'];
 ?>
 <div class="row mt-3">
 <table class="table">
    <thead>
      <tr>
        <th>Dice no.</th>
        <th>Output</th>
      </tr>
    </thead>
    <tbody>
      <?php
        for($i = 1; $i<=$number_of_dice;$i++){
          ?>
          <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo rand(1,$dice_type); ?></td>
        </tr>
        <?php }
      ?>
    </tbody>
 </table>
 </div>
</div>
 <?php 
}

 ?>

</body>
</html>