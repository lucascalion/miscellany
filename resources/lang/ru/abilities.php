<?php

return [
    'abilities'     => [
        'title' => 'Потомки Способности :name',
    ],
    'create'        => [
        'success'   => 'Способность ":name" создана.',
        'title'     => 'Новая Способность',
    ],
    'destroy'       => [
        'success'   => 'Способность ":name" удалена.',
    ],
    'edit'          => [
        'success'   => 'Способность ":name" обновлена.',
        'title'     => 'Изменение Способности :name',
    ],
    'fields'        => [
        'abilities' => 'Способности',
        'ability'   => 'Родительская способность',
        'charges'   => 'Заряды',
        'name'      => 'Название',
        'type'      => 'Тип',
    ],
    'helpers'       => [
        'descendants'   => 'Этот список содержит всех потомков этой Способности и всех потомков ее потомков.',
        'nested'        => 'При свернутом виде Способности будут показаны свернутыми. Сначала будут видны только Способности без родительских Способностей. На Способности можно нажать, чтобы показать их потомков. Потомков тоже можно разворачивать, если у них есть потомки.',
    ],
    'index'         => [
        'add'           => 'Новая Способность',
        'description'   => 'Создавайте силы, заклинания, навыки и прочее для своих объектов.',
        'header'        => 'Способности :name',
        'title'         => 'Способности',
    ],
    'placeholders'  => [
        'charges'   => 'Число зарядов. Ссылайтесь на атрибуты с помощью {Level}*{CHA}',
        'name'      => 'Огненный шар, сигнал тревоги, ловкий удар',
        'type'      => 'Заклинание, навык, атака',
    ],
    'show'          => [
        'tabs'  => [
            'abilities' => 'Способности',
        ],
        'title' => 'Способность :name',
    ],
];
