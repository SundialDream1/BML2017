<?php 
/**
 * 添加数据库 数据库中有user(name not null,password not null)表 用来存用户数据 tmp(name not null,password not null)表 临时登入用户数据 只有一行 存登入用户的数据 blog(id not null,user not null,title not null,content not null)表 博客表存博客的标题 内容 
 */
class BlogModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	/**
	 * 获得user表
	 */
	public function GetUserTable()
	{
		return $this->db->get("user");
	}
	/**
	 * 获得blog表
	 */
	public function GetBlogTable()
	{
		return $this->db->get("blog");

	}
	/**
	 * 获得tmp表
	 */
	public function GetTmpTable()
	{
		return $this->db->get("tmp");
	}
	
}

?>