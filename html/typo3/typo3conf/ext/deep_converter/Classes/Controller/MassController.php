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
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($mass);die;
        $count =0;
        foreach($mass['mass'] as $key => $value)
        {
            if(trim($value) && $count==0)
            {
                //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($value);die;
                $count++;
                switch ($key)
                {
                    case 'kilogram' :
                        $ton=$value*0.001;
                        $gram=$value*1000;
                        $pound=$value*2.2046;
                        $kilogram=$value;
                        break;
                    case  'gram' :
                        $ton=$value*0.000001;
                        $gram=$value;
                        $pound=$value*0.0022046;
                        $kilogram=$value*0.001;
                        break;
                    case 'ton' :
                        $ton=$value;
                        $gram=$value*1000000;
                        $pound=$value*2204.600;
                        $kilogram=$value*1000;
                        break;
                    case 'pound' :
                        $ton=$value*0.0005;
                        $gram=$value*453.59237;
                        $pound=$value;
                        $kilogram=$value*0.45359237;
                        break;
                    default : echo 'Dofolt';
                        break;
                }
            }

        }
        $this->view->assing('ton',$ton)->assign('pound',$pound)->assign('kilogram',$kilogram)->assign('gram',$gram);
    }
}
