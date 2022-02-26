<?php

namespace Calendar\Data;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class GetConnection {

    public function entityManager() {

        $paths = array(__DIR__ . "/../Entity/");
        $isDevMode = true;
        $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
        $params = ["url" => "mysql://".USER.":@".HOST."/".DB];
        return EntityManager::create($params, $config);
        
    }

}