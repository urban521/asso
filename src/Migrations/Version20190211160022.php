<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190211160022 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, num_licence INT NOT NULL, civilite_mr VARCHAR(255) NOT NULL, civilite_mme VARCHAR(255) NOT NULL, nom_user VARCHAR(255) NOT NULL, nom_fille VARCHAR(255) DEFAULT NULL, prenom_user VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, tel1 VARCHAR(255) DEFAULT NULL, tel2 VARCHAR(255) DEFAULT NULL, email_user VARCHAR(255) NOT NULL, rue VARCHAR(255) NOT NULL, cp_user INT NOT NULL, ville_user VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users_activites (users_id INT NOT NULL, activites_id INT NOT NULL, INDEX IDX_1016245467B3B43D (users_id), INDEX IDX_101624545B8C31B7 (activites_id), PRIMARY KEY(users_id, activites_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users_activites ADD CONSTRAINT FK_1016245467B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_activites ADD CONSTRAINT FK_101624545B8C31B7 FOREIGN KEY (activites_id) REFERENCES activites (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users_activites DROP FOREIGN KEY FK_1016245467B3B43D');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE users_activites');
    }
}
