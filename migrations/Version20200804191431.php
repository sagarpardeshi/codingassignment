<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200804191431 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bundle (id INT AUTO_INCREMENT NOT NULL, provider_id INT NOT NULL, platform_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_A57B32FDA53A8AA (provider_id), UNIQUE INDEX UNIQ_A57B32FDFFE6496F (platform_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE platform (id INT AUTO_INCREMENT NOT NULL, provider_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_3952D0CBA53A8AA (provider_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE provider (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bundle ADD CONSTRAINT FK_A57B32FDA53A8AA FOREIGN KEY (provider_id) REFERENCES provider (id)');
        $this->addSql('ALTER TABLE bundle ADD CONSTRAINT FK_A57B32FDFFE6496F FOREIGN KEY (platform_id) REFERENCES platform (id)');
        $this->addSql('ALTER TABLE platform ADD CONSTRAINT FK_3952D0CBA53A8AA FOREIGN KEY (provider_id) REFERENCES provider (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bundle DROP FOREIGN KEY FK_A57B32FDFFE6496F');
        $this->addSql('ALTER TABLE bundle DROP FOREIGN KEY FK_A57B32FDA53A8AA');
        $this->addSql('ALTER TABLE platform DROP FOREIGN KEY FK_3952D0CBA53A8AA');
        $this->addSql('DROP TABLE bundle');
        $this->addSql('DROP TABLE platform');
        $this->addSql('DROP TABLE provider');
    }
}
