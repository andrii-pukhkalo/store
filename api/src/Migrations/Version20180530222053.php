<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180530222053 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product_comment ADD comment_details_title VARCHAR(255) NOT NULL, ADD comment_details_benefits VARCHAR(255) NOT NULL, ADD comment_details_shortcoming VARCHAR(255) NOT NULL, ADD comment_details_description VARCHAR(255) NOT NULL, DROP product_details_title, DROP product_details_benefits, DROP product_details_shortcoming, DROP product_details_description');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product_comment ADD product_details_title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD product_details_benefits VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD product_details_shortcoming VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD product_details_description VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP comment_details_title, DROP comment_details_benefits, DROP comment_details_shortcoming, DROP comment_details_description');
    }
}
