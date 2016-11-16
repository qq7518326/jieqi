INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'adminlist', '问答管理一页显示多少数据', '20', '', 0, 3, '', 10700, '');
INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'quizcase', '缓存多少个问题列表页面', '5', '根据问题数量调整', 0, 3, '', 10600, '');
INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'quizcasez', '是否缓存过期,完成的问题', '1', '建议开启', 0, 9, 'a:2:{i:1;s:2:"是";i:0;s:2:"否";} ', 10500, '');
INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'tagcase', 'tag标签自动更新间隔(天)', '1', 'TAG标签采用定时更新', 0, 0, '', 10400, '');
INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'tagcaselist', '缓存多少个TAG文章列表页面', '5', '根据问题数量调整', 0, 3, '', 10700, '');
INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'time', '问答的有效时间(天)', '7', '问题过期时间', 0, 3, '', 10100, '');
INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'usecase', '是否启用缓存', '1', '建议开启', 0, 9, 'a:2:{i:1;s:2:"是";i:0;s:2:"否";}', 10200, '');
INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'usekey', '是否启用验证码', '1', '在提问时是否需要验证码', 0, 9, 'a:2:{i:1;s:2:"是";i:0;s:2:"否";}', 10100, '');
INSERT INTO `jieqi_system_configs` (`cid`, `modname`, `cname`, `ctitle`, `cvalue`, `cdescription`, `cdefine`, `ctype`, `options`, `catorder`, `catname`) VALUES(null, 'quiz', 'usetagcase', 'TAG标签缓存', '1', 'TAG标签数量比较大时候建议开启', 0, 9, 'a:2:{i:1;s:2:"是";i:0;s:2:"否";} ', 10300, '');

INSERT INTO `jieqi_system_blocks` (`bid`, `blockname`, `modname`, `filename`, `classname`, `side`, `title`, `description`, `content`, `vars`, `template`, `cachetime`, `contenttype`, `weight`, `showstatus`, `custom`, `canedit`, `publish`, `hasvars`) VALUES(null, '过期问题', 'quiz', 'block_quizlist', 'BlockQuizQuizList', 0, '过期问题', '用来显示过期的问题\r\n参数提示\r\n/**?\r\n* type(提取的类\r\n\r\n别)(0,不限制,1.待解决2....', '', '4,0,score,desc,10,0,0', 'block_quizlist_left.html', 0, 1, 0, 1, 0, 0, 0, 0);
INSERT INTO `jieqi_system_blocks` (`bid`, `blockname`, `modname`, `filename`, `classname`, `side`, `title`, `description`, `content`, `vars`, `template`, `cachetime`, `contenttype`, `weight`, `showstatus`, `custom`, `canedit`, `publish`, `hasvars`) VALUES(null, '高分问题', 'quiz', 'block_quizlist', 'BlockQuizQuizList', 0, '高分问题 ', '用来显示高分待解决的问题\r\n参数提示\r\n/**\r\n* type(提\r\n\r\n取的类别)(0,不限制,1.待解决2....', '', '1,0,score,desc,10,0,0', 'block_quizlist_left.html', 0, 1, 0, 1, 0, 0, 0, 0);
INSERT INTO `jieqi_system_blocks` (`bid`, `blockname`, `modname`, `filename`, `classname`, `side`, `title`, `description`, `content`, `vars`, `template`, `cachetime`, `contenttype`, `weight`, `showstatus`, `custom`, `canedit`, `publish`, `hasvars`) VALUES(null, '已解决问题', 'quiz', 'block_quizlist', 'BlockQuizQuizList', 4, '已解决问题', '用来显示已解决问题\r\n参数提示\r\n/**\r\n* type(提取的\r\n\r\n类别)(0,不限制,1.待解决2....)', '', '2,0,addtime,desc,10,0,0', 'block_quizlist.html', 0, 4, 1, 0, 0, 3, 0, 0);
INSERT INTO `jieqi_system_blocks` (`bid`, `blockname`, `modname`, `filename`, `classname`, `side`, `title`, `description`, `content`, `vars`, `template`, `cachetime`, `contenttype`, `weight`, `showstatus`, `custom`, `canedit`, `publish`, `hasvars`) VALUES(null, '最新提问', 'quiz', 'block_quizlist', 'BlockQuizQuizList', 4, '', '', '', '1,0,addtime,desc,10,0,0,new_problems', 'block_quizlist.html', 0, 4, 0, 0, 0, 3, 1, 0);
INSERT INTO `jieqi_system_blocks` (`bid`, `blockname`, `modname`, `filename`, `classname`, `side`, `title`, `description`, `content`, `vars`, `template`, `cachetime`, `contenttype`, `weight`, `showstatus`, `custom`, `canedit`, `publish`, `hasvars`) VALUES(null, '热门标签', 'quiz', 'block_quiztag', 'BlockQuizQuizTag', 1, '', '', '', '0,0,num,desc,10,0,tagcache', 'block_hottag.html', 0, 0, 0, 0, 0, 3, 1, 0);

INSERT INTO `jieqi_system_power` (`pid`, `modname`, `pname`, `ptitle`, `pdescription`, `pgroups`) VALUES(null, 'quiz', 'magquizmsg', '管理问答信息权限', '管理问答信息权限', '');
INSERT INTO `jieqi_system_power` (`pid`, `modname`, `pname`, `ptitle`, `pdescription`, `pgroups`) VALUES(null, 'quiz', 'magtype', '管理问答分类权限', '管理问答分类权限', '');



INSERT INTO `jieqi_system_modules` (`mid`, `name`, `caption`, `description`, `version`, `vtype`, `lastupdate`, `weight`, `publish`, `modtype`)  VALUES (null, 'quiz', '问答程序', '问答程序', 110, '', 0, 0, 1, 0);