<?php

include 'Toy.php';

class Store
{
    public function typeCounter($array, $type)
    {
        $count = 0;
        foreach ($array as $el) {
            if ($el->type == $type) {
                $count++;
            }
        }
        return $count;
    }

    public function ageRateCounter($array, $age)
    {
        $count = 0;
        foreach ($array as $el) {
            if ($el->age == $age) {
                $count++;
            }
        }
        return $count;
    }
}

$store = new Store();
$toys = array(
    new Toy('Кубик-Рубіка', 'Головоломки', '6'),
    new Toy('Барабан', 'Музична', '3'),
    new Toy('Гітара', 'Музична', '5'),
);
echo 'К-ть Іграшок за певним типом: ', $store->typeCounter($toys, 'Музична'), "\n";
echo 'К-ть Іграшок за віковою рекомендацією: ', $store->ageRateCounter($toys, '5'), "\n";
