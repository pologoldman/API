<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220628073225 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ligue_membre_membre (ligue_membre_id INT NOT NULL, membre_id INT NOT NULL, PRIMARY KEY(ligue_membre_id, membre_id))');
        $this->addSql('CREATE INDEX IDX_DB227AD2D8F6B130 ON ligue_membre_membre (ligue_membre_id)');
        $this->addSql('CREATE INDEX IDX_DB227AD26A99F74A ON ligue_membre_membre (membre_id)');
        $this->addSql('ALTER TABLE ligue_membre_membre ADD CONSTRAINT FK_DB227AD2D8F6B130 FOREIGN KEY (ligue_membre_id) REFERENCES ligue_membre (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ligue_membre_membre ADD CONSTRAINT FK_DB227AD26A99F74A FOREIGN KEY (membre_id) REFERENCES membre (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ligue_membre ADD id_ligue_id INT NOT NULL');
        $this->addSql('ALTER TABLE ligue_membre ADD CONSTRAINT FK_FEFBBBC31DA8C470 FOREIGN KEY (id_ligue_id) REFERENCES ligue (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_FEFBBBC31DA8C470 ON ligue_membre (id_ligue_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE ligue_membre_membre');
        $this->addSql('ALTER TABLE ligue_membre DROP CONSTRAINT FK_FEFBBBC31DA8C470');
        $this->addSql('DROP INDEX IDX_FEFBBBC31DA8C470');
        $this->addSql('ALTER TABLE ligue_membre DROP id_ligue_id');
    }
}
