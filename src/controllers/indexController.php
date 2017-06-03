<?php

namespace patternfly\controllers;

class IndexController extends \MController {

    public function init() {
        //$templatePath = \Manager::getAppPath("/src/app/templates");
        //\Manager::getPage()->setTemplatePath($templatePath);
        \Manager::getPage()->setTemplateName(\Manager::getAppPath("/src/app/templates/index.latte"));
    }

    public function main() {
        $this->render();
    }

}