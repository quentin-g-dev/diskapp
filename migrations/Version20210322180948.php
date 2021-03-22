<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210322180948 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disk ADD artist_id INT DEFAULT NULL, ADD production_id INT DEFAULT NULL, ADD style_id INT DEFAULT NULL, DROP production, DROP style, DROP artist');
        $this->addSql('ALTER TABLE disk ADD CONSTRAINT FK_C74DD02B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('ALTER TABLE disk ADD CONSTRAINT FK_C74DD02ECC6147F FOREIGN KEY (production_id) REFERENCES production (id)');
        $this->addSql('ALTER TABLE disk ADD CONSTRAINT FK_C74DD02BACD6074 FOREIGN KEY (style_id) REFERENCES style (id)');
        $this->addSql('CREATE INDEX IDX_C74DD02B7970CF8 ON disk (artist_id)');
        $this->addSql('CREATE INDEX IDX_C74DD02ECC6147F ON disk (production_id)');
        $this->addSql('CREATE INDEX IDX_C74DD02BACD6074 ON disk (style_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disk DROP FOREIGN KEY FK_C74DD02B7970CF8');
        $this->addSql('ALTER TABLE disk DROP FOREIGN KEY FK_C74DD02ECC6147F');
        $this->addSql('ALTER TABLE disk DROP FOREIGN KEY FK_C74DD02BACD6074');
        $this->addSql('DROP INDEX IDX_C74DD02B7970CF8 ON disk');
        $this->addSql('DROP INDEX IDX_C74DD02ECC6147F ON disk');
        $this->addSql('DROP INDEX IDX_C74DD02BACD6074 ON disk');
        $this->addSql('ALTER TABLE disk ADD production INT NOT NULL, ADD style INT NOT NULL, ADD artist INT NOT NULL, DROP artist_id, DROP production_id, DROP style_id');
    }
}
