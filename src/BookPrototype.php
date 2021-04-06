<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 06/04/2021
 * Time: 0:02
 */

namespace jcheverria\Prototype;


abstract class BookPrototype
{
    protected $title;
    protected $category;

    abstract public function __clone();

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

}