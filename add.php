<?php
  require_once('db/connect.php');
?>
<?php 
  $is_error = false;
  $is_success = false;
  if($_POST){
    if(empty($_POST["firstName"]) ||
      empty($_POST["lastName"]) || 
      empty($_POST["job"]) ||
      empty($_POST["message"])
    ) {
      $is_error = true;
    }

    if(!$is_error){
      $sql = 'INSERT INTO `testimonials`.`testimonials` (`firstName`, `lastName`, `job`, `message`) VALUES (?,?,?,?)';
      $stmt = $conn->prepare($sql);
      $stmt->bind_param('ssss', $_POST["firstName"], $_POST["lastName"], $_POST["job"], $_POST["message"]);
      $result = $stmt->execute();
  
      $is_success = $result;
    }
  }
?>
<?php
  require_once('header.php');
?>
  <div class="rowright">
    <a href="/" >Testimonials list</a>
  </div>
  <h1>Add testimonial</h1>
  <?php if($is_success):?>
    <div class="alert alert-success" role="alert">
      Your testimonial was saved successfully
    </div>
  <?php endif;?>
  <?php if($is_error):?>
    <div class="alert alert-danger" role="alert">
      Some fields are empty
    </div>
  <?php endif;?>
  <form class="row g-3" id="form" method="POST" action="">
    <div class="col-md-6">
      <label for="firstName" class="form-label">First name*</label>
      <input type="text" class="form-control" name="firstName" id="firstName" required>
    </div>
    <div class="col-md-6">
      <label for="lastName" class="form-label">Last name* </label>
      <input type="text" class="form-control" name="lastName" id="lastName" required>
    </div>
    <div class="col-md-6">
      <label for="job" class="form-label">Job</label>
      <select class="form-select" name="job" aria-label="Default select example">
        <option selected value="">Open this select menu</option>
        <option value="manager">Manager</option>
        <option value="developer">Developer</option>
        <option value="qa">QA</option>
      </select>
    </div>
    <div class="col-md-12">
      <label for="message" class="form-label">Message*</label>
      <textarea class="form-control" id="message" name="message" required></textarea>
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
<?php
  require_once('footer.php');
?>
  