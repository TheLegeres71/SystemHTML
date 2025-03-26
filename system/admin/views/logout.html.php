<?php if (!defined('SYSHTML')) die('HTMLy'); ?>
<?php

unset($_SESSION[site_url()]);

header('location: login');

?>