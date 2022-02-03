<?php

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ModelInterface;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction(): ModelInterface
    {
        return new ViewModel();
    }

    public function jsonAction(): ModelInterface
    {
        return new JsonModel([
            'time' => time(),
        ]);
    }
}
