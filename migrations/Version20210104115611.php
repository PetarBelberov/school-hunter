<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210104115611 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE university ADD rating_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE university ADD CONSTRAINT FK_A07A85ECA32EFC6 FOREIGN KEY (rating_id) REFERENCES rating (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A07A85ECA32EFC6 ON university (rating_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE university DROP FOREIGN KEY FK_A07A85ECA32EFC6');
        $this->addSql('DROP INDEX UNIQ_A07A85ECA32EFC6 ON university');
        $this->addSql('ALTER TABLE university DROP rating_id');
    }
}
