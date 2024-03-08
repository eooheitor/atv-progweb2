<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo '<h3>$_REQUEST</h3>';
  print_r($_REQUEST);

  echo '<h3>$_SERVER</h3>';
  print_r($_SERVER);

  echo '<h3>apache_request_headers</h3>';
  $headers = apache_request_headers();
  foreach ($headers as $header => $value) {
    echo "$header: $value <br />\n";
  }
}
