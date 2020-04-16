<h1><?php echo $header; ?></h1>
<ul>
  <?php
    foreach($users as $user){
      echo "<li>$user</li>";
    }
   ?>
</ul>
