<?php


namespace Tusik\AttributeGenerator\Model\Attribute\Frontend;
use Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend;
use Magento\Framework\DataObject;

class Condition extends AbstractFrontend {

    /**
     * @param DataObject $dataObject
     * @return string
     */
    public function getValue(\Magento\Framework\DataObject $dataObject) {
        $value = $dataObject->getData($this->getAttribute()->getAttributeCode());
        return "<b><i>{$value}</i></b>";
    }

}
