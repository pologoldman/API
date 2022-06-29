<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220628071939 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE cote_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE equipe_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE ligue_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE ligue_membre_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE matches_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE membre_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pari_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE score_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cote (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE equipe (id INT NOT NULL, nom VARCHAR(20) NOT NULL, logo TEXT NOT NULL, sport VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE ligue (id INT NOT NULL, nom VARCHAR(50) NOT NULL, date_creation TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE ligue_membre (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE matches (id INT NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE membre (id INT NOT NULL, pseudo VARCHAR(50) NOT NULL, �password VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE pari (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE score (id INT NOT NULL, score_dom VARCHAR(20) NOT NULL, score_ext VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cote_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE equipe_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE ligue_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE ligue_membre_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE matches_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE membre_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pari_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE score_id_seq CASCADE');
        $this->addSql('DROP TABLE cote');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE ligue');
        $this->addSql('DROP TABLE ligue_membre');
        $this->addSql('DROP TABLE matches');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE pari');
        $this->addSql('DROP TABLE score');
    }
}
