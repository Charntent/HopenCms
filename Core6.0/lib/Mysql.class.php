<?php

/**
 * CWCMS  Mysql数据库操作文件
 * ============================================================================
 * * 版权所有 2013-2025 深圳万狼科技有限公司，并保留所有权利。
 * 网站地址: http://www.8888i.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: Charntent $
 * $Id: Mysql.class.php 202 2015-12-10 16:29:08Z Charntent $
 */

if(!defined('IN_SYS')) exit('Access Denied');

class Mysql{
    public $dbhost,$dbname,$dbuser,$dbpassword,$database_prex;
    public $link,$sql,$queryID,$tablename;
    public static $sqls=array();
    
    public function __construct() {
		global $dbhost,$dbuser,$dbpassword,$dbname,$database_prex;
		$this->dbhost = $dbhost;
        $this->dbname = $dbname;
		$this->dbuser = $dbuser;
		$this->dbpassword = $dbpassword;
		$this->database_prex = $database_prex;
    }
    
    public function init() {
    	if(!function_exists('mysql_pconnect')) die('ERROR:mysql_pconnect not exists IN file '.__FILE__.' ON line '.__LINE__ );
        $this->link = @mysql_pconnect($this->dbhost,$this->dbuser,$this->dbpassword);
		if(!$this->link){
            $this->halt('Can not connect to MySQL server');
        }
        $version = $this->version();
        $charset = 'utf8';
        if($version > '4.1') mysql_query("SET character_set_connection='$charset',character_set_results='$charset',character_set_client=binary",$this->link);
        if($version > '5.0.1') mysql_query("SET sql_mode=''", $this->link);
        if(!mysql_select_db($this->dbname)) $this->halt('Cannot use database '.$this->dbname);
        return $this->link;
    }
    
    public function setquery($sql) {
        $this->sql = $sql;
    }
    
    public function query($sql){
		if(!is_resource($this->link)) {
			$this->init();
		}
        $this->setquery($sql);
        $start = microtime(TRUE);
        $this->queryID = mysql_query($this->sql, $this->link) OR $this->halt();
        self::$sqls[] = array('time'=>number_format(microtime(TRUE) - $start, 6),'sql'=>$this->sql);
        return $this->queryID;
    }

    public function fetch($queryID='',$type=MYSQL_ASSOC){
        if(!is_resource($queryID)) $queryID = $this->queryID;
        return mysql_fetch_array($queryID, $type);
    }
    
    public function select($sql, $key=''){
        $this->query($sql);
        $list = array();
        while($rs = $this->fetch()){
            if($key){
                $list[$rs[$key]] = $rs;
            }else{
                $list[] = $rs;
            }
        }
        $this->free_result();
        return $list;
    }
    
    public function find($sql,$limit=true){
		if($limit===true){
			if(stripos($sql,'limit')===false) $sql = rtrim($sql,';').' limit 1;';
		}
        $this->query($sql);
        $rs = $this->fetch();
        $this->free_result();
        return $rs;
    }
	
	public function getfield($sql,$limit=true){
		$result = $this->find($sql,$limit);
		return is_array($result)?array_pop($result):$result;
	}
	
	public function data($data){
		set_gpc($data);
		return $this;
	}
	
	public function save($table){
		$rs = $this->select("SHOW COLUMNS FROM `$table`");
		foreach($rs as $r){
			if($r['Key'] == 'PRI'){
				$primary = $r['Field'];
				break;
			}
		}
		if( isset($_REQUEST[$primary]) && $this->find("select `$primary` from `$table` where `$primary`='{$_REQUEST[$primary]}' ") ){
			$value = gpc($primary);
			$where = "`$primary`='$value'";
			$data = array();
			
			foreach($rs as $row){
				$fieldname = $row['Field'];
				if(isset($_REQUEST[$fieldname])){
					$data[] = "`$fieldname` = '".$_REQUEST[$fieldname]."'";
				}
			}
			if(count($data)>0){
				$sql = "update `$table` set ".join(",",$data)." where ".$where;	
				
				return $this->query($sql);
			}
		}else{
			$fields = $values = array();
			foreach($rs as $row){
				$fieldname = $row['Field'];
				if(isset($_REQUEST[$fieldname])){
					$fields[] = "`$fieldname`";
					$values[] = "'".$_REQUEST[$fieldname]."'";
				}
			}
			if(count($fields)>0){
				$sql = "insert into `$table` (".join(',',$fields).") values (".join(',',$values).") ";
				$this->query($sql);
				return $this->insert_id();
			}
		}
	}
	
	public function insert_id() {
		return mysql_insert_id($this->link);
	}
    
	public function affected_rows() {
		return mysql_affected_rows($this->link);
	}
    
    public function result($queryID='', $row) {
        if(!is_resource($queryID)) $queryID = $this->queryID;
		$query = @mysql_result($queryID, $row);
		return $query;
	}
    
	public function close() {
		if(is_resource($this->link)) {
			mysql_close($this->link);
		}
	}
    
    public function free_result($queryID=''){
        if(!is_resource($queryID)) $queryID = $this->queryID;
        mysql_free_result($queryID);
    }
    
	public function version() {
		if(!is_resource($this->link)) {
			$this->init();
		}
		return mysql_get_server_info($this->link);
	}
    
	public function error() {
		return (($this->link) ? mysql_error($this->link) : mysql_error());
	}
    
	public function errno() {
		return intval(($this->link) ? mysql_errno($this->link) : mysql_errno());
	}
    
    public function halt($msg=''){
        $error = $this->error();
        $errno = $this->errno();
        $errmsg = '';
        if($error) $errmsg .= "<b> MySQL Error : </b> $error <br>";
        if($errno) $errmsg .= "<b>MySQL Errno : </b> $errno <br>";
        if($this->sql) $errmsg .= "<b>MySQL Query : </b> ".$this->sql." <br>";
        if($msg) $errmsg .= "<b>Error Message : </b> $msg <br />";
        if(!empty($errmsg)){
            echo '<div style="padding:10px;border:1px solid #F90;color:#666;font-family:Arial;">'.$errmsg.'</div>';
        }
        exit;
    }
	
	public function settable($table){
		$this->tablename = $table;
		$this->sql = "";
		return $this;       
	}
	
	public function t($table){
		$this->sql = '';
	    return  $this->settable($table); 
	}
	
	public function tb($table){
		$this->sql = '';
	    return  $this->settable($this->database_prex.$table); 
	}
	
	public function where($w){
		
		if(is_array($w)){
		
			$htmlbuild = '';
			foreach($w as $k=>$v){
                if(is_array($v)){
					
						foreach($v as $k1=>$v1){
							  //应该是三个数字！
							if($k1==0)
							  $htmlbuild .= ' AND `'.$v1.'`' ; 
							elseif($k1==2)
							  $htmlbuild .= " '".$v1."' " ; 
							else
							   $htmlbuild .= $v1 ; 
						}
				}else{
					
					//应该是三个数字！
					if($k==0)
					  $htmlbuild .= ' AND  '.$v.'' ; 
					elseif($k==2)
					  $htmlbuild  .= "  '".$v."'  " ; 
					else
					   $htmlbuild .=" ".$v."  " ; 
				}
			}
		    $this->sql = $this->sql." WHERE 1 ".$htmlbuild; 
		}else{
	     	$this->sql = $this->sql." WHERE ".$w;
		}
		return $this;       
	}
	
	public function orwhere($w){
		if(is_array($w)){
			$htmlbuild = '';
			foreach($w as $k=>$v){
                if(is_array($v)){
						foreach($v as $k1=>$v1){
							  //应该是三个数字！
							if($k1==0)
							  $htmlbuild .= ' OR (`'.$v1.'`' ; 
							elseif($k1==2)
							  $htmlbuild .= "'".$v1."' )" ; 
							else
							   $htmlbuild .= $v1 ; 
						}
				}else{
					//应该是三个数字！
					if($k==0)
					  $htmlbuild .= ' OR `'.$v.'`' ; 
					elseif($k==2)
					  $htmlbuild .= "'".$v."'" ; 
					else
					   $htmlbuild .= $v ; 
				}
			}
		   	$this->sql = $this->sql." WHERE 1 ".$htmlbuild; 
		}else{
	     	$this->sql = $this->sql." WHERE 1 OR ".$w;
		}
		return $this;       
	}
/*
	ON条件
*/
	public function on($w){
		if(is_array($w)){
			$htmlbuild = '';
			$jflag = 0 ;
			foreach($w as $k=>$v){
				
                if(is_array($v)){
					    
						foreach($w as $k=>$v){
							
							  //应该是三个数字！
							if($k==0){
								if( $jflag==0){
							       $htmlbuild .= ' ON '.$v ; 
							       $jflag++;
								}else{
								   $htmlbuild .= ' AND '.$v ; 
								}
							}
							elseif($k==2)
							  $htmlbuild .= " '".$v."' " ; 
							else
							   $htmlbuild .= " ".$v ; 
						}
				}else{
					//应该是三个数字！
					if($k==0)
					  $htmlbuild .= ' ON  '.$v ; 
					elseif($k==2){
						  if(strstr($v,'.'))
							 $htmlbuild .= " ".$v." " ; 
						  else{
							 $htmlbuild .= " '".$v."' " ;  
						  }
					}
					else
					   $htmlbuild .= $v ; 
				}
			}
		   	$this->sql = $this->sql." ".$htmlbuild; 
		}else{
	     	$this->sql = $this->sql." ON ".$w;
		}
		return $this;      
	}
	
	public function leftjoin($w){
		
	    $this->sql = $this->sql." ".implode(' LEFT JOIN ',$w);
		return $this;      
	}
	
	public function rightjoin($w){
		
	    $this->sql = $this->sql." ".implode(" RIGHT JOIN ",$w);
		return $this;      
	}
	public function innerjoin($w){
	    $this->sql = $this->sql." ".implode(" INNER JOIN ",$w);
		return $this;      
	}
	
	public function orderby($by,$xu="DESC"){
		$this->sql = $this->sql." ORDER BY ".$by." ".$xu;
		return $this;       
	}
	public function limit($limit){
		$this->sql = $this->sql." LIMIT ".$limit;
		return $this;       
	}
	
	public function all(){
		return $this->SelectData('*');
	}
	
	public function get($i,$field='*'){
		if($i<1){
			return false;
		}elseif($i==1){
			return  $this->FindData($field);
		}
	   return  $this->SelectData($field,$i);
	}
	public function SelectData($field,$limit=0){
		if($limit!=0){
			$this->limit($limit);
		}
		
		if($this->tablename !=''){
		     $this->sql = "SELECT  ".$field." FROM  `".$this->tablename."` ".$this->sql;
		}else{
			 $this->sql = "SELECT ".$field." FROM  ".$this->sql;
		}
		$tempsql = $this->sql;
		$this->sql = "";
		$this->tablename=""; 
		return $this->select($tempsql);       
	}
    public function FindData($field){
		
		if($this->tablename !=''){
		     $this->sql = "SELECT  ".$field." FROM  `".$this->tablename."` ".$this->sql;
		}else{
			 $this->sql = "SELECT ".$field." FROM  ".$this->sql;
		}
		$tempsql = $this->sql;
		$this->sql = "";
		$this->tablename=""; 
		return $this->find($tempsql);       
	}
	 public function FieldData($field){
		
		$this->sql = "SELECT ".$field." FROM ".$this->tablename.$this->sql;
		$tempsql = $this->sql;
		$this->sql = "";
		$this->tablename=""; 
		return $this->getfield($tempsql);       
	}
	
	public function UpdateTable($values, $where,$tabler='admin', $orderby = array(), $limit = FALSE){
		$table = ($this->tablename=="")?$tabler:$this->tablename;
		foreach ($values as $key => $val)
		{
			$valstr[] = "`".$key."`" . " = '" . $val ."'";
		}

		$limit = ( ! $limit) ? '' : ' LIMIT '.$limit;

		$orderby = (count($orderby) >= 1)?' ORDER BY '.implode(", ", $orderby):'';

		$sql = "UPDATE `".$table."` SET ".implode(', ', $valstr);

		$sql .= ($where != '' AND count($where) >=1) ? " WHERE ".implode(" ", $where) : '';

		$sql .= $orderby.$limit;

		return $this->query($sql);     
	}
	
	public function AddData($value,$tabler='admin'){
		$table = ($this->tablename=="")?$tabler:$this->tablename;
		foreach ($value as $key => $val)
		{
			$keys[] =  "`".$key."`";
			$values[] =  "'".$val."'";
		}
        $sql = "INSERT INTO `".$table."` (".implode(', ', $keys).") VALUES (".implode(', ', $values).")";
		
		return $this->query($sql);     
	}
	
	public function DeleteData($value,$pt='id',$tabler=''){
		if(empty($this->tablename) and $tabler == ''){ 
		    return false;
		}else{
			if($tabler != ''){
			    $this->tablename = $tabler;
			}
			
			$sql = "DELETE FROM ".$this->tablename."  WHERE  `".$pt."`=".$value;
			return $this->query($sql);  
		}
		
		    
	}
	
	
	public function GetCount($sql){
		return count($this->select($sql));
	}
    
	public  function getCol($sql,$temp)
    {
        $res = $this->query($sql);

        if ($res !== false)
        {
            $arr = array();
            while ($row = $this->fetch())
            {
				if(isset($row[$temp]))
                   $arr[] = $row[$temp];
				else{
				  break;	
				}
            }
         
            return $arr;
        }
        else
        {
            return false;
        }
    }
	public function setField($field,$v){
		if(!$this->tablename) return false;
		$sql = "UPDATE `".$this->tablename."` SET `".$field."` = '".$v."' ".$this->sql;
		return $this->query($sql); 
	}
}

?>