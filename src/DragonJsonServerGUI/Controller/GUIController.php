<?php
/**
 * @link http://dragonjsonserver.de/
 * @copyright Copyright (c) 2012-2014 DragonProjects (http://dragonprojects.de/)
 * @license http://license.dragonprojects.de/dragonjsonserver.txt New BSD License
 * @author Christoph Herrmann <developer@dragonprojects.de>
 * @package DragonJsonServerGUI
 */

namespace DragonJsonServerGUI\Controller;

class GUIController extends \Zend\Mvc\Controller\AbstractActionController
{
    public function indexAction()
    {
    	return ['server' => $this->getServiceLocator()->get('Config')['dragonjsonserver']['server']];
    }
}
