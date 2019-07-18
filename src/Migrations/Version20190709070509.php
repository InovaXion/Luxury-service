<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190709070509 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidates CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE jobOffers CHANGE client_id client_id INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE candidatures CHANGE candidate_id candidate_id INT DEFAULT NULL, CHANGE jobOffer_id jobOffer_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE candidates CHANGE category_id category_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE candidatures CHANGE candidate_id candidate_id INT DEFAULT NULL, CHANGE jobOffer_id jobOffer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE jobOffers CHANGE category_id category_id INT DEFAULT NULL, CHANGE client_id client_id INT NOT NULL');
    }
}
