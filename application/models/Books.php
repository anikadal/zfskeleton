<?php

class Application_Model_Books extends Zend_Db_Table_Abstract
{
	
	public function getBookDetails()
	{
		$db = $this->_db;
		$select = $db->select()->from('books','*');
		$ret = $db->fetchAll($select);
		return $ret;
	}
	
	public function insertBook($values,$id)
	{
		$db = $this->_db;
		if(!empty($id)){
			$where = array();
			$where[] = $db->quoteInto('id = ?', $id);
			
			$db->update('books',$values,$where);
		}else{
			$db->insert('books',$values);
		}
		return true;
	}
	
	public function getDetailsById($id)
	{
		$db = $this->_db;
		$select = $db->select()->from('books','*')->where("id = ?", $id);
		$ret = $db->fetchRow($select);
		return $ret;
	}
	
}