<?php
  define('TOKEN', 'weixin');
  $token = $_GET['token'];
  if ($tokey == TOKEN) {
    echo 1;
  } else {
    echo 0;
  }

  exit(0);
