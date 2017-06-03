<?php

namespace patternfly\controllers;

class ListController extends \MController {

    public function init() {
        \Manager::getPage()->setTemplateName(\Manager::getAppPath("/src/app/templates/index.latte"));
    }

    public function main() {
        $this->render();
    }

    public function card() {
        $this->render();
    }

}