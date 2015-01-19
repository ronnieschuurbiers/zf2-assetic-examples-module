<?php
namespace ZF2AsseticExamples\Model;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\Model\ViewModel;

/**
 * @author Ronnie Schuurbiers, Pronexus
 * @license https://github.com/magnetronnie/zf2-assetic-examples-module/blob/master/LICENSE
 */
class IndexModel {

	public function index() {
		$view = new ViewModel();
		$view->setTemplate('index.phtml');
		return $view;
	}
}