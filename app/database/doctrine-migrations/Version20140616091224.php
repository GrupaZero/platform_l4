<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140616091224 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql('ALTER TABLE User ADD billinId INT UNSIGNED DEFAULT NULL AFTER `id`');
    }

    public function down(Schema $schema)
    {
        $table = $schema->getTable('User');
        $table->dropColumn('billinId');
    }
}
