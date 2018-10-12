<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181009150441 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE user_1');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, username, password, email, roles FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(255) NOT NULL COLLATE BINARY, password VARCHAR(255) NOT NULL COLLATE BINARY, email VARCHAR(255) NOT NULL COLLATE BINARY, roles CLOB NOT NULL --(DC2Type:simple_array)
        , confirmation_token VARCHAR(30) DEFAULT NULL, enabled BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO user (id, username, password, email, roles) SELECT id, username, password, email, roles FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE user_1 (id INTEGER DEFAULT NULL, username VARCHAR(255) DEFAULT NULL COLLATE BINARY, password VARCHAR(255) DEFAULT NULL COLLATE BINARY, email VARCHAR(255) DEFAULT NULL COLLATE BINARY, roles CLOB DEFAULT NULL COLLATE BINARY)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, username, password, email, roles FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, roles CLOB DEFAULT NULL COLLATE BINARY)');
        $this->addSql('INSERT INTO user (id, username, password, email, roles) SELECT id, username, password, email, roles FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
    }
}
