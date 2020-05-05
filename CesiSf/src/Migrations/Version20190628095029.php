<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190628095029 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE produit CHANGE marque_id marque_id INT DEFAULT NULL, CHANGE fab_city fab_city VARCHAR(255) DEFAULT NULL, CHANGE fab_adress fab_adress VARCHAR(255) DEFAULT NULL, CHANGE fab_post_code fab_post_code VARCHAR(255) DEFAULT NULL, CHANGE slug slug VARCHAR(128) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD nom_complet VARCHAR(255) NOT NULL, CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE produit CHANGE marque_id marque_id INT DEFAULT NULL, CHANGE fab_city fab_city VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE fab_adress fab_adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE fab_post_code fab_post_code VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE slug slug VARCHAR(128) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user DROP nom_complet, CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin');
    }
}
