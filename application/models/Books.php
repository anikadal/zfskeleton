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
	
	public function insertBook($values)
	{
		$db = $this->_db;
		$db->insert('books',$values);
		return true;
	}
	
}