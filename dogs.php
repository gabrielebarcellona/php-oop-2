<?php
require_once __DIR__ . '/models/product.php';

class Dogs extends products
{
    public $cucce;
    public $gusto;

    function __construct($_name, $_images, $_price, $_gusto, $_cucce)
    {
        parent::__construct($_name, $_images, $_price, $_cucce);
        $this->cucce = $_cucce;
    }
    function setGusto($_gusto)
    {
        $this->gusto = $_gusto;
    }
}
