<div class="container card my-5 bg-light" id='card'>
    <div class="row justify-content-center m-5">
      <form method="post">
        <div class="form-group">
          <label for="Dice" class="text-muted">Enter the number of Dice to roll</label>
          <input type="dice_num" class="form-control" id="dice_num" name="dice_num" aria-describedby="emailHelp" placeholder="Enter number of dice to roll" value="<?php echo isset($_POST['dice_num']) ? htmlspecialchars($_POST['dice_num'], ENT_QUOTES) : ''; ?>">
        </div>
        <?php
        if (isset($_POST['submit'])) {
          $number_of_dice = $_POST['dice_num'];
          if ($number_of_dice > 100) {
            $flag = true;
            echo '<div class="alert alert-danger" role="alert">
            Value cannot be greater than 100
            </div>';
          } else {
            $flag = false;
          }
        }
        ?>
        <div class="form-group">
          <label for="exampleInputPassword1" class="text-muted">Select the side of dice</label>
          <select name="side">
            <?php $side = ''; ?>
            <option <?php if (isset($_POST['side']) and $_POST['side'] == '4') { ?>selected="true" <?php }; ?> value="4">D4</option>
            <option <?php if (isset($_POST['side']) and $_POST['side'] == '6') { ?>selected="true" <?php }; ?> value="6">D6</option>
            <option <?php if (isset($_POST['side']) and $_POST['side'] == '8') { ?>selected="true" <?php }; ?> value="8">D8</option>
            <option <?php if (isset($_POST['side']) and $_POST['side'] == '10') { ?>selected="true" <?php }; ?> value="10">D10</option>
            <option <?php if (isset($_POST['side']) and $_POST['side'] == '12') { ?>selected="true" <?php }; ?> value="12">D12</option>
            <option <?php if (isset($_POST['side']) and $_POST['side'] == '20') { ?>selected="true" <?php }; ?> value="20">D20</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary d-flex justify-content-end ml-5" name="submit">Submit</button>
      </form>
    </div>
  </div>