<?php
namespace Tusik\AttributeGenerator\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Catalog\Model\Product;

class InstallData implements InstallDataInterface {

    private $eavSetupFactory;

    /**
     * InstallData constructor.
     * @param $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory) {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $moduleDataSetup, ModuleContextInterface $moduleContext) {
        $eavSetup = $this->eavSetupFactory->create(['setup' => $moduleDataSetup]);
        // testing purpose only
        $eavSetup->removeAttribute(\Magento\Catalog\Model\Product::ENTITY,'product_label');

        $eavSetup->addAttribute(Product::ENTITY, "product_label", [
            "group" => "Product Details",
            "apply_to" => "simple,configurable,virtual,bundle,downloadable,grouped",
            "type" => "text",
            "input" => "multiselect",
            "class" => "",
            "global" => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
            "backend" => "",
            "frontend" => "",
            "source" => "Tusik\AttributeGenerator\Model\Attribute\Source\Condition",
            "visible" => true,
            "required" => true,
            "user_defined" => false,
            "default" => "",
            "searchable" => false,
            "filterable" => false,
            "comparable" => false,
            "visible_on_front" => true,
            "used_in_product_listing" => true,
            "unique" => false,
            "label" => "Product label",
        ]);

        $this->addToAllAttributeSets($eavSetup, "product_label");

    }

    /**
     * @param EavSetup $eavSetup
     * @param string $code
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function addToAllAttributeSets(EavSetup $eavSetup, string $code): void {
        $entityTypeId = $eavSetup->getEntityTypeId(\Magento\Catalog\Model\Product::ENTITY);
        $attribSetIds = $eavSetup->getAllAttributeSetIds($entityTypeId);
        foreach ($attribSetIds as $setId) {
            $groupId = $eavSetup->getAttributeGroupId($entityTypeId, $setId, "product-details");
            $eavSetup->addAttributeToGroup($entityTypeId, $setId, $groupId, $code, null);
        }
    }
}

