<?php
/**
 * 设友wx模块微站定义
 *
 * @author qm
 * @url http://bbs.we7.cc/
 */
defined('IN_IA') or exit('Access Denied');

class SywxModuleSite extends WeModuleSite {
	public function doMobileDiy() {
		//这个操作被定义用来呈现 sy首页
		global $_W,$_GPC;
		
		include $this->template('diy');
	}

	public function doMobileShareyou() {
		//这个操作被定义用来呈现 sy首页
		global $_W,$_GPC;
		
		include $this->template('sy');
	}
	public function doWebRule() {
		//这个操作被定义用来呈现 规则列表
	}
	public function doWebNav() {
		//这个操作被定义用来呈现 管理中心导航菜单
	}
	public function doMobileIcon() {
		//这个操作被定义用来呈现 微站首页导航图标
	}
	public function doMobileUser() {
		//这个操作被定义用来呈现 微站个人中心导航
	}
	public function doMobileShortcut() {
		//这个操作被定义用来呈现 微站快捷功能导航
	}

}