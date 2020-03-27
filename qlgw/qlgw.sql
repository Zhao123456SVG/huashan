/*
 Navicat Premium Data Transfer

 Source Server         : bendi
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : qlgw

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 26/12/2019 11:17:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for ql_company
-- ----------------------------
DROP TABLE IF EXISTS `ql_company`;
CREATE TABLE `ql_company`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_company
-- ----------------------------
INSERT INTO `ql_company` VALUES (4, '企业简介', 'Enterprise profile', '浙江钱浪智能信息科技有限公司位于中国杭州大江东产业集聚区，隶属于浙江钱浪科技集团，主要提供工业监测物联网平台服务。公司拥有新材料与防腐蚀专业团队，专注于在线腐蚀监测研究、腐蚀与防护系统解决方案，以及工业物联网/大数据/云计算、防腐蚀门户网站运营、专业会展等。公司自主研发的成套防腐监测技术——“装备与材料服役健康诊断、状态预测智能技术及数据平台”处于国际领先水平，该技术的成功应用实现了材料腐蚀大数据的积累，可以开展设备与工程设施远程无线腐蚀监测、腐蚀规律研究、设备与工程设施完整性管理、安全服役寿命与状态风险评估，为客户创造价值。 ', 4);

-- ----------------------------
-- Table structure for ql_computer
-- ----------------------------
DROP TABLE IF EXISTS `ql_computer`;
CREATE TABLE `ql_computer`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cont1` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cont2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cont3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_computer
-- ----------------------------
INSERT INTO `ql_computer` VALUES (7, '应用领域', 'application area', '腐蚀大数据在线监测系统课实现多个领域的装备/设施智能化诊断。针对不同领域的用户需求导向，完成适用于特定用户的系统设计，提供装备运行环境腐蚀性、安全服役状态风险评估等服务。', 'Uploads/2019-07-16/5d2d4230dbdaf.png', '军用民用密闭设施装备', '核电/燃气管道（保温层）/大型机房/压力容器', 3);
INSERT INTO `ql_computer` VALUES (6, '应用领域', 'application area', '腐蚀大数据在线监测系统课实现多个领域的装备/设施智能化诊断。针对不同领域的用户需求导向，完成适用于特定用户的系统设计，提供装备运行环境腐蚀性、安全服役状态风险评估等服务。', 'Uploads/2019-07-16/5d2d40e616a84.png', '一带一路设施建设', '高铁/港口钢构/船', 3);
INSERT INTO `ql_computer` VALUES (5, '应用领域', 'application area', '腐蚀大数据在线监测系统课实现多个领域的装备/设施智能化诊断。针对不同领域的用户需求导向，完成适用于特定用户的系统设计，提供装备运行环境腐蚀性、安全服役状态风险评估等服务。', 'Uploads/2019-07-16/5d2d409749575.png', '海洋开发装备诊断', '海上风电/海上平台', 3);
INSERT INTO `ql_computer` VALUES (4, '应用领域', 'application area', '腐蚀大数据在线监测系统课实现多个领域的装备/设施智能化诊断。针对不同领域的用户需求导向，完成适用于特定用户的系统设计，提供装备运行环境腐蚀性、安全服役状态风险评估等服务。', 'Uploads/2019-07-16/5d2d3ff65d7ad.png', '国家基础设施建设', '国家电网/管道管线/大型钢构、桥梁', 3);

-- ----------------------------
-- Table structure for ql_example
-- ----------------------------
DROP TABLE IF EXISTS `ql_example`;
CREATE TABLE `ql_example`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `produce` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cont1` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cont2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fid` int(10) DEFAULT NULL,
  `image_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_example
-- ----------------------------
INSERT INTO `ql_example` VALUES (9, '工程案例', 'Product introduction', ' 国家材料环境腐蚀科学数据中心通过50余年的数据积累，材料腐蚀“大数据”已在科技、经济、和社会发展的多个领域得到应用，取得了显著的效果，为国民经济发展保驾护航。', 'Uploads/2019-07-16/5d2d3df7df5a6.png', '积累的典型海域腐蚀数据、编制数据库形成的数据产品已在装备全生命周期过程中得到推广和应用。', 2, '海军装备');
INSERT INTO `ql_example` VALUES (8, '工程案例', 'Product introduction', ' 国家材料环境腐蚀科学数据中心通过50余年的数据积累，材料腐蚀“大数据”已在科技、经济、和社会发展的多个领域得到应用，取得了显著的效果，为国民经济发展保驾护航。', 'Uploads/2019-07-16/5d2d3d6186117.png', '系统性积累了航空材料在我国典型大气环境中的长期腐蚀数据，为设计单位提供腐蚀数据作为设计依据，为制造企业提供防护工艺的依据。', 2, '大飞机专项');
INSERT INTO `ql_example` VALUES (7, '工程案例', 'Product introduction', ' 国家材料环境腐蚀科学数据中心通过50余年的数据积累，材料腐蚀“大数据”已在科技、经济、和社会发展的多个领域得到应用，取得了显著的效果，为国民经济发展保驾护航。', 'Uploads/2019-07-16/5d2d9dc8e8fac.png', '大环境试验和腐蚀数据积累为“天宫一号”空间站核心组件质量归零和寿命苹果提供了数据基础。??????', 2, '载人航天工程');

-- ----------------------------
-- Table structure for ql_gsjj
-- ----------------------------
DROP TABLE IF EXISTS `ql_gsjj`;
CREATE TABLE `ql_gsjj`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_gsjj
-- ----------------------------
INSERT INTO `ql_gsjj` VALUES (2, '1117', 'Uploads/2019-07-22/5d35575a55dd4.png', '33333333331');

-- ----------------------------
-- Table structure for ql_menu
-- ----------------------------
DROP TABLE IF EXISTS `ql_menu`;
CREATE TABLE `ql_menu`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `procuct` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT '产品介绍',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_menu
-- ----------------------------
INSERT INTO `ql_menu` VALUES (8, '公司资质');
INSERT INTO `ql_menu` VALUES (6, '联系我们');
INSERT INTO `ql_menu` VALUES (4, '公司简介');
INSERT INTO `ql_menu` VALUES (3, '应用领域');
INSERT INTO `ql_menu` VALUES (2, '工程案例');
INSERT INTO `ql_menu` VALUES (1, '产品介绍');

-- ----------------------------
-- Table structure for ql_ours
-- ----------------------------
DROP TABLE IF EXISTS `ql_ours`;
CREATE TABLE `ql_ours`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `detail1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_ours
-- ----------------------------
INSERT INTO `ql_ours` VALUES (3, '联系我们', 'Contact us', 'Uploads/2019-07-16/5d2d7f5f97d6e.png', '浙江钱浪智能信息科技有限公司', '杭州市萧山区义蓬街道明盛国际（科创园）801', 'feng.song@qianlangtech.com', '宋经理/13764887781 ', '0571-83726299', 6);

-- ----------------------------
-- Table structure for ql_procuce_detail
-- ----------------------------
DROP TABLE IF EXISTS `ql_procuce_detail`;
CREATE TABLE `ql_procuce_detail`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `produce` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fid` int(10) DEFAULT NULL,
  `img1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img1_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img1_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_procuce_detail
-- ----------------------------
INSERT INTO `ql_procuce_detail` VALUES (17, '产品介绍', 'Product introduction', 'Uploads/2019-07-16/5d2d3c054368f.png', 1, 'Uploads/2019-07-16/5d2d3c0547398.png', 'CM100', '电偶单通道腐蚀在线监测仪', 'CM200', '电偶多通道腐蚀在线监测仪');
INSERT INTO `ql_procuce_detail` VALUES (18, '产品介绍', 'Product introduction', 'Uploads/2019-07-16/5d2d429428fe1.png', 1, 'Uploads/2019-07-16/5d2d42942cce9.png', 'CM100', '电偶单通道腐蚀在线监测仪', 'CM200', '电偶多通道腐蚀在线监测仪');

-- ----------------------------
-- Table structure for ql_sylb
-- ----------------------------
DROP TABLE IF EXISTS `ql_sylb`;
CREATE TABLE `ql_sylb`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img1` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img2` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `img3` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_sylb
-- ----------------------------
INSERT INTO `ql_sylb` VALUES (3, '1112221', '1111', 'Uploads/2019-07-23/5d36aabbce783.png', 'Uploads/2019-07-23/5d36aabbd1e34.png', 'Uploads/2019-07-23/5d36aabbd50fd.png');

-- ----------------------------
-- Table structure for ql_user
-- ----------------------------
DROP TABLE IF EXISTS `ql_user`;
CREATE TABLE `ql_user`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_user
-- ----------------------------
INSERT INTO `ql_user` VALUES (1, 'admin', '86a375aacb17606c185d31c8d3e320ce', 1577327521);

-- ----------------------------
-- Table structure for ql_xtyy
-- ----------------------------
DROP TABLE IF EXISTS `ql_xtyy`;
CREATE TABLE `ql_xtyy`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_xtyy
-- ----------------------------
INSERT INTO `ql_xtyy` VALUES (2, 'Uploads/2019-07-22/5d354d64e3c12.png', 'sdsppppppp');
INSERT INTO `ql_xtyy` VALUES (3, 'Uploads/2019-07-22/5d3554db0910d.png', '1111');

-- ----------------------------
-- Table structure for ql_zz
-- ----------------------------
DROP TABLE IF EXISTS `ql_zz`;
CREATE TABLE `ql_zz`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cont` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`, `title`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ql_zz
-- ----------------------------
INSERT INTO `ql_zz` VALUES (3, '公司资质', 'Enterprise profile', 'Uploads/2019-07-16/5d2d446ee6c3c.png', '查看更多', 8);
INSERT INTO `ql_zz` VALUES (9, '1', NULL, NULL, NULL, NULL);
INSERT INTO `ql_zz` VALUES (8, '1', NULL, NULL, NULL, NULL);
INSERT INTO `ql_zz` VALUES (10, '1', NULL, NULL, NULL, NULL);
INSERT INTO `ql_zz` VALUES (11, '1', NULL, NULL, NULL, NULL);
INSERT INTO `ql_zz` VALUES (12, '1', NULL, NULL, NULL, NULL);
INSERT INTO `ql_zz` VALUES (13, '1', NULL, NULL, NULL, NULL);
INSERT INTO `ql_zz` VALUES (14, '1', NULL, NULL, NULL, NULL);
INSERT INTO `ql_zz` VALUES (15, '1', NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
