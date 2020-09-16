<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200904192109 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE major DROP rsvu_ranking');
        $this->addSql('ALTER TABLE university_major DROP FOREIGN KEY FK_7276E816309D1878');
        $this->addSql('ALTER TABLE university_major DROP FOREIGN KEY FK_7276E816E93695C7');
        $this->addSql('ALTER TABLE university_major ADD id INT AUTO_INCREMENT NOT NULL, ADD rsvu_ranking INT NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE university_major ADD CONSTRAINT FK_7276E816309D1878 FOREIGN KEY (university_id) REFERENCES university (id)');
        $this->addSql('ALTER TABLE university_major ADD CONSTRAINT FK_7276E816E93695C7 FOREIGN KEY (major_id) REFERENCES major (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE major ADD rsvu_ranking INT NOT NULL');
        $this->addSql('ALTER TABLE university_major MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE university_major DROP FOREIGN KEY FK_7276E816309D1878');
        $this->addSql('ALTER TABLE university_major DROP FOREIGN KEY FK_7276E816E93695C7');
        $this->addSql('ALTER TABLE university_major DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE university_major DROP id, DROP rsvu_ranking');
        $this->addSql('ALTER TABLE university_major ADD CONSTRAINT FK_7276E816309D1878 FOREIGN KEY (university_id) REFERENCES university (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE university_major ADD CONSTRAINT FK_7276E816E93695C7 FOREIGN KEY (major_id) REFERENCES major (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE university_major ADD PRIMARY KEY (university_id, major_id)');
    }
}
