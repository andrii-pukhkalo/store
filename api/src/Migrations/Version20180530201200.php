<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180530201200 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE product_comment (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, average_estimate_rate SMALLINT NOT NULL, UNIQUE INDEX UNIQ_45AD49DC4584665A (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_estimate (id INT AUTO_INCREMENT NOT NULL, product_comment_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, value INT NOT NULL, INDEX IDX_195A2C906B0E2238 (product_comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product_comment ADD CONSTRAINT FK_45AD49DC4584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE product_estimate ADD CONSTRAINT FK_195A2C906B0E2238 FOREIGN KEY (product_comment_id) REFERENCES product_comment (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product_estimate DROP FOREIGN KEY FK_195A2C906B0E2238');
        $this->addSql('DROP TABLE product_comment');
        $this->addSql('DROP TABLE product_estimate');
    }
}
