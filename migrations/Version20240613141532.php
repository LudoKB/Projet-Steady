<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240613141532 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493256915B');
        $this->addSql('DROP INDEX IDX_8D93D6493256915B ON user');
        $this->addSql('ALTER TABLE user CHANGE relation_id shop_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6494D16C4DD FOREIGN KEY (shop_id) REFERENCES shop (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6494D16C4DD ON user (shop_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6494D16C4DD');
        $this->addSql('DROP INDEX IDX_8D93D6494D16C4DD ON user');
        $this->addSql('ALTER TABLE user CHANGE shop_id relation_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493256915B FOREIGN KEY (relation_id) REFERENCES shop (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6493256915B ON user (relation_id)');
    }
}
