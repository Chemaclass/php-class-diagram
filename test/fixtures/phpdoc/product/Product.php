<?php
namespace hoge\fuga\product;

use hoge\fuga\product\ {
    Name,
    Price,
    Tag,
};

class Product {
    /** @var Name ���O */
    private $name;
    
    /** @var Price ���O */
    private $price;
    
    /** @var Tag[] �t�^���ꂽ�^�O�ꗗ */
    private array $tags;
}
