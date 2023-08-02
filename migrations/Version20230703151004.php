<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230703151004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE country (country_code VARCHAR(2) NOT NULL, region_code VARCHAR(20) NOT NULL, country_name VARCHAR(100) NOT NULL, capital VARCHAR(100) NOT NULL, brief_description VARCHAR(500) NOT NULL, short_description VARCHAR(2000) NOT NULL, long_description VARCHAR(4000) NOT NULL, travel VARCHAR(1000) DEFAULT NULL, language VARCHAR(200) NOT NULL, currency VARCHAR(50) NOT NULL, entry VARCHAR(100) DEFAULT NULL, atm VARCHAR(100) NOT NULL, mobile_phone VARCHAR(100) NOT NULL, electricity VARCHAR(50) NOT NULL, safety VARCHAR(1000) DEFAULT NULL, alerts VARCHAR(1000) DEFAULT NULL, sales_tax VARCHAR(50) DEFAULT NULL, getting_around VARCHAR(50) DEFAULT NULL, active TINYINT(1) NOT NULL, sort_order SMALLINT NOT NULL, created_by VARCHAR(100) NOT NULL, updated_by VARCHAR(100) DEFAULT NULL, image_tags JSON DEFAULT NULL, ranking SMALLINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_5373C966AEB327AF (region_code), PRIMARY KEY(country_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE featured_destination (id INT AUTO_INCREMENT NOT NULL, page_type VARCHAR(10) NOT NULL, destination_code VARCHAR(20) DEFAULT NULL, section SMALLINT NOT NULL, title VARCHAR(30) NOT NULL, description VARCHAR(255) NOT NULL, sort_order SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE featured_image (id INT AUTO_INCREMENT NOT NULL, page_type VARCHAR(10) NOT NULL, destination_code VARCHAR(20) DEFAULT NULL, section SMALLINT NOT NULL, orientation VARCHAR(20) NOT NULL, title VARCHAR(30) NOT NULL, description VARCHAR(255) DEFAULT NULL, file_path VARCHAR(255) NOT NULL, ranking SMALLINT NOT NULL, sort_order SMALLINT NOT NULL, link VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place (id INT AUTO_INCREMENT NOT NULL, country_code VARCHAR(2) NOT NULL, slug VARCHAR(255) NOT NULL, place_name VARCHAR(100) NOT NULL, country_region VARCHAR(100) DEFAULT NULL, brief_description VARCHAR(500) NOT NULL, long_description VARCHAR(4000) NOT NULL, best_time_to_visit VARCHAR(1000) NOT NULL, things_to_do VARCHAR(1500) NOT NULL, accommodation VARCHAR(2000) DEFAULT NULL, food VARCHAR(2000) DEFAULT NULL, day_trips VARCHAR(1500) DEFAULT NULL, safety VARCHAR(255) DEFAULT NULL, image_tags JSON DEFAULT NULL, tags JSON DEFAULT NULL, ranking SMALLINT NOT NULL, created_by VARCHAR(100) NOT NULL, updated_by VARCHAR(100) DEFAULT NULL, travel_information VARCHAR(1000) NOT NULL, world_ranking SMALLINT NOT NULL, sort_order SMALLINT NOT NULL, place_code VARCHAR(20) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_741D53CDF026BB7C (country_code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE place_image (id INT AUTO_INCREMENT NOT NULL, place_id INT NOT NULL, title VARCHAR(30) DEFAULT NULL, description VARCHAR(50) DEFAULT NULL, orientation VARCHAR(20) NOT NULL, file_path VARCHAR(255) DEFAULT NULL, country_code VARCHAR(2) DEFAULT NULL, region_code VARCHAR(20) DEFAULT NULL, sort_order SMALLINT NOT NULL, INDEX IDX_6C4B1F7CDA6A219 (place_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (region_code VARCHAR(20) NOT NULL, region_name VARCHAR(20) NOT NULL, brief_description VARCHAR(500) NOT NULL, short_description VARCHAR(2000) NOT NULL, long_description VARCHAR(4000) NOT NULL, ranking SMALLINT NOT NULL, sort_order SMALLINT NOT NULL, created_by VARCHAR(100) NOT NULL, updated_by VARCHAR(100) DEFAULT NULL, image_tags JSON DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(region_code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, user_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', email VARCHAR(180) NOT NULL, first_name VARCHAR(50) NOT NULL, last_name VARCHAR(50) NOT NULL, middle_name VARCHAR(50) DEFAULT NULL, display_name VARCHAR(20) DEFAULT NULL, password VARCHAR(255) NOT NULL, roles JSON NOT NULL, sex VARCHAR(20) DEFAULT NULL, dob DATE DEFAULT NULL, created_by VARCHAR(100) NOT NULL, updated_by VARCHAR(100) DEFAULT NULL, status VARCHAR(10) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE country ADD CONSTRAINT FK_5373C966AEB327AF FOREIGN KEY (region_code) REFERENCES region (region_code)');
        $this->addSql('ALTER TABLE place ADD CONSTRAINT FK_741D53CDF026BB7C FOREIGN KEY (country_code) REFERENCES country (country_code)');
        $this->addSql('ALTER TABLE place_image ADD CONSTRAINT FK_6C4B1F7CDA6A219 FOREIGN KEY (place_id) REFERENCES place (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE country DROP FOREIGN KEY FK_5373C966AEB327AF');
        $this->addSql('ALTER TABLE place DROP FOREIGN KEY FK_741D53CDF026BB7C');
        $this->addSql('ALTER TABLE place_image DROP FOREIGN KEY FK_6C4B1F7CDA6A219');
        $this->addSql('DROP TABLE country');
        $this->addSql('DROP TABLE featured_destination');
        $this->addSql('DROP TABLE featured_image');
        $this->addSql('DROP TABLE place');
        $this->addSql('DROP TABLE place_image');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE user');
    }
}
