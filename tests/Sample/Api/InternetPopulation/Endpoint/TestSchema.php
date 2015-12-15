<?php

namespace Sample\Api\InternetPopulation\Endpoint;

use Doctrine\DBAL\Schema\Schema;

class TestSchema
{
    public static function getSchema()
    {
        $schema = new Schema();

        $table = $schema->createTable('internet_population');
        $table->addColumn('id', 'integer', array('autoincrement' => true));
        $table->addColumn('place', 'integer');
        $table->addColumn('region', 'string');
        $table->addColumn('population', 'integer');
        $table->addColumn('users', 'integer');
        $table->addColumn('world_users', 'float');
        $table->addColumn('datetime', 'datetime');
        $table->setPrimaryKey(array('id'));

        return $schema;
    }
}
