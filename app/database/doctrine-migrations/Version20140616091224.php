<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140616091224 extends AbstractMigration {
    public function up(Schema $schema)
    {
        $table = $schema->getTable('User');
        $table->addColumn('billinId', 'integer', array('unsigned' => TRUE, 'notnull' => FALSE));
    }

    public function down(Schema $schema)
    {
        $table = $schema->getTable('User');
        $table->dropColumn('billinId');
    }
}
