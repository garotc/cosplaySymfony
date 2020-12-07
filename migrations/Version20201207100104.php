<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201207100104 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `group` (id INT AUTO_INCREMENT NOT NULL, categorie_group_id INT NOT NULL, user_id INT DEFAULT NULL, name_group VARCHAR(100) NOT NULL, univers_group VARCHAR(255) NOT NULL, type_media_group TINYINT(1) NOT NULL, lancement_media_group TINYINT(1) NOT NULL, aide_scene_group TINYINT(1) NOT NULL, accessoires_group TINYINT(1) NOT NULL, description_accessoires_group LONGTEXT DEFAULT NULL, infos_group LONGTEXT DEFAULT NULL, INDEX IDX_6DC044C5C6D3982D (categorie_group_id), UNIQUE INDEX UNIQ_6DC044C5A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C5C6D3982D FOREIGN KEY (categorie_group_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user ADD create_group TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `group`');
        $this->addSql('ALTER TABLE user DROP create_group');
    }
}
