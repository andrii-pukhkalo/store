<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180512185222 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE photo_gallery ADD product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE photo_gallery ADD CONSTRAINT FK_72CB6FB74584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_72CB6FB74584665A ON photo_gallery (product_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE photo_gallery DROP FOREIGN KEY FK_72CB6FB74584665A');
        $this->addSql('DROP INDEX UNIQ_72CB6FB74584665A ON photo_gallery');
        $this->addSql('ALTER TABLE photo_gallery DROP product_id');
    }
}
