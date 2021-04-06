<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 06/04/2021
 * Time: 0:07
 */

namespace jcheverria\Prototype;


class SqlBookPrototype extends BookPrototype
{
    protected $category = 'Sql';

    public function __clone()
    {
    }
}