<?php

namespace patternfly\controllers;

class DashboardController extends \MController {

    public function init() {
        \Manager::getPage()->setTemplateName(\Manager::getAppPath("/src/app/templates/dashboard.latte"));
    }

    public function main() {
        $this->data->statusCards = [];
        $this->data->statusCards[1] = (object)[
            'title' => 'Ipsum',
            'count' => '0',
            'notification' => (object)[
                'add' => (object)[
                    'title' => 'add Ipsum'
                ]
            ]
        ];
        $this->data->statusCards[2] = (object)[
            'title' => 'Amet',
            'count' => '20',
            'notification' => (object)[
                'error' => (object)[
                    'countError' => '4',
                    'countWarning' => '21'
                ]
            ]
        ];
        $this->data->statusCards[3] = (object)[
            'title' => 'Adipiscing',
            'count' => '9',
            'notification' => (object)[
                'ok' => true
            ]
        ];
        $this->data->statusCards[4] = $this->data->statusCards[1];
        $this->data->statusCards[5] = $this->data->statusCards[2];
        $this->data->statusCards[6] = $this->data->statusCards[3];
        $this->render();
    }

}