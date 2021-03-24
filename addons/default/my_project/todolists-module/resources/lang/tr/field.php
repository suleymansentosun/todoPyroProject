<?php

return [
    'name' => [
        'name' => 'İsim',
        'label' => 'İsminiz',
        'instructions' => 'Lütfen kategorinin adını giriniz',
        'warning' => 'Bu alanı bir kategori adıyla doldurmalısınız'
    ],
    'description' => [
        'name' => 'Açıklama',
        'label' => 'Açıklama',
        'instructions' => [
            'todolists' => 'Lütfen işinize ilişkin detayları paylaşınız',
            'categories' => 'Lütfen kategorinin hangi işleri içerdiğine dair bilgi veriniz'
        ],
        'warning' => [
            'todolists' => 'Tüm işlerin bir açıklaması olmalıdır',
            'categories' => 'Tüm kategorilerin detaylı bir açıklaması olmalıdır'
        ],
    ],
    'title' => [
        'name' => 'Başlık',
        'label' => 'Başlık',
        'instructions' => 'Lütfen işinize ilişkin kısa bir başlık giriniz',
        'warning' => 'Tüm işlerin bir başlığı olmalıdır'
    ],
    'deadline' => [
        'name' => 'Son Tarih',
        'label' => 'Son Tarih',
        'instructions' => 'Lütfen işiniz için bir son tarih belirleyiniz',
        'warning' => 'Tüm işlerin bir son tarihi olmalıdır'
    ],
    'categories' => [
        'name' => 'Kategoriler',
        'label' => 'Kategoriler',
        'instructions' => 'Lütfen işiniz için bir veya daha fazla kategori seçiniz',
        'warning' => 'Tüm işlerin en az bir kategorisi olmalıdır'
    ],
    'slug' => [
        'name' => 'Slug'
    ],
    'users' => [
        'name' => 'Kullanıcı',
        'label' => 'Kullanıcı',
    ],
];
