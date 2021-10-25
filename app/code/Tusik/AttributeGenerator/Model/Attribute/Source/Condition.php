<?php


namespace Tusik\AttributeGenerator\Model\Attribute\Source;
use Magento\Eav\Model\Entity\Attribute\Source;

class Condition extends Source\AbstractSource {

    /**
     * @return array|array[]|null
     */
    public function getAllOptions() {
        if(!$this->_options) {
            $this->_options = [
                ['label' => __('Nowy'), 'value' => 'nowy'],
                ['label' => __('Powystawowy'), 'value' => 'powystawowy'],
                ['label' => __('Poleasingowy'), 'value' => 'poleasingowy'],
                ['label' => __('Używany'), 'value' => 'używany'],
                ['label' => __('Zwrócony'), 'value' => 'zwrócony'],

            ];
        }
        return $this->_options;
    }

}
