<?php

class products
{
    public $name;
    public $images;
    public $price;
    public $categories;

    public function __construct($_images, $_name, $_price, $_categories)
    {
        $this->setImages($_images);
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategories($_categories);
    }

    public function setName($_name)
    {
        $this->name = $_name;
    }
    public function setPrice($_price)
    {
        $this->price = $_price;
    }
    public function setImages($_images)
    {
        $this->images = $_images;
    }
    public function setCategories($_categories)
    {
        $this->categories = $_categories;
    }




    public function getName()
    {
        echo $this->name;
    }
    public function getPrice()
    {
        echo $this->price;
    }
    public function getImages()
    {
        echo $this->images;
    }
    public function getCategories()
    {
        echo $this->categories;
    }
};
