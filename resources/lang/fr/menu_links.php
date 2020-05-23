<?php

return [
    'create'        => [
        'description'   => 'Créer un lien de menu',
        'success'       => 'Lien de menu \':name\' créé.',
        'title'         => 'Nouveau Lien de menu',
    ],
    'destroy'       => [
        'success'   => 'Lien de menu \':name\' retiré.',
    ],
    'edit'          => [
        'description'   => 'Modification du lien de menu.',
        'success'       => 'Lien de menu \':name\' modifié.',
        'title'         => 'Lien de menu :name',
    ],
    'fields'        => [
        'entity'    => 'Entité',
        'filters'   => 'Filtres',
        'menu'      => 'Menu',
        'name'      => 'Nom',
        'position'  => 'Position',
        'tab'       => 'Onglet',
        'type'      => 'Entité Type',
    ],
    'helpers'       => [
        'entity'    => 'Mettre en place ce liens de menu pour aller directement sur une entité. Le champs :tab control quel onglet est ouvert. Le champs :menu control quel sous-menu est affiché.',
        'position'  => 'Ce champ control dans quel ordre les liens de menus apparaissent.',
        'type'      => 'Définir ce lien de menu pour aller directement sur une liste d\'entité. Pour filtrer les résultats, il faut copier l\'url de la page filtrée après le :? de l\'url dans le champs :filter.',
    ],
    'index'         => [
        'add'           => 'Nouveau lien de menu',
        'description'   => 'Gérer les liens de menu pour :name.',
        'header'        => 'Lien de menu pour :name',
        'title'         => 'Liens de menu',
    ],
    'placeholders'  => [
        'entity'    => 'Choix d\'une entité',
        'filters'   => 'location_id=15&type=city',
        'menu'      => 'Sous-page (dernière partie de l\'url)',
        'name'      => 'Nom du lien de menu',
        'tab'       => 'entry, relations, notes, map',
    ],
    'show'          => [
        'description'   => 'Détails d\'un lien de menu',
        'tabs'          => [
            'information'   => 'Information',
        ],
        'title'         => 'Lien de menu :name',
    ],
];
