<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210320162011 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Dbs Disk table management';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE disk (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, artists LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', production INT NOT NULL, published DATE NOT NULL, style INT NOT NULL, stock INT NOT NULL, registered DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE disk');
    }
}
