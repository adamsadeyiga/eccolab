<?php
/** @var $exception \Exception */
/** @var  $this \app\core\View */

$this->title = 'Error Page'
?>

<h3 style="text-align: center"><?php echo $exception->getCode() ?> - <?php echo $exception->getMessage() ?></h3>
