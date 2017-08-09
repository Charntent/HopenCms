<?php

/**
 * CWCMS  模板控制和标签控制文件
 * ============================================================================
 * * 版权所有 2013-2025 深圳万狼科技有限公司，并保留所有权利。
 * 网站地址: http://www.8888i.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: Charntent $
 * $Id: Template.class.php 202 2015-12-10 16:29:08Z Charntent $
 */
if(!defined('IN_SYS')) exit('Access Denied');
class Template{
    
    public $tpl,$compile;
    public static $tpls=array();
    
	protected $rules = array(
		// template
		'/(<\!--|\{)\s*(template|include|require)\s+([\.\w\/\\\]+)\s*(-->|\})/i' => '<?php include tpl("$3"); ?>',
		// function
		'/(\{|<\!--)(\s*[\w]+\(.*?\)\s*)(-->|\})/ie' => "Tag::_parse_function('$2')",
		// echo 
		'/\{\s*@?\$[\w\.\$]+\s*\}/sie' => "Tag::_parse_echo('$0')",
		'/\{(title|keywords|description|TPLSTYLE|BASEURL|WL_PUBLIC|_PUBLIC|_STATIC|LANG)\}/' => '<?php echo $1; ?>',
		// { to <!--
		'/\{\s*((if|else|elseif|foreach|sql|eval|\/if|\/foreach|\/sql).*?)\}/i' => '<!--$1 -->',
		'/<\!--\s*.*?\s*-->/sie' => "Tag::_parse_tag('$0')",
		// sql
		'/<\!--\s*sql\s+(.+?)\s*-->/i' => '<!--eval $_sql_result = \$db->select("$1");$_sql_result = Tag::sql_select($_sql_result); --><!--foreach $_sql_result -->',
		'/<\!--\s*\/sql\s*-->/i' => '<!--/foreach -->',
		// if
		'/<\!--\s*if\s+(.+?)\s*-->/i' => '<?php if($1) { ?>',
		'/<\!--\s*else\s*-->/i' => '<?php } else { ?>',
		'/<\!--\s*elseif\s+(.+?)\s*-->/i' => '<?php } elseif ($1) { ?>',
		'/<\!--\s*\/if\s*-->/i' => '<?php } ?>',
		// foreach
        '/<\!--\s*foreach\s+(\S+)\s*-->/i' => '<?php Tag::var_protect("IN"); $index=0; if(is_array($1)) foreach($1 as \$__i => \$__value) { if(is_array(\$__value)) { $index++; foreach(\$__value as \$__k=>\$__v){ \${\$__k}=\$__v; } } ?>',
		'/<\!--\s*foreach\s+(\S+)\s+(\S+)\s*-->/i' => '<?php Tag::var_protect("IN"); if(is_array($1)) foreach($1 as $2) { ?>',
		'/<\!--\s*foreach\s+(\S+)\s+(\S+)\s+(\S+)\s*-->/i' => '<?php Tag::var_protect("IN"); if(is_array($1)) foreach($1 as $2 => $3) { ?>',
		'/<\!--\s*\/foreach\s*-->/i' => '<?php };  Tag::var_protect("OUT"); ?>',
		// eval
		'/<\!--\s*eval\s+(.+?)\s*-->/is' => '<?php $1 ?>',
	);
    
    public function __construct($tpl,$tpldir,$cachedir)
    {
		$this->tpl = str_replace("/",DS,$tpldir.DS.$tpl);
		$this->compile = $cachedir.DS.$tpl;
    }

    public function view()
    {
		global $debug;

        if(!is_file($this->tpl)) exit("<p style=' margin:10px; border:1px solid #eee; text-align:center; padding:20px;'>The System Error：Templates[".$this->tpl."] Is Not Exists</p><p style='margin:10px;border:1px solid #eee; text-align:center; padding:20px;'>Please Look For The Man OF WLCMS PHPCoder(www.8888i.com)!</p>");
        self::$tpls[] = $this->tpl;
		if ($debug==true || !file_exists($this->compile) || @filemtime($this->tpl) > @filemtime($this->compile))
		{
			$this->_compile();
		}
		return $this->compile;
    }
    
    protected function _compile()
    {
    	$data = file_get_contents($this->tpl);
        $data = $this->_parse($data);
		$dir = dirname($this->compile);
		if(!is_dir($dir)){
			@mkdir($dir,0777,true);
		}
    	if(false === @file_put_contents($this->compile, $data)) exit("$this->compile file is not writable");
    	@chmod($this->compile, 0774);
    	return true;
    }
    
   	protected function _parse($string)
	{
		$string = $this->_before($string);
		$string = preg_replace(array_keys($this->rules), $this->rules, $string);
		return $this->_after($string);
	}
    
	protected function _before($string){
		return $string;
	}
	
	protected function _after($string){
		if(!defined("IS_ADMIN") || !empty($GLOBALS['is_user_tpl'])){
			$string = str_replace('../static/',$GLOBALS['sitepath'].'/static/',$string);
		}
		return $string;	
	}
	
    public function loaded_tpl(){
        return self::$tpls;
    }
    
}

?>