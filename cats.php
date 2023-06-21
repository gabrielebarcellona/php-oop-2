<?php
require_once __DIR__ . '/models/product.php';

class Cats extends products
{
    public $giochi;
    public $gusto;

    function __construct($_name, $_images, $_price, $_gusto, $_giochi)
    {
        parent::__construct($_name, $_images, $_price, $_giochi);
        $this->giochi = $_giochi;
    }
    function setGusto($_gusto)
    {
        $this->gusto = $_gusto;
    }
}
