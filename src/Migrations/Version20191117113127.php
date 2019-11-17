<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191117113127 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE company (id INT AUTO_INCREMENT NOT NULL, created_at DATETIME DEFAULT NULL, logo LONGTEXT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_profile (id INT AUTO_INCREMENT NOT NULL, owner_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, organization VARCHAR(255) DEFAULT NULL, avatar LONGTEXT DEFAULT NULL, UNIQUE INDEX UNIQ_D95AB4058FDDAB70 (owner_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE report_type (id INT AUTO_INCREMENT NOT NULL, owner_id_id INT DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, INDEX IDX_FFF2BAD28FDDAB70 (owner_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE report (id INT AUTO_INCREMENT NOT NULL, creator_id_id INT DEFAULT NULL, report_type_id_id INT DEFAULT NULL, created_at DATETIME DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, photos LONGTEXT DEFAULT NULL, status VARCHAR(255) DEFAULT NULL, company_comment LONGTEXT DEFAULT NULL, anonimous TINYINT(1) DEFAULT NULL, address VARCHAR(5000) DEFAULT NULL, lat DOUBLE PRECISION DEFAULT NULL, lang DOUBLE PRECISION DEFAULT NULL, UNIQUE INDEX UNIQ_C42F7784F05788E9 (creator_id_id), UNIQUE INDEX UNIQ_C42F7784620A359B (report_type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_profile ADD CONSTRAINT FK_D95AB4058FDDAB70 FOREIGN KEY (owner_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE report_type ADD CONSTRAINT FK_FFF2BAD28FDDAB70 FOREIGN KEY (owner_id_id) REFERENCES company (id)');
        $this->addSql('ALTER TABLE report ADD CONSTRAINT FK_C42F7784F05788E9 FOREIGN KEY (creator_id_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE report ADD CONSTRAINT FK_C42F7784620A359B FOREIGN KEY (report_type_id_id) REFERENCES report_type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE report_type DROP FOREIGN KEY FK_FFF2BAD28FDDAB70');
        $this->addSql('ALTER TABLE report DROP FOREIGN KEY FK_C42F7784620A359B');
        $this->addSql('DROP TABLE company');
        $this->addSql('DROP TABLE user_profile');
        $this->addSql('DROP TABLE report_type');
        $this->addSql('DROP TABLE report');
        $this->addSql('DROP TABLE post_type');
    }
}
