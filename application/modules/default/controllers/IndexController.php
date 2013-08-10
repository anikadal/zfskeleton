<?php

class IndexController extends Zend_Controller_Action
{

	public function indexAction()
	{
		$this->view->headTitle('Hello World');
		
		$bookObj = new Application_Model_Books();
		$bookDetails = $bookObj->getBookDetails();
			
		$this->view->bookdetails = $bookDetails;
	}
	
	public function addAction()
	{
		//$myData = http_build_query($this->getRequest()->getParams());
		$this->_helper->viewRenderer->setNoRender();
		$name = $this->getRequest()->getParam('name');
	//	$pname = $this->getRequest()->getPost('name');
		//echo $pname;
		echo $name;
		
		$values = array('title'=>$this->getRequest()->getParam('name')
						,'description'=>$this->getRequest()->getParam('desc')
						,'price'=>$this->getRequest()->getParam('price')
						);
		$bookObj = new Application_Model_Books();
		
		$bookDetails = $bookObj->insertBook($values);
		
		exit;
	}

}