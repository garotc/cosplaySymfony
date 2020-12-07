<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201207101531 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE inscription_group (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, related_group_id INT NOT NULL, nom_perso_group VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_3F891088A76ED395 (user_id), INDEX IDX_3F89108858D797EA (related_group_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE inscription_group ADD CONSTRAINT FK_3F891088A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE inscription_group ADD CONSTRAINT FK_3F89108858D797EA FOREIGN KEY (related_group_id) REFERENCES `group` (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE inscription_group');
    }
}
