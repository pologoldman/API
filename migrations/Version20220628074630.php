<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220628074630 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE matches ADD cote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE matches ADD CONSTRAINT FK_62615BA473A6995 FOREIGN KEY (cote_id) REFERENCES cote (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_62615BA473A6995 ON matches (cote_id)');
        $this->addSql('ALTER TABLE pari ADD cote_id INT NOT NULL');
        $this->addSql('ALTER TABLE pari ADD CONSTRAINT FK_2A091C1F473A6995 FOREIGN KEY (cote_id) REFERENCES cote (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_2A091C1F473A6995 ON pari (cote_id)');
        $this->addSql('ALTER TABLE score ADD cote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE score ADD CONSTRAINT FK_32993751473A6995 FOREIGN KEY (cote_id) REFERENCES cote (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_32993751473A6995 ON score (cote_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE matches DROP CONSTRAINT FK_62615BA473A6995');
        $this->addSql('DROP INDEX IDX_62615BA473A6995');
        $this->addSql('ALTER TABLE matches DROP cote_id');
        $this->addSql('ALTER TABLE pari DROP CONSTRAINT FK_2A091C1F473A6995');
        $this->addSql('DROP INDEX IDX_2A091C1F473A6995');
        $this->addSql('ALTER TABLE pari DROP cote_id');
        $this->addSql('ALTER TABLE score DROP CONSTRAINT FK_32993751473A6995');
        $this->addSql('DROP INDEX IDX_32993751473A6995');
        $this->addSql('ALTER TABLE score DROP cote_id');
    }
}
