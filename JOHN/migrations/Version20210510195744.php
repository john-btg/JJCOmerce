<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210510195744 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE catalog (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, total_price DOUBLE PRECISION NOT NULL, creation_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_catalog (order_id INT NOT NULL, catalog_id INT NOT NULL, INDEX IDX_ED569B0C8D9F6D38 (order_id), INDEX IDX_ED569B0CCC3C66FC (catalog_id), PRIMARY KEY(order_id, catalog_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_catalog (user_id INT NOT NULL, catalog_id INT NOT NULL, INDEX IDX_43212C4DA76ED395 (user_id), INDEX IDX_43212C4DCC3C66FC (catalog_id), PRIMARY KEY(user_id, catalog_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE order_catalog ADD CONSTRAINT FK_ED569B0C8D9F6D38 FOREIGN KEY (order_id) REFERENCES `order` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_catalog ADD CONSTRAINT FK_ED569B0CCC3C66FC FOREIGN KEY (catalog_id) REFERENCES catalog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_catalog ADD CONSTRAINT FK_43212C4DA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_catalog ADD CONSTRAINT FK_43212C4DCC3C66FC FOREIGN KEY (catalog_id) REFERENCES catalog (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD orders_id LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_catalog DROP FOREIGN KEY FK_ED569B0CCC3C66FC');
        $this->addSql('ALTER TABLE user_catalog DROP FOREIGN KEY FK_43212C4DCC3C66FC');
        $this->addSql('ALTER TABLE order_catalog DROP FOREIGN KEY FK_ED569B0C8D9F6D38');
        $this->addSql('DROP TABLE catalog');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE order_catalog');
        $this->addSql('DROP TABLE user_catalog');
        $this->addSql('ALTER TABLE `user` DROP orders_id');
    }
}
