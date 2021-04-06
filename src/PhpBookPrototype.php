<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 06/04/2021
 * Time: 0:08
 */

namespace jcheverria\Prototype;


class PhpBookPrototype extends BookPrototype
{
    protected $category = 'Php';

    public function __clone()
    {
    }
}