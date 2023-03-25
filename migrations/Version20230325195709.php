<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230325195709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, university_id INT NOT NULL, author_id INT NOT NULL, content LONGTEXT NOT NULL, published_at DATETIME NOT NULL, INDEX IDX_9474526C309D1878 (university_id), INDEX IDX_9474526CF675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE degrees (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE major (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3D34FD095E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE major_degrees (major_id INT NOT NULL, degrees_id INT NOT NULL, INDEX IDX_67E6C447E93695C7 (major_id), INDEX IDX_67E6C44765CA15B3 (degrees_id), PRIMARY KEY(major_id, degrees_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, university_id INT DEFAULT NULL, campus INT NOT NULL, academics INT NOT NULL, location INT NOT NULL, teaching_quality INT NOT NULL, job_prospects INT NOT NULL, professors INT NOT NULL, athletics INT NOT NULL, food INT NOT NULL, dorms INT NOT NULL, overall_rating INT NOT NULL, overall_review VARCHAR(255) NOT NULL, INDEX IDX_D8892622A76ED395 (user_id), INDEX IDX_D8892622309D1878 (university_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE university (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, address VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, website VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE university_major (id INT AUTO_INCREMENT NOT NULL, university_id INT NOT NULL, major_id INT NOT NULL, rsvu_ranking INT NOT NULL, INDEX IDX_7276E816309D1878 (university_id), INDEX IDX_7276E816E93695C7 (major_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstName VARCHAR(255) NOT NULL, lastName VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, facebook_id VARCHAR(255) DEFAULT NULL, facebook_access_token VARCHAR(255) DEFAULT NULL, google_id VARCHAR(255) DEFAULT NULL, google_access_token VARCHAR(255) DEFAULT NULL, user_type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C309D1878 FOREIGN KEY (university_id) REFERENCES university (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CF675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE major_degrees ADD CONSTRAINT FK_67E6C447E93695C7 FOREIGN KEY (major_id) REFERENCES major (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE major_degrees ADD CONSTRAINT FK_67E6C44765CA15B3 FOREIGN KEY (degrees_id) REFERENCES degrees (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D8892622309D1878 FOREIGN KEY (university_id) REFERENCES university (id)');
        $this->addSql('ALTER TABLE university_major ADD CONSTRAINT FK_7276E816309D1878 FOREIGN KEY (university_id) REFERENCES university (id)');
        $this->addSql('ALTER TABLE university_major ADD CONSTRAINT FK_7276E816E93695C7 FOREIGN KEY (major_id) REFERENCES major (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C309D1878');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CF675F31B');
        $this->addSql('ALTER TABLE major_degrees DROP FOREIGN KEY FK_67E6C447E93695C7');
        $this->addSql('ALTER TABLE major_degrees DROP FOREIGN KEY FK_67E6C44765CA15B3');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622A76ED395');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D8892622309D1878');
        $this->addSql('ALTER TABLE university_major DROP FOREIGN KEY FK_7276E816309D1878');
        $this->addSql('ALTER TABLE university_major DROP FOREIGN KEY FK_7276E816E93695C7');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE degrees');
        $this->addSql('DROP TABLE major');
        $this->addSql('DROP TABLE major_degrees');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE university');
        $this->addSql('DROP TABLE university_major');
        $this->addSql('DROP TABLE user');
    }
}
