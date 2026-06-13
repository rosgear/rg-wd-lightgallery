<?php
/**
 * Этот файл является частью виджета веб-приложения RosGear.
 * 
 * Файл конфигурации установки виджета.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'use'         => FRONTEND,
    'id'          => 'rg.wd.lightgallery',
    'category'    => 'gallery',
    'name'        => 'LightGallery',
    'description' => 'Gallery widget',
    'namespace'   => 'Rg\Widget\LightGallery',
    'path'        => '/rg/rg.wd.lightgallery',
    'shortcodes'  => ['lightgallery'],
    'editor'      => [
        'shortcodes' => [
            'lightgallery' => [
                'name'     => 'lightgallery',
                'text'     => 'LightGallery',
                'settings' => 'Settings\ShortcodeSettings',
                'icon'     => '/images/icon_shortcode.svg'
            ]
        ]
    ],
    'locales'     => ['ru_RU', 'en_GB'],
    'events'      => [],
    'required'    => [
        ['php', 'version' => '8.2'],
        ['app', 'code' => 'RG Workspace'],
        ['app', 'code' => 'RG CMS'],
        ['app', 'code' => 'RG CRM']
    ]
];
