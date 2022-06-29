<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220628073650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pari ADD id_joueur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pari ADD CONSTRAINT FK_2A091C1F29D76B4B FOREIGN KEY (id_joueur_id) REFERENCES membre (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_2A091C1F29D76B4B ON pari (id_joueur_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE pari DROP CONSTRAINT FK_2A091C1F29D76B4B');
        $this->addSql('DROP INDEX IDX_2A091C1F29D76B4B');
        $this->addSql('ALTER TABLE pari DROP id_joueur_id');
    }
}
