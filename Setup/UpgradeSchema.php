<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Aht\HttCrud\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Upgrade the Cms module DB scheme
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * {@inheritdoc}
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.0.7', '<')) {
            $this->addMetaTitleField($setup);
        }
    }

    /**
     * Add meta title
     *
     * @param SchemaSetupInterface $setup
     * @return $this
     */
    protected function addMetaTitleField(SchemaSetupInterface $setup)
    {
        $setup->getConnection()->changeColumn(
            $setup->getTable('crud_teacher'),
            'teacher_id',
            'teacher_id',
            [
                'type' => \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                'length' => 10,
                'nullable' => true,
                'comment' => 'Teacher Phone',
                'identity' => true, 'nullable' => false, 'primary' => true,
                'unsigned' => true
            ]
        );
        return $this;
    }
}
