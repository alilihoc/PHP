<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190626142753 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE produit ADD marque_id INT DEFAULT NULL, CHANGE fab_city fab_city VARCHAR(255) DEFAULT NULL, CHANGE fab_adress fab_adress VARCHAR(255) DEFAULT NULL, CHANGE fab_post_code fab_post_code VARCHAR(255) DEFAULT NULL, CHANGE slug slug VARCHAR(128) DEFAULT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC274827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC274827B9B2 ON produit (marque_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC274827B9B2');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP INDEX IDX_29A5EC274827B9B2 ON produit');
        $this->addSql('ALTER TABLE produit DROP marque_id, CHANGE fab_city fab_city VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE fab_adress fab_adress VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE fab_post_code fab_post_code VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE slug slug VARCHAR(128) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
