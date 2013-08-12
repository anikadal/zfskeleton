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
		$this->_helper->viewRenderer->setNoRender();
		$id = $this->getRequest()->getParam('id');
		$values = array('title'=>$this->getRequest()->getParam('name')
						,'description'=>$this->getRequest()->getParam('desc')
						,'price'=>$this->getRequest()->getParam('price')
						);
						//print_r($_POST);
						//exit;
		$bookObj = new Application_Model_Books();
		$bookDetails = $bookObj->insertBook($values,$id);

		exit;
	}
	
	public function editAction()
	{
		$this->_helper->viewRenderer->setNoRender();
		$id = $this->getRequest()->getParam('id');
		
		$bookObj = new Application_Model_Books();
		$bookDetails = $bookObj->getDetailsById($id);
		
		echo json_encode($bookDetails);
		exit;
	}

}