<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210405102531 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE disk CHANGE production production INT DEFAULT NULL, CHANGE style style INT DEFAULT NULL, CHANGE artist artist INT DEFAULT NULL');
        $this->addSql('ALTER TABLE disk ADD CONSTRAINT FK_C74DD021599687 FOREIGN KEY (artist) REFERENCES artist (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE disk ADD CONSTRAINT FK_C74DD02D3EDB1E0 FOREIGN KEY (production) REFERENCES production (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE disk ADD CONSTRAINT FK_C74DD0233BDB86A FOREIGN KEY (style) REFERENCES style (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_C74DD021599687 ON disk (artist)');
        $this->addSql('CREATE INDEX IDX_C74DD02D3EDB1E0 ON disk (production)');
        $this->addSql('CREATE INDEX IDX_C74DD0233BDB86A ON disk (style)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE disk DROP FOREIGN KEY FK_C74DD021599687');
        $this->addSql('ALTER TABLE disk DROP FOREIGN KEY FK_C74DD02D3EDB1E0');
        $this->addSql('ALTER TABLE disk DROP FOREIGN KEY FK_C74DD0233BDB86A');
        $this->addSql('DROP INDEX IDX_C74DD021599687 ON disk');
        $this->addSql('DROP INDEX IDX_C74DD02D3EDB1E0 ON disk');
        $this->addSql('DROP INDEX IDX_C74DD0233BDB86A ON disk');
        $this->addSql('ALTER TABLE disk CHANGE artist artist INT NOT NULL, CHANGE production production INT NOT NULL, CHANGE style style INT NOT NULL');
    }
}
