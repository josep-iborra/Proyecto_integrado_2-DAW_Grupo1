<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210219072757 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE usuarios (ID INT AUTO_INCREMENT NOT NULL, Nombre VARCHAR(255) NOT NULL, Email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, apellidos VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) DEFAULT NULL, id_empresa VARCHAR(11) DEFAULT NULL, PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE empresa DROP FOREIGN KEY empresa_ibfk_1');
        $this->addSql('ALTER TABLE reseña CHANGE id_usuario id_usuario INT DEFAULT NULL, CHANGE id_vendedor id_vendedor INT DEFAULT NULL, CHANGE ID ID INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('ALTER TABLE empresa ADD CONSTRAINT empresa_ibfk_1 FOREIGN KEY (id_usuario) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reseña CHANGE id_usuario id_usuario INT NOT NULL, CHANGE id_vendedor id_vendedor INT NOT NULL, CHANGE ID ID INT NOT NULL');
    }
}
