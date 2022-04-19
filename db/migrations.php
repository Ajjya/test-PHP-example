<?php
  require_once('connect.php');

  $sql = "CREATE TABLE if not EXISTS `testimonials`.`testimonials` (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  job VARCHAR(30) NOT NULL,
  message VARCHAR(50),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table TEstimonials created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
?>