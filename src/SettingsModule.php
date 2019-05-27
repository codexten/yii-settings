<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 16/1/19
 * Time: 5:40 PM
 */

namespace codexten\yii\settings;

use codexten\yii\base\Module;
use codexten\yii\settings\components\Section;

class SettingsModule extends Module
{
    /**
     * @var Section[]
     */
    public $sections = [];

    public static function getMenuItems()
    {
        $items = [];
        foreach (self::getInstance()->sections as $section) {
            $items[] = [
                'label' => $section->label,
                'url' => ['/settings/index', 'key' => $section->key],
            ];
        }

        return $items;
    }
}