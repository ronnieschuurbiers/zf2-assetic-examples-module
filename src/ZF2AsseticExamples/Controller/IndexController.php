<?php

namespace ZF2AsseticExamples\Controller;

use Zend\Mvc\Controller\AbstractActionController;

/**
 * @author Ronnie Schuurbiers, Pronexus
 * @license https://github.com/magnetronnie/zf2-assetic-examples-module/blob/master/LICENSE
 */
class IndexController extends AbstractActionController {

	public function indexAction() {
		$this->layout('zf2asseticexamples/layout');

		$indexModel = $this->getServiceLocator()->get('ZF2AsseticExamples\IndexModel');
		return $indexModel->index();
	}
}