<?php
/** @var \IngenicoClient\MailTemplate $view */
/** @var $shop_name */
/** @var $shop_logo */
/** @var $shop_url */
/** @var $customer_name */
/** @var $order_reference */
?>

<?php echo $view->__('admin_refund_failed.hello', [], 'email'); ?>,
<?php echo $view->__('admin_refund_failed.text1', ['%order%' => $order_reference], 'email'); ?>
<?php echo $view->__('admin_refund_failed.text2', [], 'email'); ?>
<?php echo $view->__('admin_refund_failed.text3', [], 'email'); ?>
<?php echo $view->__('admin_refund_failed.regards', [], 'email'); ?>,
<?php echo $view->__('admin_refund_failed.team', [], 'email'); ?>
