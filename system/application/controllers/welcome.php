<?php

class welcome extends Controller {

	function welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$category=array(
		"stgj"=>"系统工具",
		"hlwyy"=>"互联网应用",
		"aqfh"=>"安全防护",
		"dmt"=>"多媒体",
		"zmzt"=>"桌面主题",
		"sygj"=>"实用工具",
		"bgxx"=>"办公学习",
		"dtdh"=>"地图导航",
		"dzs"=>"电子书",
		"gjbd"=>"固件补丁"
		);
		
		$hao123category=array(
		array("key"=>"sq","value"=>"社 区"),
		array("key"=>"yy","value"=>"音 乐"),
		array("key"=>"cj","value"=>"财 经"),
		array("key"=>"gw","value"=>"购 物"),
		array("key"=>"xs","value"=>"小 说"),
		array("key"=>"yx","value"=>"游 戏"),
		array("key"=>"kj","value"=>"空 间"),
		array("key"=>"wy","value"=>"网 游"),
		array("key"=>"qc","value"=>"汽 车"),
		array("key"=>"sp","value"=>"视 频"),
		array("key"=>"ty","value"=>"体 育"),
		array("key"=>"js","value"=>"军 事"),
		array("key"=>"jy","value"=>"交 友"),
		array("key"=>"dn","value"=>"电 脑"),
		array("key"=>"xw","value"=>"新 闻"),
		array("key"=>"lt","value"=>"聊 天"),
		array("key"=>"nx","value"=>"女 性"),
		array("key"=>"xz","value"=>"星 座"),
		array("key"=>"dm","value"=>"动 漫"),
		array("key"=>"ly","value"=>"旅 游"),
		array("key"=>"mx","value"=>"明 星"),
		array("key"=>"ss","value"=>"时 尚"),
		);
		
		$data["categorys"]=$category;
		$data["hao123categorys"]=$hao123category;

		$this->load->view('welcome',$data);
	}
}
