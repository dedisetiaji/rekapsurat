<?php
if(isset($_SESSION['username']))
{
  include "home.php";
  if(isset($_GET['page']))
  {
    switch($_GET['page'])
    {
      case "form_masuk";
      include "form_masuk/index.php";
      break;
      case "form_keluar";
      include "form_keluar/index.php";
      break;
      case "rekap_masuk";
      include "rekap_masuk/index.php";
      break; 
      case "rekap_keluar";
      include "rekap_keluar/index.php";
      break;
    }
  }
}
else
{
  include "login.php";
}
// if (isset($_GET['page'])) {
//   $page = $_GET['page'];
//   switch ($page) {
//   }
// }
