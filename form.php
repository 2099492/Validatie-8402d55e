<?php

  if (filter_has_var(INPUT_POST, 'data')) {
    if (filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
      echo "E-mail is valid";
    } else {
      echo "E-mail is NOT valid";
    }
  }
  ?>
<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
  <input type="text" name="data" placeholder="voer je e-mailadres in">
  <button type="submit">Submit</button>
</form>
