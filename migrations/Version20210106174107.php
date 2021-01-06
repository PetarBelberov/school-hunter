<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210106174107 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_rating (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_rating_user (user_rating_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_E0F08C59AD26222 (user_rating_id), INDEX IDX_E0F08C59A76ED395 (user_id), PRIMARY KEY(user_rating_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_rating_rating (user_rating_id INT NOT NULL, rating_id INT NOT NULL, INDEX IDX_19F5E1FAAD26222 (user_rating_id), INDEX IDX_19F5E1FAA32EFC6 (rating_id), PRIMARY KEY(user_rating_id, rating_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_rating_user ADD CONSTRAINT FK_E0F08C59AD26222 FOREIGN KEY (user_rating_id) REFERENCES user_rating (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_rating_user ADD CONSTRAINT FK_E0F08C59A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_rating_rating ADD CONSTRAINT FK_19F5E1FAAD26222 FOREIGN KEY (user_rating_id) REFERENCES user_rating (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_rating_rating ADD CONSTRAINT FK_19F5E1FAA32EFC6 FOREIGN KEY (rating_id) REFERENCES rating (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A32EFC6');
        $this->addSql('DROP INDEX UNIQ_8D93D649A32EFC6 ON user');
        $this->addSql('ALTER TABLE user DROP rating_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_rating_user DROP FOREIGN KEY FK_E0F08C59AD26222');
        $this->addSql('ALTER TABLE user_rating_rating DROP FOREIGN KEY FK_19F5E1FAAD26222');
        $this->addSql('DROP TABLE user_rating');
        $this->addSql('DROP TABLE user_rating_user');
        $this->addSql('DROP TABLE user_rating_rating');
        $this->addSql('ALTER TABLE user ADD rating_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A32EFC6 FOREIGN KEY (rating_id) REFERENCES rating (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649A32EFC6 ON user (rating_id)');
    }
}
