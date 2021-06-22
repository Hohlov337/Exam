<?php
include '../src/Store.php';

use  \PHPUnit\Framework\TestCase;

class StoreTest extends TestCase
{

    public function testTypeCounter()
    {
        $toys = array(
            new Toy('Кубик-Рубіка', 'Головоломки', '6'),
            new Toy('Барабан', 'Музична', '3'),
            new Toy('Гітара', 'Музична', '5'),
        );

        $store = new Store;
        $result = $store->typeCounter($toys, 'Музична');
        $this->assertEquals(3, $result);
    }

    /**
     * @dataProvider ageDataProvider
     * @param $actual
     * @param $expected
     */

    public function testAgeRateCounter($toys,$age, $expected)
    {
        $result = (new Store)->ageRateCounter($toys,$age);
        $this->assertEquals($expected, $result);
    }

    public function ageDataProvider()
    {
        return array(
            array(
                array(
                    new Toy('Кубик-Рубіка', 'Головоломки', '6'),
                    new Toy('Барабан', 'Музична', '3'),
                    new Toy('Гітара', 'Музична', '5'),
                ), '5', 1),
        );
    }
}