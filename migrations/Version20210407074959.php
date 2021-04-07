<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210407074959 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE artist ADD CONSTRAINT FK_1599687733D5B5D FOREIGN KEY (curator_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1599687733D5B5D ON artist (curator_id)');
        $this->addSql('ALTER TABLE disk ADD CONSTRAINT FK_C74DD02733D5B5D FOREIGN KEY (curator_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C74DD02733D5B5D ON disk (curator_id)');
        $this->addSql('ALTER TABLE production ADD CONSTRAINT FK_D3EDB1E0733D5B5D FOREIGN KEY (curator_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D3EDB1E0733D5B5D ON production (curator_id)');
        $this->addSql('ALTER TABLE style ADD CONSTRAINT FK_33BDB86A733D5B5D FOREIGN KEY (curator_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_33BDB86A733D5B5D ON style (curator_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE artist DROP FOREIGN KEY FK_1599687733D5B5D');
        $this->addSql('DROP INDEX IDX_1599687733D5B5D ON artist');
        $this->addSql('ALTER TABLE disk DROP FOREIGN KEY FK_C74DD02733D5B5D');
        $this->addSql('DROP INDEX IDX_C74DD02733D5B5D ON disk');
        $this->addSql('ALTER TABLE production DROP FOREIGN KEY FK_D3EDB1E0733D5B5D');
        $this->addSql('DROP INDEX IDX_D3EDB1E0733D5B5D ON production');
        $this->addSql('ALTER TABLE style DROP FOREIGN KEY FK_33BDB86A733D5B5D');
        $this->addSql('DROP INDEX IDX_33BDB86A733D5B5D ON style');
    }
}
