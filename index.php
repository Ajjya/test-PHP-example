<?php
  require_once('db/connect.php');
?>
<?php
  require_once('header.php');
?>
<?php
  $sql = "SELECT ID, firstname, lastname, job, `message` FROM `testimonials`.`testimonials`";
		 
  $result = $conn->query($sql);

?>
  <!-- Slider main container -->
<div class="mainbar">
  <div class="rowright">
    <a href="/add.php" class="btn btn-primary">Add testimonial</a>
  </div>
<?php if($result->num_rows > 0):?>
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <?php while($row = $result->fetch_assoc()):?>
      <!-- Slides -->
      <div class="swiper-slide">
        <div class="firstname">
          <?php echo $row['firstname'] . ' ' . $row['lastname']?>
        </div>
        <div class="job">
          <?php echo $row['job']?>
        </div>
        <div class="message">
          <?php echo $row['message']?>
        </div>
      </div>
      <?php endwhile;?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  </div>
<?php else: ?>
  <p>No record found.<br /></p>
<?php endif;?>

<?php
  mysqli_free_result($result);
  $conn->close();
?>
</div>

<?php
  require_once('footer.php');
?>
  
