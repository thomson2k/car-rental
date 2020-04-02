<?php
 session_start();
 function isLoggedIn() {
   return !empty($_SESSION['login']);
}