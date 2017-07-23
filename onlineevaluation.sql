/*
Navicat MySQL Data Transfer

Source Server         : LocalMySQL
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : onlineevaluation

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-07-13 16:32:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_id
-- ----------------------------
DROP TABLE IF EXISTS `t_id`;
CREATE TABLE `t_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `useid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `useid` (`useid`)
) ENGINE=MyISAM AUTO_INCREMENT=206 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_id
-- ----------------------------
INSERT INTO `t_id` VALUES ('197', '22');
INSERT INTO `t_id` VALUES ('198', '26');
INSERT INTO `t_id` VALUES ('199', '23');
INSERT INTO `t_id` VALUES ('200', '2');
INSERT INTO `t_id` VALUES ('201', '32');
INSERT INTO `t_id` VALUES ('202', '13');
INSERT INTO `t_id` VALUES ('203', '10');
INSERT INTO `t_id` VALUES ('204', '20');
INSERT INTO `t_id` VALUES ('205', '28');

-- ----------------------------
-- Table structure for t_info
-- ----------------------------
DROP TABLE IF EXISTS `t_info`;
CREATE TABLE `t_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_info
-- ----------------------------
INSERT INTO `t_info` VALUES ('1', '请叙述拉格朗日中值定理以及表达式。', '拉格朗日中值定理又称拉氏定理，是微分学中的基本定理之一，它反映了可导函数在闭区间上的整体的平均变化率与区间内某点的局部变化率的关系。拉格朗日中值定理是罗尔中值定理的推广，同时也是柯西中值定理的特殊情形，是泰勒公式的弱形式（一阶展开）。表达式：f(b)-f(a)=f\'(ξ)(b-a)(a<ξ<b）');
INSERT INTO `t_info` VALUES ('2', '解释什么是设计模式？', '设计模式（Design Pattern）是一套被反复使用、多数人知晓的、经过分类的、代码设计经验的总结。使用设计模式的目的：为了代码可重用性、让代码更容易被他人理解、保证代码可靠性。 设计模式使代码编写真正工程化；设计模式是软件工程的基石脉络，如同大厦的结构一样。');
INSERT INTO `t_info` VALUES ('41', '第41题 \'th \'貌似我是可以加单引号了\'', '41题答案');
INSERT INTO `t_info` VALUES ('42', '第42题 单引号\'\'\'\'\'\'hahahh \'\'\'their friends\' boy', '第42题的答案');
INSERT INTO `t_info` VALUES ('6', '请问，量子力学中薛定谔的猫是什么？', '薛定谔的猫是奥地利著名物理学家薛定谔提出的一个思想实验，试图从宏观尺度阐述微观尺度的量子叠加原理的问题，巧妙地把微观物质在观测后是粒子还是波的存在形式和宏观的猫联系起来，以此求证观测介入时量子的存在形式。随着量子物理学的发展，薛定谔的猫还延伸出了平行宇宙等物理问题和哲学争议。');
INSERT INTO `t_info` VALUES ('7', 'Cpp的继承和Java的继承都有哪些不同?', 'Cpp的继承是允许多重继承的，而Java只允许单重继承。');
INSERT INTO `t_info` VALUES ('4', '如何评价2017高考浙江卷阅读中“草鱼的眼中发出了诡异的光”？', '出自《一种美味》是由巩高峰创作的一篇短小说。其实只有经历过那种饥饿贫穷生活的人，才会真正理解那道诡异的光，和整篇文章的思想。');
INSERT INTO `t_info` VALUES ('8', '简要叙述工厂模式', '工厂模式是我们最常用的实例化对象模式了，是用工厂方法代替new操作的一种模式。');
INSERT INTO `t_info` VALUES ('9', '请说出光电效应方程', 'Ek = hv - W0（其中，h 表示普朗克常量，ν 表示入射光的频率），这个关系式通常叫做爱因斯坦光电效应方程。即：光子能量 = 移出一个电子所需的能量（逸出功）加上被发射的电子的动能。');
INSERT INTO `t_info` VALUES ('10', '常用的加密算法有哪些？', '常见的加密算法可以分成三类，对称加密算法，非对称加密算法和Hash算法。');
INSERT INTO `t_info` VALUES ('11', '常见的对称和非对称加密算法，以及它们的异同优劣？', '常见的对称加密算法：DES、3DES、DESX、Blowfish、IDEA、RC4、RC5、RC6和AES。常见的非对称加密算法：RSA、ECC（移动设备用）、Diffie-Hellman、El Gamal、DSA（数字签名用）。非对称加密的缺点是加解密速度要远远慢于对称加密，在某些极端情况下，甚至能比非对称加密慢上1000倍。');
INSERT INTO `t_info` VALUES ('13', 'Android开发如何调用C/Cpp的程序。', '使用JNI，在Java程序中声明方法使用natvie。');
INSERT INTO `t_info` VALUES ('14', '叙述蒙特卡罗算法的基本原理？', '由概率定义知，某事件的概率可以用大量试验中该事件发生的频率来估算，当样本容量足够大时，可以认为该事件的发生频率即为其概率。因此，可以先对影响其可靠度的随机变量进行大量的随机抽样，然后把这些抽样值一组一组地代入功能函数式，确定结构是否失效，最后从中求得结构的失效概率。蒙特卡罗法正是基于此思路进行分析的。');
INSERT INTO `t_info` VALUES ('15', '简单叙述UML建模中的序列图', '序列图主要用于按照交互发生的一系列顺序，显示对象之间的这些交互。很象类图，开发者一般认为序列图只对他们有意义');
INSERT INTO `t_info` VALUES ('19', '第19题测试', '第19题的答案');
INSERT INTO `t_info` VALUES ('20', '第20题测试', '20题的答案');
INSERT INTO `t_info` VALUES ('21', '21题', '21题的答案');
INSERT INTO `t_info` VALUES ('22', '22题', '22题的答案');
INSERT INTO `t_info` VALUES ('23', '23题', '23题的答案');
INSERT INTO `t_info` VALUES ('24', '24题', '24题的答案');
INSERT INTO `t_info` VALUES ('25', '这是第25题的问题', '这是第25题的答案');
INSERT INTO `t_info` VALUES ('26', '26th 这样是会出问题的\"\"', '第26题的答案');
INSERT INTO `t_info` VALUES ('27', '27th ask', '27th');
INSERT INTO `t_info` VALUES ('28', '28s ask', '28s answer');
INSERT INTO `t_info` VALUES ('30', '30ask', '30 answer');
INSERT INTO `t_info` VALUES ('32', '这是32题', '这是32题的答案');
INSERT INTO `t_info` VALUES ('33', '这是第33道题', '这是第33道题的答案');
INSERT INTO `t_info` VALUES ('35', '第35题', '第35题的答案');
INSERT INTO `t_info` VALUES ('40', '这是第40题', '第40题的答案');

-- ----------------------------
-- Table structure for t_user
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('1', 'admin', 'admin123');
INSERT INTO `t_user` VALUES ('2', 'root', 'root123');
