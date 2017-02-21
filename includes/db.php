<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 19.02.17
 * Time: 16:17
 */


$connection = mysqli_connect(
  $config['db']['server'],
  $config['db']['username'],
  $config['db']['password'],
  $config['db']['name']
);

if (!$connection) {
  die('Ошибка подключения (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}

?>