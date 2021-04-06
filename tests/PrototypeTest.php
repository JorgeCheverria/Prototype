<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 06/04/2021
 * Time: 0:10
 */

namespace jcheverria\Prototype\Tests;


use jcheverria\Prototype\PhpBookPrototype;
use jcheverria\Prototype\SqlBookPrototype;

class PrototypeTest extends TestCase
{
    /**
     * @covers
     * @test
     */
    public function testCanGetSqlBook()
    {
        $sqlPrototype = new SqlBookPrototype();
        $phpPrototype = new PhpBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $sqlPrototype;
            $book->setTitle('Sql Book No ' . $i);
            $this->assertInstanceOf(SqlBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $phpPrototype;
            $book->setTitle('Php Book No ' . $i);
            $this->assertInstanceOf(PhpBookPrototype::class, $book);
        }
    }

}