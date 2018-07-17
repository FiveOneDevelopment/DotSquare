<?php

// dotSquare singleton
require(dirname(__FILE__) . '/lib/DotSquare.php');

// API operations
require(dirname(__FILE__) . '/lib/ApiOperations/ApiRequestor.php');

// DotSquare API Resources
require(dirname(__FILE__) . '/lib/Initialize.php');
require(dirname(__FILE__) . '/lib/Ecommerce.php');
require(dirname(__FILE__) . '/lib/Data.php');
require(dirname(__FILE__) . '/lib/Email.php');
require(dirname(__FILE__) . '/lib/Geo.php');
require(dirname(__FILE__) . '/lib/Partition.php');
require(dirname(__FILE__) . '/lib/Stripe.php');
require(dirname(__FILE__) . '/lib/Validation.php');

// Webhooks