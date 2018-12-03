<?php
namespace Converter\DeepConverter\Controller;

class MassController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    protected $kilogram;
    protected $ton;
    protected $gram;
    protected $pound;

    public function convertAction()
    {
        return $this->view->render();
    }
    public function countAction()
    {
        $mass = $this->request->getArguments();
        $count =0;
        foreach($mass['mass'] as $key => $value)
        {
            if(trim($value) && $count==0)
            {
                $count++;
                switch ($key)
                {
                    case 'kilogram' :
                        $ton=number_format(abs($value*0.001),4);
                        $gram=abs($value*1000);
                        $pound=number_format(abs($value*2.2046),4);
                        $kilogram=abs($value);
                        $this->view->assign('ton', $ton);
                        $this->view->assign('gram',$gram);
                        $this->view->assign('pound', $pound);
                        $this->view->assign('kilogram',$kilogram);
                        break;
                    case  'gram' :
                        $ton=number_format(abs((float)$value*0.000001),4);
                        $gram=number_format(abs((float)$value),4);
                        $pound=number_format(abs((float)$value*0.0022046),4);
                        $kilogram=number_format(abs((float)$value*0.001),4);
                        $this->view->assign('ton',$ton);
                        $this->view->assign('gram',$gram);
                        $this->view->assign('pound',$pound);
                        $this->view->assign('kilogram',$kilogram);
                        break;
                    case 'ton' :
                        $ton=number_format(abs($value),4);
                        $gram=number_format(abs($value*1000000),4);
                        $pound=number_format(abs($value*2204.600),4);
                        $kilogram=number_format(abs($value*1000),4);
                        $this->view->assign('ton', $ton);
                        $this->view->assign('gram',$gram);
                        $this->view->assign('pound', $pound);
                        $this->view->assign('kilogram',$kilogram);
                        break;
                    case 'pound' :
                        $ton=number_format(abs($value*0.0005),4);
                        $gram=number_format(abs($value*453.59237),4);
                        $pound=number_format(abs($value),4);
                        $kilogram=number_format(abs($value*0.45359237),4);
                        $this->view->assign('ton',$ton);
                        $this->view->assign('gram',$gram);
                        $this->view->assign('pound',$pound);
                        $this->view->assign('kilogram',$kilogram);
                        break;
                    default : echo 'Dofolt';
                        break;
                }
            }
        }
        return $this->view->render();
    }
}
