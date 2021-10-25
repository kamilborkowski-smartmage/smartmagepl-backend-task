<?php


namespace Tusik\AttributeGenerator\Model\Attribute\Backend;
use Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend;


class Condition extends AbstractBackend {

    /**
     * @param DataObject $object
     * @return bool
     */
    public function validate($object) {
        return true;
    }

}
