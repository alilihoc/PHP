<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190625123202 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE produit ADD fab_post_code VARCHAR(255) DEFAULT NULL, CHANGE fab_city fab_city VARCHAR(255) DEFAULT NULL, CHANGE fab_adress fab_adress VARCHAR(255) DEFAULT NULL, CHANGE demo demo TINYINT(1) DEFAULT \'0\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE produit DROP fab_post_code, CHANGE fab_city fab_city VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE fab_adress fab_adress VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE demo demo TINYINT(1) NOT NULL');
    }
}
