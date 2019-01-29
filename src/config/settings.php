<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 16/1/19
 * Time: 5:34 PM
 */

return [
    'modules' => [
        'settings' => [
            'class' => \codexten\yii\settings\SettingsModule::class,
        ],
    ],
    'components' => [
        'settings' => [
            'class' => \entero\components\Settings::class,
        ],
    ],
];