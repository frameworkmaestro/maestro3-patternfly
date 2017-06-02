<?php


namespace eventos\migrations;


use Doctrine\DBAL\Migrations\AbstractMigration;

abstract class AbstractMigrationsEventos extends AbstractMigration
{

    /**
     * @param $filename
     * @return array
     */
    protected function getSQLArrayFromFile($filename)
    {
        $content = file_get_contents($filename);
        $content = str_replace(array("\r", "\n"), '', $content);

        return array_filter(explode(";", $content));
    }

    protected function addSqlFile($filename)
    {
        foreach ($this->getSQLArrayFromFile($filename) as $sql) {
            $this->addSql($sql);
        }
    }

}