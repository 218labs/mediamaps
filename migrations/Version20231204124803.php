<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231204124803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE zayed 11_feuil1');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE compaign CHANGE links_count links_count INT DEFAULT 0 NOT NULL, CHANGE medias_count medias_count INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE compaign ADD CONSTRAINT FK_4F2A6980A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4F2A6980A76ED395 ON compaign (user_id)');
        $this->addSql('ALTER TABLE countries DROP countryname_ar, CHANGE countryCode countryCode CHAR(2) NOT NULL, CHANGE countryName countryName VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE language CHANGE name name VARCHAR(255) NOT NULL, CHANGE code code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE link DROP country_name, DROP media_name, DROP media, DROP country, DROP status, CHANGE title title VARCHAR(255) NOT NULL, CHANGE link link VARCHAR(255) NOT NULL, CHANGE published_on published_on DATE NOT NULL, CHANGE category_id category_id INT NOT NULL, CHANGE user_id user_id INT NOT NULL, CHANGE compaign_id compaign_id INT NOT NULL, CHANGE language_id language_id INT NOT NULL, CHANGE file_name file_name VARCHAR(255) DEFAULT NULL, CHANGE geographical_scope geographical_scope VARCHAR(50) NOT NULL, CHANGE orientation orientation VARCHAR(255) NOT NULL, CHANGE lang lang VARCHAR(5) NOT NULL, CHANGE country_id country_id INT NOT NULL, CHANGE domain domain VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F1EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F112469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F1A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F1E8F0C7C7 FOREIGN KEY (compaign_id) REFERENCES compaign (id)');
        $this->addSql('ALTER TABLE link ADD CONSTRAINT FK_36AC99F182F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id)');
        $this->addSql('CREATE INDEX IDX_36AC99F1EA9FDD75 ON link (media_id)');
        $this->addSql('CREATE INDEX IDX_36AC99F112469DE2 ON link (category_id)');
        $this->addSql('CREATE INDEX IDX_36AC99F1A76ED395 ON link (user_id)');
        $this->addSql('CREATE INDEX IDX_36AC99F1E8F0C7C7 ON link (compaign_id)');
        $this->addSql('CREATE INDEX IDX_36AC99F182F1BAF4 ON link (language_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F698FC1036AC99F1 ON link_capture (link)');
        $this->addSql('ALTER TABLE media CHANGE parent_id parent_id INT NOT NULL, CHANGE country_id country_id INT NOT NULL, CHANGE category category VARCHAR(150) NOT NULL, CHANGE visitors_count visitors_count INT NOT NULL, CHANGE email email VARCHAR(150) NOT NULL, CHANGE language_id language_id INT NOT NULL, CHANGE facebook_followers_count facebook_followers_count INT DEFAULT NULL, CHANGE twitter_followers_count twitter_followers_count INT DEFAULT NULL, CHANGE instagram_followers_count instagram_followers_count INT DEFAULT NULL, CHANGE youtube_followers_count youtube_followers_count INT DEFAULT NULL, CHANGE domain domain VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CF92F3E70 FOREIGN KEY (country_id) REFERENCES countries (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C82F1BAF4 FOREIGN KEY (language_id) REFERENCES language (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C727ACA70 FOREIGN KEY (parent_id) REFERENCES media (id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10CF92F3E70 ON media (country_id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10C82F1BAF4 ON media (language_id)');
        $this->addSql('CREATE INDEX IDX_6A2CA10C727ACA70 ON media (parent_id)');
        $this->addSql('ALTER TABLE media_geographical_system ADD CONSTRAINT FK_16BA6E57EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE media_geographical_system ADD CONSTRAINT FK_16BA6E577F241DB7 FOREIGN KEY (geographical_system_id) REFERENCES geographical_system (id)');
        $this->addSql('CREATE INDEX IDX_16BA6E57EA9FDD75 ON media_geographical_system (media_id)');
        $this->addSql('CREATE INDEX IDX_16BA6E577F241DB7 ON media_geographical_system (geographical_system_id)');
        $this->addSql('ALTER TABLE media_interest ADD CONSTRAINT FK_635F34D5EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE media_interest ADD CONSTRAINT FK_635F34D55A95FF89 FOREIGN KEY (interest_id) REFERENCES interest (id)');
        $this->addSql('CREATE INDEX IDX_635F34D5EA9FDD75 ON media_interest (media_id)');
        $this->addSql('CREATE INDEX IDX_635F34D55A95FF89 ON media_interest (interest_id)');
        $this->addSql('ALTER TABLE media_languages ADD CONSTRAINT FK_85B1E0F7EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('CREATE INDEX IDX_85B1E0F7EA9FDD75 ON media_languages (media_id)');
        $this->addSql('ALTER TABLE media_social_network ADD CONSTRAINT FK_4ECAA661EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id)');
        $this->addSql('CREATE INDEX IDX_4ECAA661EA9FDD75 ON media_social_network (media_id)');
        $this->addSql('ALTER TABLE user CHANGE company company LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE zayed 11_feuil1 (link TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, title VARCHAR(146) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, media VARCHAR(40) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, media_id INT DEFAULT NULL, country VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, country_id INT DEFAULT NULL, orientation VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'Positive\' COLLATE `utf8mb4_general_ci`, geographical_scope	va VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'Local\' COLLATE `utf8mb4_general_ci`, user_id INT DEFAULT 544 NOT NULL, compaign_id INT DEFAULT 4 NOT NULL, category_id INT DEFAULT 1 NOT NULL) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE compaign DROP FOREIGN KEY FK_4F2A6980A76ED395');
        $this->addSql('DROP INDEX IDX_4F2A6980A76ED395 ON compaign');
        $this->addSql('ALTER TABLE compaign CHANGE links_count links_count INT DEFAULT 0, CHANGE medias_count medias_count INT DEFAULT 0');
        $this->addSql('ALTER TABLE countries ADD countryname_ar VARCHAR(150) DEFAULT NULL, CHANGE countryCode countryCode CHAR(2) DEFAULT \'\' NOT NULL, CHANGE countryName countryName VARCHAR(100) DEFAULT \'\' NOT NULL');
        $this->addSql('ALTER TABLE language CHANGE name name VARCHAR(100) NOT NULL, CHANGE code code VARCHAR(3) DEFAULT NULL');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F1EA9FDD75');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F112469DE2');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F1A76ED395');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F1E8F0C7C7');
        $this->addSql('ALTER TABLE link DROP FOREIGN KEY FK_36AC99F182F1BAF4');
        $this->addSql('DROP INDEX IDX_36AC99F1EA9FDD75 ON link');
        $this->addSql('DROP INDEX IDX_36AC99F112469DE2 ON link');
        $this->addSql('DROP INDEX IDX_36AC99F1A76ED395 ON link');
        $this->addSql('DROP INDEX IDX_36AC99F1E8F0C7C7 ON link');
        $this->addSql('DROP INDEX IDX_36AC99F182F1BAF4 ON link');
        $this->addSql('ALTER TABLE link ADD country_name VARCHAR(255) DEFAULT NULL, ADD media_name VARCHAR(255) DEFAULT NULL, ADD media VARCHAR(255) DEFAULT NULL, ADD country VARCHAR(255) DEFAULT NULL, ADD status SMALLINT DEFAULT 1, CHANGE category_id category_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL, CHANGE compaign_id compaign_id INT DEFAULT NULL, CHANGE language_id language_id INT DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE link link VARCHAR(512) DEFAULT NULL, CHANGE file_name file_name VARCHAR(100) DEFAULT NULL, CHANGE geographical_scope geographical_scope VARCHAR(50) DEFAULT NULL, CHANGE orientation orientation VARCHAR(50) DEFAULT NULL, CHANGE country_id country_id INT DEFAULT NULL, CHANGE domain domain VARCHAR(150) DEFAULT NULL, CHANGE lang lang VARCHAR(2) DEFAULT NULL, CHANGE published_on published_on DATE DEFAULT NULL');
        $this->addSql('DROP INDEX UNIQ_F698FC1036AC99F1 ON link_capture');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CF92F3E70');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C82F1BAF4');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C727ACA70');
        $this->addSql('DROP INDEX IDX_6A2CA10CF92F3E70 ON media');
        $this->addSql('DROP INDEX IDX_6A2CA10C82F1BAF4 ON media');
        $this->addSql('DROP INDEX IDX_6A2CA10C727ACA70 ON media');
        $this->addSql('ALTER TABLE media CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE country_id country_id INT DEFAULT NULL, CHANGE language_id language_id INT DEFAULT NULL, CHANGE category category VARCHAR(150) DEFAULT NULL, CHANGE visitors_count visitors_count INT DEFAULT NULL, CHANGE email email VARCHAR(150) DEFAULT NULL, CHANGE facebook_followers_count facebook_followers_count INT DEFAULT 0, CHANGE twitter_followers_count twitter_followers_count INT DEFAULT 0, CHANGE instagram_followers_count instagram_followers_count INT DEFAULT 0, CHANGE youtube_followers_count youtube_followers_count INT DEFAULT 0, CHANGE domain domain VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE media_geographical_system DROP FOREIGN KEY FK_16BA6E57EA9FDD75');
        $this->addSql('ALTER TABLE media_geographical_system DROP FOREIGN KEY FK_16BA6E577F241DB7');
        $this->addSql('DROP INDEX IDX_16BA6E57EA9FDD75 ON media_geographical_system');
        $this->addSql('DROP INDEX IDX_16BA6E577F241DB7 ON media_geographical_system');
        $this->addSql('ALTER TABLE media_interest DROP FOREIGN KEY FK_635F34D5EA9FDD75');
        $this->addSql('ALTER TABLE media_interest DROP FOREIGN KEY FK_635F34D55A95FF89');
        $this->addSql('DROP INDEX IDX_635F34D5EA9FDD75 ON media_interest');
        $this->addSql('DROP INDEX IDX_635F34D55A95FF89 ON media_interest');
        $this->addSql('ALTER TABLE media_languages DROP FOREIGN KEY FK_85B1E0F7EA9FDD75');
        $this->addSql('DROP INDEX IDX_85B1E0F7EA9FDD75 ON media_languages');
        $this->addSql('ALTER TABLE media_social_network DROP FOREIGN KEY FK_4ECAA661EA9FDD75');
        $this->addSql('DROP INDEX IDX_4ECAA661EA9FDD75 ON media_social_network');
        $this->addSql('ALTER TABLE user CHANGE company company VARCHAR(150) DEFAULT NULL');
    }
}
