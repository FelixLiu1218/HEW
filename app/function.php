<?php

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function get_csrf_token() {
  $token_legth = 16;//16*2=32byte
  $bytes = openssl_random_pseudo_bytes($token_legth);
  return bin2hex($bytes);
 }