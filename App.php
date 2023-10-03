<?php
use classes\{  //grouped name space *
    Product,
    Request,
    Session
};

use validation\Validator;

require_once 'classes/Product.php';
require_once 'classes/helpers/Str.php';
require_once 'classes/helpers/Img.php';
require_once 'classes/Request.php';
require_once 'classes/Session.php';
require_once 'classes/validation/Validator.php';


$product= new Product;
$request= new Request;
$session=new Session;
$validation=new Validator;