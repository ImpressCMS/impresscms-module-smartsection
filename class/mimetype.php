<?php
//$Id: mimetype.php 331 2007-12-23 16:01:11Z malanciault $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
if (!defined("XOOPS_ROOT_PATH")) {
die("XOOPS root path not defined");
}
include_once XOOPS_ROOT_PATH.'/modules/smartsection/include/common.php';
require_once(SMARTSECTION_ROOT_PATH.'class/baseObjectHandler.php');

/**
 * smartsectionMimetype class
 *
 * Information about an individual mimetype
 *
 * <code>
 * $hMime =& xoops_getModuleHandler('mimetype', 'smartsection');
 * $mimetype =& $hMime->get(1);
 * $mime_id = $mimetype->getVar('id');
 * </code>
 *
 * @author Eric Juden <ericj@epcusa.com>
 * @access public
 * @package smartsection
 */

class smartsectionMimetype extends XoopsObject {
    function smartsectionMimetype($id = null)
    {
        $this->initVar('mime_id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('mime_ext', XOBJ_DTYPE_TXTBOX, null, true, 60);
        $this->initVar('mime_types', XOBJ_DTYPE_TXTAREA, null, false, 1024);
        $this->initVar('mime_name', XOBJ_DTYPE_TXTBOX, NULL, true, 255);
        $this->initVar('mime_admin', XOBJ_DTYPE_INT, null, false);
        $this->initVar('mime_user', XOBJ_DTYPE_INT, null, false);
       
        if (isset($id)) {
		    if (is_array($id)) {
			    $this->assignVars($id);
			}
		} else {
			$this->setNew();
		} 
    }
}   // end of class

class smartsectionMimetypeHandler extends smartsectionBaseObjectHandler {
    /**
     * Name of child class
     * 
     * @var	string
     * @access	private
     */
	 var $classname = 'smartsectionmimetype';
	
	/**
	 * DB Table Name
	 *
	 * @var string
	 * @access private
	 */
	var $_dbtable = 'smartsection_mimetypes';
	
	/**
	 * Constructor
	 *
	 * @param object $db reference to a xoopsDB object
	 */
	function smartsectionMimetypeHandler(&$db) 
	{
		parent::init($db);
	}
    
    /**
	 * retrieve a mimetype object from the database
	 * @param	int	$id	ID of mimetype
	 * @return	object	{@link smartsectionMimetype}
	 * @access	public
	 */
	function &get($id)
	{
		$id = intval($id);
		if ($id > 0) {
			$sql = $this->_selectQuery(new Criteria('mime_id', $id));
			if (!$result = $this->_db->query($sql)) {
				return false;
			}
			$numrows = $this->_db->getRowsNum($result);
			if ($numrows == 1) {
				$obj = new $this->classname($this->_db->fetchArray($result));
				return $obj;
			}
		}
		return false;
	}
	
	/**
	 * retrieve objects from the database
	 * 
	 * @param object $criteria {@link CriteriaElement} conditions to be met
	 * @return array array of {@link smartsectionMimetype} objects
	 * @access	public	
	 */	
	function &getObjects($criteria = null)
	{
		$ret    = array();
		$limit  = $start = 0;
		$sql    = $this->_selectQuery($criteria);
		if (isset($criteria)) {		
			$limit = $criteria->getLimit();
			$start = $criteria->getStart();
		}
		//echo "<br />$sql<br />";
		$result = $this->_db->query($sql, $limit, $start);
		// if no records from db, return empty array
		if (!$result) {
			return $ret;
		}
		
		// Add each returned record to the result array
		while ($myrow = $this->_db->fetchArray($result)) {
			$obj = new $this->classname($myrow);
			$ret[] =& $obj;
			unset($obj);
		}
		return $ret;
	}
	
	/**
	 * Format mime_types into array
	 * 
	 * @return array array of mime_types
	 * @access public
	 */
	function getArray($mime_ext = null)
	{
	    global $smartsection_isAdmin, $xoopsUser, $xoopsModule;
	    
	    $ret = array();
	    if ($xoopsUser && !$smartsection_isAdmin){
            // For user uploading
            $crit = new CriteriaCompo(new Criteria('mime_user', 1));   //$sql = sprintf("SELECT * FROM %s WHERE mime_user=1", $xoopsDB->prefix('smartsection_mimetypes'));   
        } elseif ($xoopsUser && $smartsection_isAdmin){
            // For admin uploading
            $crit = new CriteriaCompo(new Criteria('mime_admin', 1));  //$sql = sprintf("SELECT * FROM %s WHERE mime_admin=1", $xoopsDB->prefix('smartsection_mimetypes'));
        } else {
            return $ret;
        }
        if($mime_ext){
            $crit->add(new Criteria('mime_ext', $mime_ext));
        }
        $result =& $this->getObjects($crit);
        
        // if no records from db, return empty array
		if (!$result) {
			return $ret;
		}
		
		foreach($result as $mime){
		    $line = split(" ", $mime->getVar('mime_types'));
		    foreach($line as $row){
		        $allowed_mimetypes[] = array('type'=>$row, 'ext'=>$mime->getVar('mime_ext'));
		    }
		}
		return $allowed_mimetypes;
	}
   /**
    * Checks to see if the user uploading the file has permissions to upload this mimetype
    * @param $post_field file being uploaded
    * @return false if no permission, return mimetype if has permission
    * @access public
    */
	function checkMimeTypes($post_field)
	{
		$fname = $_FILES[$post_field]['name'];
	    $farray = explode('.', $fname);
        $fextension = strtolower($farray[count($farray) -1]);
	    
        $allowed_mimetypes = $this->getArray();
        if(empty($allowed_mimetypes)){
            return false;
        }
        
        foreach($allowed_mimetypes as $mime){
            //echo $mime['type'];
            if($mime['type'] == $_FILES[$post_field]['type']){
                $allowed_mimetypes = $mime['type'];
                break;   
            } else {
                $allowed_mimetypes = false;
            }
        }
        return $allowed_mimetypes;
    }
    
	/**
	 * Create a "select" SQL query
	 * @param object $criteria {@link CriteriaElement} to match
	 * @return	string SQL query
	 * @access	private
	 */	
	function _selectQuery($criteria = null, $join = false)
	{
		if(!$join){
    		$sql = sprintf('SELECT * FROM %s', $this->_db->prefix($this->_dbtable));
	    } else {
	    	echo "no need for join..."; exit;
	    }
	    if (isset($criteria) && is_subclass_of($criteria, 'criteriaelement')) {
			$sql .= ' '.$criteria->renderWhere();
			if ($criteria->getSort() != '') {
				$sql .= ' ORDER BY '.$criteria->getSort().' '.$criteria->getOrder();
			}
		}
		return $sql;
	}
	
	function _insertQuery(&$obj)
    {
        // Copy all object vars into local variables
        foreach ($obj->cleanVars as $k => $v) {
            ${$k} = $v;
        }

        $sql = sprintf("INSERT INTO %s (mime_id, mime_ext, mime_types, mime_name, mime_admin, mime_user) VALUES
               (%u, %s, %s, %s, %u, %u)", $this->_db->prefix($this->_dbtable), $mime_id, $this->_db->quoteString($mime_ext),
               $this->_db->quoteString($mime_types), $this->_db->quoteString($mime_name), $mime_admin, $mime_user);
        return $sql;        
    }
    
    function _updateQuery(&$obj)
    {
        // Copy all object vars into local variables
        foreach ($obj->cleanVars as $k => $v) {
            ${$k} = $v;
        }

        $sql = sprintf("UPDATE %s SET mime_ext = %s, mime_types = %s, mime_name = %s, mime_admin = %u, mime_user = %u WHERE 
               mime_id = %u", $this->_db->prefix($this->_dbtable), $this->_db->quoteString($mime_ext), 
               $this->_db->quoteString($mime_types), $this->_db->quoteString($mime_name), $mime_admin, $mime_user, $mime_id);
        return $sql;
    }
    
    function _deleteQuery(&$obj)
    {
        $sql = sprintf('DELETE FROM %s WHERE mime_id = %u', $this->_db->prefix($this->_dbtable), $obj->getVar('mime_id'));
        return $sql;
    }
}   // end class
    
?>