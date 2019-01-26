/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : mohu

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2016-11-15 15:08:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for nww_admin
-- ----------------------------
DROP TABLE IF EXISTS `nww_admin`;
CREATE TABLE `nww_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nww_admin
-- ----------------------------
INSERT INTO `nww_admin` VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for nww_article
-- ----------------------------
DROP TABLE IF EXISTS `nww_article`;
CREATE TABLE `nww_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `lpic` varchar(255) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `auther` varchar(20) DEFAULT NULL COMMENT '备用字段1',
  `time` timestamp NULL DEFAULT NULL COMMENT '备用字段2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nww_article
-- ----------------------------
INSERT INTO `nww_article` VALUES ('1', '&lt;p&gt;\r\n	测试\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	这是\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	内容。。。。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;img src=&quot;/Public/kindeditor-4.1.7/attached/image/20161114/20161114095849_88164.png&quot; alt=&quot;&quot; /&gt;\r\n&lt;/p&gt;', '/Public/Uploads/2016-11-14/582984326c521.png', '测试文章22', '2', '描述。。。', null, null);
INSERT INTO `nww_article` VALUES ('2', '模糊语言学概论模糊语言学概论模糊语言学概论模糊语言学概论', '/Public/Uploads/2016-11-14/582998a20088a.jpg', '模糊语言学概论', '6', '模糊语言学概论', null, null);
INSERT INTO `nww_article` VALUES ('8', 'cc', '/Public/Uploads/2016-11-14/58299c3e6ad37.jpg', '测试项目', '6', '', 'sdf', null);
INSERT INTO `nww_article` VALUES ('9', '模糊语言学', '/Public/Uploads/2016-11-14/58299c75c9513.jpg', '模糊语言学', '6', '模糊语言学', '', null);
INSERT INTO `nww_article` VALUES ('10', '黎千驹教授简介', '/Public/Uploads/2016-11-14/58299ccc01678.jpg', '黎千驹教授', '4', '黎千驹教授简介。。。', '', null);
INSERT INTO `nww_article` VALUES ('7', '阿斯顿发生大法师大多数', '/Public/Uploads/2016-11-14/58299c140a88d.jpg', '传单车队', '6', ' sss', null, null);
INSERT INTO `nww_article` VALUES ('11', '&lt;span&gt;黎千驹教授简介&lt;/span&gt;', '/Public/Uploads/2016-11-14/58299ce67944b.jpg', '张千驹教授', '4', '黎千驹教授简介', '', null);
INSERT INTO `nww_article` VALUES ('12', '&lt;span&gt;黎千驹教授简介&lt;/span&gt;&lt;span&gt;黎千驹教授简介&lt;/span&gt;&lt;span&gt;黎千驹教授简介&lt;/span&gt;', '/Public/Uploads/2016-11-14/58299d05b44f3.jpg', '李千驹教授', '4', '黎千驹教授简介', '', null);
INSERT INTO `nww_article` VALUES ('13', '研究会会议1', null, '研究会会议1', '5', '研究会会议1', '', null);
INSERT INTO `nww_article` VALUES ('14', '研究会会议2', null, '研究会会议2', '5', '研究会会议2', '', null);
INSERT INTO `nww_article` VALUES ('15', '论文1', null, '论文1', '7', '论文1', '', null);
INSERT INTO `nww_article` VALUES ('16', '论文2', null, '论文2', '7', '', '', null);

-- ----------------------------
-- Table structure for nww_class
-- ----------------------------
DROP TABLE IF EXISTS `nww_class`;
CREATE TABLE `nww_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `father_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nww_class
-- ----------------------------
INSERT INTO `nww_class` VALUES ('1', '组织机构', '0', '');
INSERT INTO `nww_class` VALUES ('2', '资讯动态', '0', '');
INSERT INTO `nww_class` VALUES ('3', '入会指南', '0', '');
INSERT INTO `nww_class` VALUES ('4', '会员风采', '0', '');
INSERT INTO `nww_class` VALUES ('5', '研究会会议', '0', '');
INSERT INTO `nww_class` VALUES ('6', '模糊语言著作', '0', '');
INSERT INTO `nww_class` VALUES ('7', '模糊语言论文', '0', '');

-- ----------------------------
-- Table structure for nww_page
-- ----------------------------
DROP TABLE IF EXISTS `nww_page`;
CREATE TABLE `nww_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `lpic` varchar(255) DEFAULT NULL COMMENT '封面图',
  `add_titme` datetime DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `node_id` int(11) DEFAULT NULL,
  `node_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nww_page
-- ----------------------------
