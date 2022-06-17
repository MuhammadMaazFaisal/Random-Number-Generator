<?php 
if(isset($_POST['submit']) && $flag!=true){
  $number_of_dice = $_POST['dice_num'];
  $dice_type = $_POST['side'];
 ?>
 <div class="row mt-3">
 <table class="table table-hover text-center rounded bg-white" id="table">
    <thead class="thead-dark rounded">
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
