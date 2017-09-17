<?php

use Phinx\Db\Adapter\MysqlAdapter;
use Phinx\Migration\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    public function change()
    {
        $this->table('products')
            ->addColumn('name', 'string')
            ->addColumn('slug', 'string')
            ->addColumn('description', 'text', ['limit' => MysqlAdapter::TEXT_LONG])
            ->addColumn('image', 'string')
            ->addColumn('price', 'float', ['precision' => 6, 'scale' => 2])
            ->addColumn('updated_at', 'datetime')
            ->addColumn('created_at', 'datetime')
            ->addIndex('slug', ['unique' => true])
            ->create();
    }
}
