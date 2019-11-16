<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191116151809 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('DROP TABLE user_profile');

        $this->addSql('CREATE TABLE user_profile (id INT AUTO_INCREMENT NOT NULL, owner_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, organization VARCHAR(255) DEFAULT NULL, avatar LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_D95AB4058FDDAB70 (owner_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_profile ADD CONSTRAINT FK_D95AB4058FDDAB70 FOREIGN KEY (owner_id_id) REFERENCES users (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_profile');
    }
}
