<?php
namespace Converter\DeepConverter\Controller;

class MassController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected $kilogram;
    protected $ton;
    protected $gram;
    protected $pfund;
    public $massArray= array('kilogram','ton','gram','pfund');

    public function convertAction()
    {

        return $this->view->render();
    }
}
