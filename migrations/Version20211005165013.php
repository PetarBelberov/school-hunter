<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211005165013 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE degrees (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE major_degrees (major_id INT NOT NULL, degrees_id INT NOT NULL, INDEX IDX_67E6C447E93695C7 (major_id), INDEX IDX_67E6C44765CA15B3 (degrees_id), PRIMARY KEY(major_id, degrees_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE major_degrees ADD CONSTRAINT FK_67E6C447E93695C7 FOREIGN KEY (major_id) REFERENCES major (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE major_degrees ADD CONSTRAINT FK_67E6C44765CA15B3 FOREIGN KEY (degrees_id) REFERENCES degrees (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE sessions');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE major_degrees DROP FOREIGN KEY FK_67E6C44765CA15B3');
        $this->addSql('CREATE TABLE sessions (sess_id VARBINARY(128) NOT NULL, sess_data BLOB NOT NULL, sess_lifetime INT UNSIGNED NOT NULL, sess_time INT UNSIGNED NOT NULL, INDEX sessions_sess_lifetime_idx (sess_lifetime), PRIMARY KEY(sess_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE degrees');
        $this->addSql('DROP TABLE major_degrees');
    }
}
