<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180524211718 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE color (id INT NOT NULL, r VARCHAR(255) NOT NULL, g VARCHAR(255) NOT NULL, b VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE color ADD CONSTRAINT FK_665648E9BF396750 FOREIGN KEY (id) REFERENCES property (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE property DROP r, DROP g, DROP b');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE color');
        $this->addSql('ALTER TABLE property ADD r VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD g VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, ADD b VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
