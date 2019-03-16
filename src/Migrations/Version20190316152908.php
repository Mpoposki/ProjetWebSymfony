<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190316152908 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE muscles CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE Epaule epaule INT DEFAULT NULL, CHANGE Bras bras INT DEFAULT NULL, CHANGE Pectoraux pectoraux INT DEFAULT NULL, CHANGE Abdos abdos INT DEFAULT NULL, CHANGE Fessiers fessiers INT DEFAULT NULL, CHANGE Dorsaux dorsaux INT DEFAULT NULL, CHANGE Jambes jambes INT DEFAULT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE muscles MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE muscles DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE muscles CHANGE id id INT NOT NULL, CHANGE epaule Epaule INT NOT NULL, CHANGE bras Bras INT NOT NULL, CHANGE pectoraux Pectoraux INT NOT NULL, CHANGE abdos Abdos INT NOT NULL, CHANGE fessiers Fessiers INT NOT NULL, CHANGE dorsaux Dorsaux INT NOT NULL, CHANGE jambes Jambes INT NOT NULL');
    }
}
