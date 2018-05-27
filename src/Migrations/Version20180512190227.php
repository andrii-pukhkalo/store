<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180512190227 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE photo ADD full_name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE photo_gallery ADD photo_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE photo_gallery ADD CONSTRAINT FK_72CB6FB77E9E4C8C FOREIGN KEY (photo_id) REFERENCES photo (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_72CB6FB77E9E4C8C ON photo_gallery (photo_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE photo DROP full_name');
        $this->addSql('ALTER TABLE photo_gallery DROP FOREIGN KEY FK_72CB6FB77E9E4C8C');
        $this->addSql('DROP INDEX UNIQ_72CB6FB77E9E4C8C ON photo_gallery');
        $this->addSql('ALTER TABLE photo_gallery DROP photo_id');
    }
}
