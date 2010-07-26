<?php

class software extends Controller {

	function software()
	{
		parent::Controller();	
	}
	
	function index($cat)
	{
		$category["stgj"]="系统工具";
		$category["hlwyy"]="互联网应用";
		$category["aqfh"]="安全防护";
		$category["dmt"]="多媒体";
		$category["zmzt"]="桌面主题";
		$category["sygj"]="实用工具";
		$category["bgxx"]="办公学习";
		$category["dtdh"]="地图导航";
		$category["dzs"]="电子书";
		$category["gjbd"]="固件补丁";
		
		$data=array();
		$data["softwares"]=array();
		$query = $this->db->query("SELECT * FROM `androidsoftware`  where `androidsoftware`.`category` = '$category[$cat]'");
		if ($query->num_rows() > 0)
		{
				$data["softwares"] = $query->result();
		}

		$this->load->view('software',$data);
	}
}
