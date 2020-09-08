<?php
// Get an instance of the WC_Order Object from the Order ID (if required)
$order = wc_get_order( $order_id );

// Get the order meta data in an unprotected array
$data  = $order->get_data(); // The Order data

$order_id        = $data['id'];
$order_parent_id = $data['parent_id'];

// Get the Customer ID (User ID)
$customer_id     = $data['customer_id'];

## BILLING INFORMATION:

$billing_email      = $data['billing']['email'];
$billing_phone      = $order_data['billing']['phone'];

$billing_first_name = $data['billing']['first_name'];
$billing_last_name  = $data['billing']['last_name'];
$billing_company    = $data['billing']['company'];
$billing_address_1  = $data['billing']['address_1'];
$billing_address_2  = $data['billing']['address_2'];
$billing_city       = $data['billing']['city'];
$billing_state      = $data['billing']['state'];
$billing_postcode   = $data['billing']['postcode'];
$billing_country    = $data['billing']['country'];

## SHIPPING INFORMATION:

$shipping_first_name = $data['shipping']['first_name'];
$shipping_last_name  = $data['shipping']['last_name'];
$shipping_company    = $data['shipping']['company'];
$shipping_address_1  = $data['shipping']['address_1'];
$shipping_address_2  = $data['shipping']['address_2'];
$shipping_city       = $data['shipping']['city'];
$shipping_state      = $data['shipping']['state'];
$shipping_postcode   = $data['shipping']['postcode'];
$shipping_country    = $data['shipping']['country'];
