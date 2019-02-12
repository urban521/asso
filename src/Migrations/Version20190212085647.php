<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190212085647 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE association (id INT AUTO_INCREMENT NOT NULL, logo VARCHAR(255) DEFAULT NULL, num_asso INT NOT NULL, nom_asso VARCHAR(255) NOT NULL, adresse_asso VARCHAR(255) NOT NULL, cp_asso INT NOT NULL, ville_asso VARCHAR(255) NOT NULL, tel1_asso VARCHAR(255) DEFAULT NULL, tel2_asso VARCHAR(255) DEFAULT NULL, date_creation DATE NOT NULL, status_asso VARCHAR(255) NOT NULL, journal_asso VARCHAR(255) NOT NULL, siret_asso VARCHAR(255) DEFAULT NULL, reglement_asso VARCHAR(255) DEFAULT NULL, diplome_cadre VARCHAR(255) NOT NULL, adress_correspondant VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE association_events (association_id INT NOT NULL, events_id INT NOT NULL, INDEX IDX_60F3623DEFB9C8A5 (association_id), INDEX IDX_60F3623D9D6A1065 (events_id), PRIMARY KEY(association_id, events_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE association_activites (association_id INT NOT NULL, activites_id INT NOT NULL, INDEX IDX_D28C57C0EFB9C8A5 (association_id), INDEX IDX_D28C57C05B8C31B7 (activites_id), PRIMARY KEY(association_id, activites_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE association_events ADD CONSTRAINT FK_60F3623DEFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE association_events ADD CONSTRAINT FK_60F3623D9D6A1065 FOREIGN KEY (events_id) REFERENCES events (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE association_activites ADD CONSTRAINT FK_D28C57C0EFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE association_activites ADD CONSTRAINT FK_D28C57C05B8C31B7 FOREIGN KEY (activites_id) REFERENCES activites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE agasso ADD association_id INT NOT NULL');
        $this->addSql('ALTER TABLE agasso ADD CONSTRAINT FK_554AC692EFB9C8A5 FOREIGN KEY (association_id) REFERENCES association (id)');
        $this->addSql('CREATE INDEX IDX_554AC692EFB9C8A5 ON agasso (association_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE association_events DROP FOREIGN KEY FK_60F3623DEFB9C8A5');
        $this->addSql('ALTER TABLE association_activites DROP FOREIGN KEY FK_D28C57C0EFB9C8A5');
        $this->addSql('ALTER TABLE agasso DROP FOREIGN KEY FK_554AC692EFB9C8A5');
        $this->addSql('DROP TABLE association');
        $this->addSql('DROP TABLE association_events');
        $this->addSql('DROP TABLE association_activites');
        $this->addSql('DROP INDEX IDX_554AC692EFB9C8A5 ON agasso');
        $this->addSql('ALTER TABLE agasso DROP association_id');
    }
}
