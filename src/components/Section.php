<?php


namespace codexten\yii\settings\components;


use yii\base\Component;

/**
 *
 * @property mixed $label
 * @property mixed $key
 */
class Section extends Component
{
    public $modelClass;
    private $_label;
    private $_key;

    public function setLabel($label)
    {
        $this->_label = $label;
    }

    public function setKey($key)
    {
        $this->_key = $key;
    }

    public function getLabel()
    {
        return $this->_label;
    }

    public function getKey()
    {
        return $this->_key;
    }
}