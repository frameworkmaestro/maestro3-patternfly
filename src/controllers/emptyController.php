<?php

namespace patternfly\controllers;

class EmptyController extends \MController {

    public function init() {
        \Manager::getPage()->setTemplateName(\Manager::getAppPath("/src/app/templates/index.latte"));
    }

    public function main() {
        $this->render();
    }

}