<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190208145054 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adresse ADD type VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE oeuvre ADD updated_at DATETIME DEFAULT NULL, CHANGE annee_creation_oeuvre annee_creation_oeuvre INT DEFAULT NULL, CHANGE img_oeuvre filename VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE commande DROP n_commande');
        $this->addSql('ALTER TABLE client CHANGE mdp password VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE adresse DROP type');
        $this->addSql('ALTER TABLE client CHANGE password mdp VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE commande ADD n_commande INT NOT NULL');
        $this->addSql('ALTER TABLE oeuvre DROP updated_at, CHANGE annee_creation_oeuvre annee_creation_oeuvre INT NOT NULL, CHANGE filename img_oeuvre VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
