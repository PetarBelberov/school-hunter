<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210105171926 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE overall_rating');
        $this->addSql('ALTER TABLE rating ADD overall_rating INT NOT NULL, ADD overall_review VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE university DROP FOREIGN KEY FK_A07A85ECA32EFC6');
        $this->addSql('DROP INDEX UNIQ_A07A85ECA32EFC6 ON university');
        $this->addSql('ALTER TABLE university DROP rating_id');
        $this->addSql('ALTER TABLE user ADD rating_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A32EFC6 FOREIGN KEY (rating_id) REFERENCES rating (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649A32EFC6 ON user (rating_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE overall_rating (id INT AUTO_INCREMENT NOT NULL, overall_rating INT NOT NULL, overall_review VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE rating DROP overall_rating, DROP overall_review');
        $this->addSql('ALTER TABLE university ADD rating_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE university ADD CONSTRAINT FK_A07A85ECA32EFC6 FOREIGN KEY (rating_id) REFERENCES rating (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A07A85ECA32EFC6 ON university (rating_id)');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A32EFC6');
        $this->addSql('DROP INDEX UNIQ_8D93D649A32EFC6 ON user');
        $this->addSql('ALTER TABLE user DROP rating_id');
    }
}
