/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : hopencms

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-07-22 12:14:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1');
INSERT INTO `admin` VALUES ('6', 'test', 'e10adc3949ba59abbe56e057f20f883e', '3');

-- ----------------------------
-- Table structure for `ads`
-- ----------------------------
DROP TABLE IF EXISTS `ads`;
CREATE TABLE `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `abc` varchar(100) DEFAULT NULL,
  `adtype` varchar(10) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `flash` varchar(255) DEFAULT NULL,
  `width` int(4) DEFAULT NULL,
  `height` int(4) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `txt` text,
  `content` text,
  `lang` varchar(50) DEFAULT NULL,
  `weight` int(10) DEFAULT '100',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ads
-- ----------------------------
INSERT INTO `ads` VALUES ('22', '手机版', 'mobile', 'index', '图片广告', 'Uploads/cms5/20170410/q911kp6cvv4hpun10-33-57.jpg', '', '0', '0', '', '', '<a href=\"\" target=\"_blank\"><img src=\"Uploads/cms5/20170410/q911kp6cvv4hpun10-33-57.jpg\" width=\"0\" height=\"0\"/></a>', 'zh_cn', '0');
INSERT INTO `ads` VALUES ('23', '使用帮助', 'PC', 'index', '图片广告', 'Uploads/cms5/20170410/ajcjazodh7v6ka910-31-59.jpg', '', '0', '0', '', '', '<a href=\"\" target=\"_blank\"><img src=\"Uploads/cms5/20170410/ajcjazodh7v6ka910-31-59.jpg\" width=\"0\" height=\"0\"/></a>', 'zh_cn', '-1');
INSERT INTO `ads` VALUES ('24', '2016-08-18日更新', 'PC', 'index', '图片广告', '', '', '0', '0', '', '', '', 'zh_cn', '1');
INSERT INTO `ads` VALUES ('25', '使用帮助', 'PC', 'index', '图片广告', '', '', '0', '0', '', '', '', 'zh_cn', '0');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catid` smallint(3) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `etitle` varchar(255) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `laytpl` varchar(50) DEFAULT NULL,
  `thumb` text,
  `flag` varchar(255) DEFAULT NULL,
  `alt` varchar(200) DEFAULT NULL,
  `tags` text,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `fields` longtext,
  `field1` text,
  `field2` text,
  `field3` text,
  `field4` text,
  `field5` text,
  `createtime` int(11) DEFAULT NULL,
  `realclick` int(10) DEFAULT '0',
  `click` int(10) DEFAULT '0',
  `weight` int(8) NOT NULL DEFAULT '100',
  `recommend` tinyint(2) DEFAULT '0',
  `lang` varchar(50) DEFAULT NULL,
  `art_url` varchar(150) DEFAULT NULL,
  `is_top` tinyint(1) DEFAULT '0',
  `out_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('250', '520', '添加一个文章', '添加', null, null, '', 'c', '', '', null, '添加添加', '添加添加', null, null, null, null, null, null, '1491818838', '10', '5700', '100', '0', 'zh_cn', 'hynews_250', '0', '');
INSERT INTO `article` VALUES ('251', '2', '产品', '', null, 'Products/VR/V3/index', '', '', '', '', '', '中文版的产品详情', '中文版的产品详情', null, null, null, null, null, null, '1492411610', '37', '5139', '100', '0', 'zh_cn', 'product_251', '0', '');

-- ----------------------------
-- Table structure for `attachments`
-- ----------------------------
DROP TABLE IF EXISTS `attachments`;
CREATE TABLE `attachments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` smallint(4) NOT NULL,
  `type` varchar(10) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `url` varchar(250) NOT NULL,
  `fsize` float(6,2) DEFAULT NULL,
  `addtime` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `index` (`type`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of attachments
-- ----------------------------

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) DEFAULT NULL,
  `menugroup` varchar(20) DEFAULT '0',
  `catname` varchar(50) DEFAULT NULL,
  `ename` varchar(50) DEFAULT NULL,
  `catgroup` varchar(50) DEFAULT NULL COMMENT '栏目分组',
  `cattype` varchar(20) DEFAULT NULL,
  `subtype` varchar(255) DEFAULT NULL,
  `cattitle` varchar(200) DEFAULT NULL,
  `keywords1` varchar(200) DEFAULT NULL,
  `description1` varchar(250) DEFAULT NULL,
  `mbtitle` varchar(200) DEFAULT NULL,
  `mbkeywords` varchar(200) DEFAULT NULL,
  `mbdescription` varchar(200) DEFAULT NULL,
  `dir` varchar(50) DEFAULT NULL,
  `ident` varchar(200) DEFAULT NULL COMMENT '栏目标识，多语言对应',
  `transname` varchar(200) DEFAULT NULL COMMENT '备注名称',
  `icon` varchar(200) DEFAULT NULL,
  `e_subtype` tinyint(1) DEFAULT '0',
  `title` tinyint(1) DEFAULT '1',
  `thumb` tinyint(1) DEFAULT '0',
  `pic` varchar(200) DEFAULT NULL,
  `mbpic` varchar(200) DEFAULT NULL,
  `keywords` tinyint(1) DEFAULT '0',
  `description` tinyint(1) DEFAULT '0',
  `content` tinyint(4) DEFAULT '1',
  `template` varchar(30) DEFAULT NULL,
  `fields` text,
  `phpscript` varchar(200) DEFAULT NULL,
  `pagesize` int(3) DEFAULT '20',
  `weight` int(5) DEFAULT '100',
  `show` tinyint(1) DEFAULT '1',
  `e_sort` tinyint(1) NOT NULL DEFAULT '0',
  `isend` tinyint(1) DEFAULT '0',
  `lang` varchar(50) DEFAULT NULL,
  `cat_url` varchar(200) DEFAULT NULL,
  `addpare` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('-102', '0', '会员模块', '管理员', null, null, 'diypage', '', null, null, null, null, null, null, null, null, null, 'glyphicon-user', '0', '0', '0', null, null, '0', '0', '0', '', '', 'admin?action=list|', '0', '1004', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-100', '0', '扩展功能', '友情', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-retweet', '0', '0', '0', null, null, '0', '0', '0', '', '网址|siteurl|input||http://', 'datalist?table=flink|', '0', '1000', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-101', '0', '系统管理', '系统', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-cog', '0', '0', '0', null, null, '0', '0', '0', '', '', 'setting', '0', '1000', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-103', '0', '会员模块', '权限', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-lock', '0', '0', '0', null, null, '0', '0', '0', '', '', 'purview', '0', '1002', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-104', '0', '会员模块', '用户组', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-tint', '0', '0', '0', null, null, '0', '0', '0', '', '', 'usergroup', '0', '1007', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-105', '0', '系统管理', 'roBots', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-comment', '0', '0', '0', null, null, '0', '0', '0', '', '', 'robots|', '0', '1006', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-106', '0', '扩展功能', '留言', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-map-marker', '0', '0', '0', null, null, '0', '0', '0', '', '', 'datalist?table=guestbook|', '0', '1002', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-110', '0', '扩展功能', '广告', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-flag', '0', '0', '0', null, null, '0', '0', '0', '', '', 'datalist?table=ads|', '0', '999', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-107', '0', '系统管理', '数据库', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-repeat', '0', '0', '0', null, null, '0', '0', '0', '', '', 'backup|', '0', '1003', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-108', '-107', '0', '数据库恢复', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-refresh', '0', '0', '0', null, null, '0', '0', '0', '', '', 'backup?action=recover|', '0', '1003', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-109', '0', '系统管理', 'siteMap', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-screenshot', '0', '0', '0', null, null, '0', '0', '0', '', '', 'sitemap|', '0', '1004', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-111', '0', '系统管理', '缓存', null, null, 'diypage', null, '', null, null, null, null, null, null, null, null, 'glyphicon-refresh', '0', '0', '0', null, null, '0', '0', '0', '', null, 'cache', '0', '999', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-112', '0', '扩展功能', 'SEO', null, null, 'diypage', '', '', null, null, null, null, null, null, null, null, 'glyphicon-random', '0', '0', '0', null, null, '0', '0', '0', '', '', 'seotitle?action=list', '0', '1004', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-155', '0', '系统管理', '模板', null, null, 'diypage', '', null, null, null, null, null, null, '', null, null, ' glyphicon-th-large', '0', '0', '0', null, null, '0', '0', '0', '', '', 'template|', '0', '1002', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-156', '0', '系统管理', '语言', '', '', 'diypage', '', '', '', '', null, null, null, '', '', '', 'glyphicon-font', '0', '0', '0', '', null, '0', '0', '0', '', '', 'lang|', '0', '1002', '0', '0', null, 'al', null, '0');
INSERT INTO `category` VALUES ('-157', '0', '系统管理', '静态', null, null, 'diypage', null, null, null, null, null, null, null, 'html', 'html', null, 'glyphicon-font', '0', '0', '0', null, null, '0', '0', '0', null, null, 'makehtml|', '20', '1003', '1', '0', '0', 'al', null, '0');
INSERT INTO `category` VALUES ('-158', '0', '扩展功能', '附件', null, '', 'diypage', '', null, null, null, null, null, null, 'attachments', 'W0007k5ulg', 'attachments', ' glyphicon-leaf', '0', '0', '0', null, null, '0', '0', '1', '', '', 'attach|', '20', '1005', '1', '0', '0', 'al', 'attachments', '0');
INSERT INTO `category` VALUES ('1', '0', '内容管理', '关于我们', null, 'article', 'page', '', null, null, null, null, null, null, 'about', 'W0612vj4vi', '新闻中心', ' glyphicon-cog', '0', '1', '1', null, null, '1', '1', '1', 'page', '', 'datalist?table=表名|', '20', '1', '1', '0', '0', 'zh_cn', 'about', '0');
INSERT INTO `category` VALUES ('2', '0', '内容管理', '产品中心', null, 'article', 'article', '', null, null, null, null, null, null, 'product', 'W0641ot6yk', '行业新闻', ' glyphicon-signal', '0', '1', '1', null, null, '1', '1', '1', 'article|show', '', 'datalist?table=表名|', '20', '2', '1', '0', '0', 'zh_cn', 'product', '0');
INSERT INTO `category` VALUES ('3', '0', '内容管理', '新闻动态', null, 'article', 'article', '', null, null, null, null, null, null, 'news', 'W5145v8k9a', '测试栏目', ' glyphicon-th', '0', '1', '1', null, null, '1', '1', '1', 'article|show', '', 'datalist?table=表名|', '20', '3', '1', '0', '0', 'zh_cn', 'news', '0');
INSERT INTO `category` VALUES ('9', '3', '0', '公司新闻', null, null, 'article', null, null, null, null, null, null, null, 'gsxw', 'W4227zg71v', '公司新闻', ' glyphicon-th', '0', '1', '1', null, null, '1', '1', '1', 'article|show', null, 'datalist?table=表名|', '20', '100', '1', '1', '0', 'zh_cn', 'news/gsxw', '1');
INSERT INTO `category` VALUES ('8', '0', '内容管理', '成功案例', null, null, 'article', null, null, null, null, null, null, null, 'case', 'W4142qwjdr', '成功案例', ' glyphicon-th', '0', '1', '1', null, null, '1', '1', '1', 'article|show', null, 'datalist?table=表名|', '20', '4', '1', '0', '0', 'zh_cn', 'case', '0');
INSERT INTO `category` VALUES ('14', '0', '内容管理', 'PRODUCT', null, null, 'article', null, null, null, null, null, null, null, 'product', 'W4720z0mre', 'PRODUCT', ' glyphicon-th', '0', '1', '1', null, null, '1', '1', '1', 'article|show', null, 'datalist?table=表名|', '20', '100', '1', '0', '0', 'english', 'product', '0');
INSERT INTO `category` VALUES ('13', '0', '内容管理', '在线留言', null, null, 'diypage', null, null, null, null, null, null, null, 'guestbook', 'W44302fd3j', '在线留言', ' glyphicon-th', '0', '1', '1', null, null, '1', '1', '1', 'guestbook', null, 'datalist?table=guestbook|guestbook', '20', '100', '1', '0', '0', 'zh_cn', 'guestbook', '0');
INSERT INTO `category` VALUES ('10', '3', '0', '行业动态', null, null, 'article', null, null, null, null, null, null, null, 'hynews', 'W4252amrv0', '行业动态', ' glyphicon-th', '0', '1', '1', null, null, '1', '1', '1', 'article|show', null, 'datalist?table=表名|', '20', '100', '1', '1', '0', 'zh_cn', 'hynews', '0');
INSERT INTO `category` VALUES ('11', '2', '0', '产品分类一', null, null, 'article', null, null, null, null, null, null, null, 'pr1', 'W4325zmu4z', '产品分类一', ' glyphicon-th', '0', '1', '1', null, null, '1', '1', '1', 'article|show', null, 'datalist?table=表名|', '20', '100', '1', '0', '0', 'zh_cn', 'pr1', '0');
INSERT INTO `category` VALUES ('12', '2', '0', '产品分类二', null, null, 'article', null, null, null, null, null, null, null, 'pr2', 'W4404l5pxu', '产品分类二', ' glyphicon-th', '0', '1', '1', null, null, '1', '1', '1', 'article|show', null, 'datalist?table=表名|', '20', '100', '1', '0', '0', 'zh_cn', 'pr2', '0');

-- ----------------------------
-- Table structure for `flink`
-- ----------------------------
DROP TABLE IF EXISTS `flink`;
CREATE TABLE `flink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `lang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of flink
-- ----------------------------

-- ----------------------------
-- Table structure for `guestbook`
-- ----------------------------
DROP TABLE IF EXISTS `guestbook`;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `company` varchar(200) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `content` text,
  `username` varchar(50) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `qq` varchar(15) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `addtime` int(11) DEFAULT NULL,
  `lang` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of guestbook
-- ----------------------------

-- ----------------------------
-- Table structure for `langs`
-- ----------------------------
DROP TABLE IF EXISTS `langs`;
CREATE TABLE `langs` (
  `langid` varchar(50) NOT NULL DEFAULT '',
  `langname` varchar(150) DEFAULT NULL,
  `langphp` varchar(50) DEFAULT NULL COMMENT '语言包的名称',
  `isdefault` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`langid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of langs
-- ----------------------------
INSERT INTO `langs` VALUES ('zh_cn', '中文版', 'zh_cn', '1');
INSERT INTO `langs` VALUES ('english', '英文版', 'english', '0');

-- ----------------------------
-- Table structure for `page`
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `keywords` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `thumb` varchar(200) DEFAULT NULL,
  `alt` varchar(200) DEFAULT NULL,
  `content` text,
  `fields` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=524 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('521', null, null, null, null, null, null, null);
INSERT INTO `page` VALUES ('522', null, null, null, null, null, null, null);
INSERT INTO `page` VALUES ('523', null, null, null, null, null, null, null);
INSERT INTO `page` VALUES ('13', null, null, null, null, null, null, null);
INSERT INTO `page` VALUES ('1', 'fsda', '', '', '', '', '<p>\r\n	<table width=\"832\" cellspacing=\"0\" cellpadding=\"2\" border=\"1\" height=\"337\">\r\n		<tbody>\r\n			<tr>\r\n				<td>\r\n					<h3>\r\n						<span style=\"color:#6633CC;\">中国品牌设计50强</span> \r\n					</h3>\r\n				</td>\r\n				<td>\r\n					<h3>\r\n						<span style=\"color:#6633CC;\">标题1</span> \r\n					</h3>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<span style=\"background-color:#003399;color:#6633CC;\">China Brand Design TOP50</span> \r\n				</td>\r\n				<td>\r\n					内容2\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					中国品牌设计公司排行榜是从历年品牌设计榜单、 设计年鉴及著名设计杂志和设计网站中的3939家设 计及相关公司评选而出的，评选依据7大标准对三千 多家设计公司进行了严格审核，最终选出了50家具 有实力和代表性的品牌设计公司！\r\n				</td>\r\n				<td>\r\n					内容4\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n<span style=\"font-size:small;\"><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"font-size:small;\"><img src=\"http://www.local.com/HopenCms/Uploads/cms5/image/20170422/20170422180102_77818.jpg\" alt=\"\" /><br />\r\n</span> \r\n</p>', 's:0:\"\";');

-- ----------------------------
-- Table structure for `purview`
-- ----------------------------
DROP TABLE IF EXISTS `purview`;
CREATE TABLE `purview` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `class` varchar(20) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  `method` varchar(255) NOT NULL,
  `url` varchar(100) NOT NULL,
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`)
) ENGINE=MyISAM AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of purview
-- ----------------------------
INSERT INTO `purview` VALUES ('1', '0', 'system', '', '', '', '1', '1');
INSERT INTO `purview` VALUES ('2', '32', 'purview', '', 'list,add,edit,del,order', 'admin.php/purview.html', '0', '1');
INSERT INTO `purview` VALUES ('3', '32', 'usergroup', '', 'list,add,edit,del,order,grant', 'admin.php/usergroup.html', '0', '1');
INSERT INTO `purview` VALUES ('4', '32', 'admin', '', 'sub,list,add,edit,del,deletefile,ui,lang,homepage', '', '1', '1');
INSERT INTO `purview` VALUES ('19', '1', 'setting', '', 'list,save,setstatus,add,del,edit', '', '0', '1');
INSERT INTO `purview` VALUES ('32', '0', 'member', '', '', '', '0', '1');
INSERT INTO `purview` VALUES ('67', '1', 'backup', '', 'list,export,import,del,down,zip,recover,repair,optimize', '', '1', '1');
INSERT INTO `purview` VALUES ('37', '1', 'cache', '', 'list,clear', '', '2', '1');
INSERT INTO `purview` VALUES ('68', '0', 'extendmodule', '', '', '', '3', '1');
INSERT INTO `purview` VALUES ('69', '68', 'datalist', '', 'list,setting,add,view,edit,del,tg,huifu', '', '0', '1');
INSERT INTO `purview` VALUES ('71', '68', 'seotitle', '', 'list,edit', '', '1', '1');
INSERT INTO `purview` VALUES ('72', '1', 'lang', '', 'list,del,add,edit', '', '2', '1');
INSERT INTO `purview` VALUES ('73', '1', 'template', '', 'list,save', '', '4', '1');
INSERT INTO `purview` VALUES ('74', '1', 'makehtml', '', 'list,makehome,makelist,makearticle', '', '5', '1');
INSERT INTO `purview` VALUES ('76', '0', 'devmodule', '', '', '', '4', '1');
INSERT INTO `purview` VALUES ('77', '76', 'dev', '', 'list,setdelall,getroups,setgroups,setgroups_do,add,edit,del,group,batchadd', '', '5', '1');
INSERT INTO `purview` VALUES ('78', '0', 'contentmodule', '', '', '', '5', '1');
INSERT INTO `purview` VALUES ('79', '78', 'article', '', 'list,settop,endtop,add,setcategory,edit,del,delall,e_subtype,success', '', '0', '1');
INSERT INTO `purview` VALUES ('80', '78', 'page', '', 'list,edit', '', '99', '1');
INSERT INTO `purview` VALUES ('82', '1', 'sitemap', '', 'list', '', '6', '1');
INSERT INTO `purview` VALUES ('83', '1', 'robots', '', 'list,save', '', '99', '1');
INSERT INTO `purview` VALUES ('84', '68', 'attach', '', 'list,del', '', '99', '1');

-- ----------------------------
-- Table structure for `setting`
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `default` text,
  `type` set('input','textarea','file','select','radio','checkbox','editor','minieditor') DEFAULT NULL,
  `desc` text,
  `issystem` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `weight` int(8) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20025 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'PC网站名称', 'sitename', '', 'input', '', '0', '1', null);
INSERT INTO `setting` VALUES ('3', 'PC网站关键词', 'keywords', '', 'textarea', '填写网站关键词，多个用 \",\" 分隔', '0', '1', null);
INSERT INTO `setting` VALUES ('4', 'PC网站描述', 'description', '', 'textarea', '', '0', '1', null);
INSERT INTO `setting` VALUES ('20', '联系方式', 'contact', '', 'textarea', '', '4', '1', null);
INSERT INTO `setting` VALUES ('123', '随机点击数范围', 'addfanwei', '', 'input', '比如5000,6000', '1', '1', '1');
INSERT INTO `setting` VALUES ('2', 'PC网站首页标题', 'indextitle', '', 'input', '首页标题', '0', '1', null);
INSERT INTO `setting` VALUES ('12', '图片是否续上域名', 'imgaddwebsite', '是,否', 'radio', '', '1', '1', '1');
INSERT INTO `setting` VALUES ('22', '联系手机号码', 'phone', '', 'input', '', '4', '1', null);
INSERT INTO `setting` VALUES ('13', '网站logo', 'logo', '', 'file', '', '3', '1', '100');
INSERT INTO `setting` VALUES ('14', '公司电话', 'tel', '', 'input', '', '4', '1', '100');
INSERT INTO `setting` VALUES ('17', '站点统计', 'code', '', 'textarea', '', '0', '1', '100');
INSERT INTO `setting` VALUES ('15', '备案信息', 'icp', '', 'input', '', '0', '1', '12');
INSERT INTO `setting` VALUES ('23', '公司地址', 'address', '', 'input', '', '4', '1', null);
INSERT INTO `setting` VALUES ('24', '公司名称', 'companyname', '', 'input', '', '4', '1', null);
INSERT INTO `setting` VALUES ('25', '网站分享代码', 'fenxiang', '', 'textarea', '', '4', '1', null);
INSERT INTO `setting` VALUES ('26', 'QQ客服的代码', 'kefu', '', 'textarea', '', '4', '1', null);
INSERT INTO `setting` VALUES ('6', '系统URl优化', 'UrlOptimization', '是,否', 'radio', '', '1', '1', '1');
INSERT INTO `setting` VALUES ('7', '伪静态类型', 'rewrite_type', '程序伪静态,apache自动url重写,静态,动态', 'radio', '', '2', '1', null);
INSERT INTO `setting` VALUES ('27', '400电话', 'rexian400', '', 'input', '', '4', '1', null);
INSERT INTO `setting` VALUES ('11', '开启调试模式', 'debug', '是,否', 'radio', '请选择', '1', '1', '1');
INSERT INTO `setting` VALUES ('100', '压缩页面输出', 'ob_gzhandler', '是,否', 'radio', '', '1', '1', '1');
INSERT INTO `setting` VALUES ('20023', '版权信息', 'copyright', '', 'input', '', '0', '1', '12');
INSERT INTO `setting` VALUES ('20024', '后台分页数量', 'listnumber', '10', 'input', '用于后台所有列表的分页数量', '3', '1', '0');
INSERT INTO `setting` VALUES ('20011', '静态文件夹', 'html_forder', '', 'input', '', '2', '1', null);
INSERT INTO `setting` VALUES ('20012', '后台editor', 'cms_editor', 'kindeditor,ueditor,ckeditor,wangeditor', 'radio', '', '1', '1', '1');
INSERT INTO `setting` VALUES ('20015', '手机网站名称', 'msitename', '', 'input', '', '0', '1', null);
INSERT INTO `setting` VALUES ('20016', '手机版首页名称', 'mindextitle', '', 'input', '', '0', '1', null);
INSERT INTO `setting` VALUES ('20017', '手机版网站关键词', 'mkeywords', '', 'textarea', '', '0', '1', null);
INSERT INTO `setting` VALUES ('20018', '手机版网站描述', 'mdescription', '', 'textarea', '', '0', '1', null);
INSERT INTO `setting` VALUES ('20019', '自动sitemap到百度', 'issitemap', 'yes,no', 'radio', '', '0', '1', '10');
INSERT INTO `setting` VALUES ('20020', '百度token', 'baidutoken', '', 'input', '', '0', '1', '11');
INSERT INTO `setting` VALUES ('20022', '关闭站点', 'closeWeb', 'yes,no', 'radio', '', '1', '1', '0');

-- ----------------------------
-- Table structure for `svalue`
-- ----------------------------
DROP TABLE IF EXISTS `svalue`;
CREATE TABLE `svalue` (
  `sname` varchar(50) NOT NULL,
  `lang` varchar(50) NOT NULL DEFAULT '',
  `value` longtext,
  PRIMARY KEY (`sname`,`lang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of svalue
-- ----------------------------
INSERT INTO `svalue` VALUES ('sitename', 'zh_cn', '万狼CMS6.0演示站');
INSERT INTO `svalue` VALUES ('indextitle', 'zh_cn', '深圳建站_网站建设_微信定制_商城定制_Wlcms_万狼科技');
INSERT INTO `svalue` VALUES ('keywords', 'zh_cn', '深圳建站,多语言网站,手机pc同步,网站建设,微信定制,商城定制,自助建站,智能建站,Wlcms,万狼科技');
INSERT INTO `svalue` VALUES ('description', 'zh_cn', 'WLCMS是万狼科技历经五年精心推出针对企业多语言，PC、手机、微信三网合一，一个后台的建站系统，简单不失强大，美妙不可言！');
INSERT INTO `svalue` VALUES ('fenxiang', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('kefu', 'zh_cn', '55415455,45455415,451515');
INSERT INTO `svalue` VALUES ('addfanwei', 'zh_cn', '5000,6000');
INSERT INTO `svalue` VALUES ('wlcms_templates', '', 'a:4:{s:5:\"pcurl\";a:2:{s:5:\"zh_cn\";s:13:\"www.local.com\";s:7:\"english\";s:13:\"www.local.com\";}s:6:\"pctemp\";a:2:{s:5:\"zh_cn\";s:4:\"cms5\";s:7:\"english\";s:4:\"cms5\";}s:5:\"mburl\";a:2:{s:5:\"zh_cn\";s:13:\"www.local.com\";s:7:\"english\";s:13:\"www.local.com\";}s:6:\"mbtemp\";a:2:{s:5:\"zh_cn\";s:5:\"Touch\";s:7:\"english\";s:5:\"Touch\";}}');
INSERT INTO `svalue` VALUES ('mtitle', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('UrlOptimization', 'zh_cn', '是');
INSERT INTO `svalue` VALUES ('debug', 'zh_cn', '否');
INSERT INTO `svalue` VALUES ('imgaddwebsite', 'zh_cn', '是');
INSERT INTO `svalue` VALUES ('logo', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('tel', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('code', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('ob_gzhandler', 'zh_cn', '是');
INSERT INTO `svalue` VALUES ('rewrite_type', 'zh_cn', '程序伪静态');
INSERT INTO `svalue` VALUES ('icp', 'zh_cn', '粤ICP 15-8545562');
INSERT INTO `svalue` VALUES ('contact', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('phone', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('address', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('companyname', 'zh_cn', '');
INSERT INTO `svalue` VALUES ('rexian400', 'zh_cn', '400-185-8996');
INSERT INTO `svalue` VALUES ('html_forder', 'zh_cn', 'html');
INSERT INTO `svalue` VALUES ('copyright', 'zh_cn', 'Copyright © 2014-2017 WLCMS All rights reserved.');
INSERT INTO `svalue` VALUES ('cms_editor', 'zh_cn', 'wangeditor');
INSERT INTO `svalue` VALUES ('msitename', 'zh_cn', '万狼CMS6.0演示站手机版');
INSERT INTO `svalue` VALUES ('mindextitle', 'zh_cn', '深圳建站_网站建设_微信定制_商城定制_Wlcms_万狼科技手机版');
INSERT INTO `svalue` VALUES ('mkeywords', 'zh_cn', '深圳建站,多语言网站,手机pc同步,网站建设,微信定制,商城定制,自助建站,智能建站,Wlcms,万狼科技');
INSERT INTO `svalue` VALUES ('mdescription', 'zh_cn', 'WLCMS是万狼科技历经五年精心推出针对企业多语言，PC、手机、微信三网合一，一个后台的建站系统，简单不失强大，美妙不可言！');
INSERT INTO `svalue` VALUES ('issitemap', 'zh_cn', 'yes');
INSERT INTO `svalue` VALUES ('baidutoken', 'zh_cn', 'oTNHq3AQ0WT1vjnB');
INSERT INTO `svalue` VALUES ('closeWeb', 'zh_cn', 'no');
INSERT INTO `svalue` VALUES ('listnumber', 'zh_cn', '10');
INSERT INTO `svalue` VALUES ('sitename', 'english', 'english');
INSERT INTO `svalue` VALUES ('indextitle', 'english', 'english');
INSERT INTO `svalue` VALUES ('keywords', 'english', 'english');
INSERT INTO `svalue` VALUES ('description', 'english', 'english');
INSERT INTO `svalue` VALUES ('msitename', 'english', 'english');
INSERT INTO `svalue` VALUES ('mindextitle', 'english', 'english');
INSERT INTO `svalue` VALUES ('mkeywords', 'english', 'english');
INSERT INTO `svalue` VALUES ('mdescription', 'english', 'english');
INSERT INTO `svalue` VALUES ('issitemap', 'english', 'no');
INSERT INTO `svalue` VALUES ('baidutoken', 'english', '');
INSERT INTO `svalue` VALUES ('icp', 'english', '');
INSERT INTO `svalue` VALUES ('copyright', 'english', '');
INSERT INTO `svalue` VALUES ('code', 'english', '');
INSERT INTO `svalue` VALUES ('closeWeb', 'english', 'no');
INSERT INTO `svalue` VALUES ('UrlOptimization', 'english', '是');
INSERT INTO `svalue` VALUES ('debug', 'english', '否');
INSERT INTO `svalue` VALUES ('imgaddwebsite', 'english', '否');
INSERT INTO `svalue` VALUES ('ob_gzhandler', 'english', '是');
INSERT INTO `svalue` VALUES ('addfanwei', 'english', '');
INSERT INTO `svalue` VALUES ('cms_editor', 'english', 'kindeditor');
INSERT INTO `svalue` VALUES ('rewrite_type', 'english', '程序伪静态');
INSERT INTO `svalue` VALUES ('html_forder', 'english', '');

-- ----------------------------
-- Table structure for `tags`
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `listorder` mediumint(9) unsigned NOT NULL DEFAULT '999',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `lang` varchar(20) NOT NULL DEFAULT 'zh_cn',
  `nums` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `lang` (`lang`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tags
-- ----------------------------
INSERT INTO `tags` VALUES ('78', 'asf', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('79', 'vxzxcv', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('80', 'asfd', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('81', 'dsfaafds', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('82', 'ffsda', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('83', 'fdsadsfa', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('84', 'dfsafsda', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('85', 'fasd', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('86', 'fsdfads', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('87', 'fadsdsfa', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('88', 'fdsa', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('89', 'sdfa', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('90', 'fsda', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('91', 'fads', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('92', '撒旦法', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('93', '范德萨', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('94', 'sadf', '', '0', '1', 'zh_cn', '0');
INSERT INTO `tags` VALUES ('95', 'mo003', '', '0', '1', 'zh_cn', '0');

-- ----------------------------
-- Table structure for `usergroup`
-- ----------------------------
DROP TABLE IF EXISTS `usergroup`;
CREATE TABLE `usergroup` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `varname` varchar(20) NOT NULL,
  `listorder` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `purview` text NOT NULL,
  `isupdate` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usergroup
-- ----------------------------
INSERT INTO `usergroup` VALUES ('1', '超级管理员', '2', 'a:17:{s:7:\"setting\";a:6:{s:4:\"list\";i:1;s:4:\"save\";i:1;s:9:\"setstatus\";i:1;s:3:\"add\";i:1;s:3:\"del\";i:1;s:4:\"edit\";i:1;}s:6:\"backup\";a:9:{s:4:\"list\";i:1;s:6:\"export\";i:1;s:6:\"import\";i:1;s:3:\"del\";i:1;s:4:\"down\";i:1;s:3:\"zip\";i:1;s:7:\"recover\";i:1;s:6:\"repair\";i:1;s:8:\"optimize\";i:1;}s:5:\"cache\";a:2:{s:4:\"list\";i:1;s:5:\"clear\";i:1;}s:4:\"lang\";a:4:{s:4:\"list\";i:1;s:3:\"del\";i:1;s:3:\"add\";i:1;s:4:\"edit\";i:1;}s:8:\"template\";a:2:{s:4:\"list\";i:1;s:4:\"save\";i:1;}s:8:\"makehtml\";a:4:{s:4:\"list\";i:1;s:8:\"makehome\";i:1;s:8:\"makelist\";i:1;s:11:\"makearticle\";i:1;}s:7:\"sitemap\";a:1:{s:4:\"list\";i:1;}s:6:\"robots\";a:2:{s:4:\"list\";i:1;s:4:\"save\";i:1;}s:7:\"purview\";a:5:{s:4:\"list\";i:1;s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"order\";i:1;}s:9:\"usergroup\";a:6:{s:4:\"list\";i:1;s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"order\";i:1;s:5:\"grant\";i:1;}s:5:\"admin\";a:9:{s:3:\"sub\";i:1;s:4:\"list\";i:1;s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:10:\"deletefile\";i:1;s:2:\"ui\";i:1;s:4:\"lang\";i:1;s:8:\"homepage\";i:1;}s:8:\"datalist\";a:8:{s:4:\"list\";i:1;s:7:\"setting\";i:1;s:3:\"add\";i:1;s:4:\"view\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:2:\"tg\";i:1;s:5:\"huifu\";i:1;}s:8:\"seotitle\";a:2:{s:4:\"list\";i:1;s:4:\"edit\";i:1;}s:6:\"attach\";a:2:{s:4:\"list\";i:1;s:3:\"del\";i:1;}s:3:\"dev\";a:10:{s:4:\"list\";i:1;s:9:\"setdelall\";i:1;s:8:\"getroups\";i:1;s:9:\"setgroups\";i:1;s:12:\"setgroups_do\";i:1;s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"group\";i:1;s:8:\"batchadd\";i:1;}s:7:\"article\";a:10:{s:4:\"list\";i:1;s:6:\"settop\";i:1;s:6:\"endtop\";i:1;s:3:\"add\";i:1;s:11:\"setcategory\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:6:\"delall\";i:1;s:9:\"e_subtype\";i:1;s:7:\"success\";i:1;}s:4:\"page\";a:2:{s:4:\"list\";i:1;s:4:\"edit\";i:1;}}', '1', '1');
INSERT INTO `usergroup` VALUES ('2', '信息管理员', '1', 'a:15:{s:7:\"setting\";a:1:{s:4:\"list\";i:1;}s:6:\"backup\";a:3:{s:4:\"list\";i:1;s:6:\"export\";i:1;s:8:\"optimize\";i:1;}s:5:\"cache\";a:2:{s:4:\"list\";i:1;s:5:\"clear\";i:1;}s:4:\"lang\";a:1:{s:4:\"list\";i:1;}s:8:\"template\";a:1:{s:4:\"list\";i:1;}s:8:\"makehtml\";a:1:{s:4:\"list\";i:1;}s:7:\"purview\";a:1:{s:4:\"list\";i:1;}s:9:\"usergroup\";a:1:{s:4:\"list\";i:1;}s:5:\"admin\";a:3:{s:3:\"sub\";i:1;s:4:\"list\";i:1;s:8:\"homepage\";i:1;}s:8:\"datalist\";a:4:{s:4:\"list\";i:1;s:3:\"add\";i:1;s:4:\"view\";i:1;s:4:\"edit\";i:1;}s:8:\"seotitle\";a:2:{s:4:\"list\";i:1;s:4:\"edit\";i:1;}s:6:\"attach\";a:1:{s:4:\"list\";i:1;}s:3:\"dev\";a:1:{s:4:\"list\";i:1;}s:7:\"article\";a:9:{s:4:\"list\";i:1;s:6:\"settop\";i:1;s:6:\"endtop\";i:1;s:3:\"add\";i:1;s:11:\"setcategory\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:6:\"delall\";i:1;s:9:\"e_subtype\";i:1;}s:4:\"page\";a:2:{s:4:\"list\";i:1;s:4:\"edit\";i:1;}}', '0', '1');
INSERT INTO `usergroup` VALUES ('3', '游客浏览员', '0', 'a:14:{s:7:\"setting\";a:1:{s:4:\"list\";i:1;}s:6:\"backup\";a:1:{s:4:\"list\";i:1;}s:5:\"cache\";a:1:{s:4:\"list\";i:1;}s:4:\"lang\";a:1:{s:4:\"list\";i:1;}s:8:\"template\";a:1:{s:4:\"list\";i:1;}s:8:\"makehtml\";a:1:{s:4:\"list\";i:1;}s:7:\"purview\";a:1:{s:4:\"list\";i:1;}s:5:\"admin\";a:3:{s:3:\"sub\";i:1;s:4:\"list\";i:1;s:8:\"homepage\";i:1;}s:8:\"datalist\";a:1:{s:4:\"list\";i:1;}s:8:\"seotitle\";a:1:{s:4:\"list\";i:1;}s:6:\"attach\";a:1:{s:4:\"list\";i:1;}s:3:\"dev\";a:1:{s:4:\"list\";i:1;}s:7:\"article\";a:1:{s:4:\"list\";i:1;}s:4:\"page\";a:1:{s:4:\"list\";i:1;}}', '0', '1');
