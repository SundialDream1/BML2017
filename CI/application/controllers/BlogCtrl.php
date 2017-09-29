<?php
class BlogCtrl extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("BlogModel");
	}
	/**
	 * [index description] 入口
	 * @return [type] [description]
	 */
	public function index()
	{
		$J['flag']=false;//标记用户是否能登入
		$J['judge']=false;
		$this->load->view("Dialog.php",$J);
	}
	/**
	 * [PageOne description] 首页
	 */
	public function PageOne()
	{
		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		foreach ($query->result() as $value) {
			$data['name']=$value->name;
			$data['password']=$value->password;
		}//将tmp表里的用户数据传入页面
		$this->load->view("MainPage.php",$data);
	}
	/**
	 * [PageTwo description] 写博客页
	 */
	public function PageTwo()
	{
		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		foreach ($query->result() as $value) {
			$data['name']=$value->name;
			$data['password']=$value->password;
		}//将tmp表里的用户数据传入页面
		$this->load->view("SecondPage.php",$data);
	}
	/**
	 * [PageThree description]查看博客页
	 */
	public function PageThree()
	{
		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		foreach ($query->result() as $value) {
			$data['name']=$value->name;
			$data['password']=$value->password;
		}//将tmp表里的用户数据传入页面

        //查找blog表将该用户的博客加载到 查看博客页面
		$username=$data['name'];
		$sql1="SELECT title,content FROM blog WHERE user='$username'";
		$query1=$this->db->query($sql1);
		$title=array();
		$content=array();
		$i=0;
		foreach ($query1->result() as $value) {
			$title[$i]=$value->title;
			$content[$i]=$value->content;
			$i++;
		}
		$data['title']=$title;
		$data['content']=$content;


		$this->load->view("ThirdPage.php",$data);
	}
	/**
	 * [PageFour description]个人主页
	 */
	public function PageFour()
	{
		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		foreach ($query->result() as $value) {
			$data['name']=$value->name;
			$data['password']=$value->password;
		}//将tmp表里的用户数据传入页面
		$this->load->view("FourthPage.php",$data);
	}
	/**
	 * [Enroll description] 注册方法 将注册数据写入数据库的user表中
	 */
	public function Enroll()
	{
		$name=$this->input->post('User1');
		$password=$this->input->post('Password1');
		$this->BlogModel->GetUserTable();
		$sql="SELECT * FROM user WHERE name=? AND password=?";
		$query=$this->db->query($sql,array($name,$password));
        //查找注册的姓名 密码是否在user表里 如果在 则返回该用户已存在信息 否则增加到user表里
		if($query->result())
		{
			$J['judge']=true;
			$J['flag']=false;
			$this->load->view("Dialog.php",$J);
		}
		else
		{
			$d=array('name'=>$name,
				'password'=>$password);
			$Password=$password;
			$Name=$name;
			$this->db->insert("user",$d);
			$J['judge']=false;
			$J['flag']=false;
			$this->load->view("Dialog.php",$J);
		} 
	}
	/**
	 * [Judge description]登入判断 查找用户是否存在
	 */
	public function Judge()
	{
		$data['name']=$name=$this->input->post('User');
		$data['password']=$password=$this->input->post('Password');
		$this->BlogModel->GetUserTable();
		$sql="SELECT * FROM user WHERE name=? AND password=?";
		$query=$this->db->query($sql,array($name,$password));
		if($query->result())//查找到该用户
		{

			$d=array(
				'name'=>$name,
				'password'=>$password
			);
			$sql="DELETE FROM tmp";
			$this->db->query($sql);
			$this->db->insert('tmp',$d);
			$this->load->view("MainPage.php",$data);
		}
		else//否则输出密码错误或用户不存在信息
		{
			$J['flag']=true;
			$J['judge']=false;
			$this->load->view("Dialog.php",$J);
		}

	}
	/**
	 * [ChangeUser description]用户修改
	 */
	public function ChangeUser()
	{
		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		$oldname;
		foreach ($query->result() as $value) {
			$oldname=$value->name;
		}//从tmp获取旧用户名 

        //更新用户
		$name=$this->input->post('ChangeName');
		$password=$this->input->post('ChangePassword');
		$data=array(
			'name'=>$name,
			'password'=>$password
		);
		$this->BlogModel->GetUserTable();
		$this->db->where('name',$oldname);
		$this->db->update('user',$data);

        
		$sql1="DELETE FROM tmp";
		$this->db->query($sql1);//删除旧用户
		$this->db->insert('tmp',$data);//将新用户数据写入tmp中
		$this->PageFour();
	}
	/**
	 * [Quit description]退出登入
	 */
	public function Quit()
	{
		$sql="DELETE FROM tmp";
		$this->db->query($sql);//注销tmp表
		$this->index();

	}
	/**
	 * [Logout description]注销用户
	 */
	public function Logout()
	{
		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		$oldname;
		foreach ($query->result() as $value) {
			$oldname=$value->name;
		}//获取当前用户名

		$this->db->delete('user',array('name'=>$oldname));
		$sql="DELETE FROM tmp";
		$this->db->query($sql);//将该用户从user表中删除
		$this->index();
	}
	/**
	 * [Report description]发表博客
	 */
	public function Report()
	{
		//获取数据
		$title=$this->input->post('Title');
		$content=$this->input->post('ArticleContent');

		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		$username;
		foreach ($query->result() as $value) {
			$username=$value->name;
		}//获取当前用户名

		$id;
		$flag=false;
		do
		{
			$id=rand(0,1000000);
			$sql1="SELECT user FROM blog WHERE id=$id";
			$query=$this->db->query($sql1);
			if(!$query->result())
			{
				$flag=true;

			}

		}while(!$flag);//随机取id 但要防止多个id一样的情况
		$data=array(
			'id'=>$id,
			'user'=>$username,
			'title'=>$title,
			'content'=>$content
		);
		$this->BlogModel->GetBlogTable();
		$this->db->insert('blog',$data);
		//数据插入至blog表
		$this->PageThree();

	}
	/**
	 * [LookUp description]查看博客
	 */
	public function LookUp()
	{
		//接收数据
		$t=$this->input->get('title');
		$c=$this->input->get('content');

		$d['title']=$t;
		$d['content']=$c;

		$this->load->view('Show.php',$d);//传染显示博客的页面
	}
	/**
	 * [DeleteBlog description]删除博客
	 */
	public function DeleteBlog()
	{
		//接收数据
		$title=$this->input->get('title');
		$content=$this->input->get('content');

		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		$username;
		foreach ($query->result() as $value) {
			$username=$value->name;
		}//获取当前用户名


		$this->db->delete('blog',array(
			'user'=>$username,
			'title'=>$title
		));//删除博客
		$this->PageThree();



	}
	/**
	 * [ChangeBlog description]修改博客
	 */
	public function ChangeBlog()
	{
        //接收数据
		$title=$this->input->get('title');
		$content=$this->input->get('content');

		$this->load->view('Revise.php',array(
			'title'=>$title,
			'content'=>$content
		));//数据传入修改页面

	}
	/**
	 * [UpdateBlog description]修改博客 写入数据库的blog表
	 */
	public function UpdateBlog()
	{
        //获取数据
		$oldtitle=$this->input->get('title');
		$title=$this->input->post('TitleText');
		$content=$this->input->post('TextArea');


		$sql="SELECT * FROM tmp";
		$query=$this->db->query($sql);
		$username;
		foreach ($query->result() as $value) {
			$username=$value->name;
		}//获取当前用户名


		$this->BlogModel->GetBlogTable();//更新博客
		$this->db->where(array(
			'user'=>$username,
			'title'=>$oldtitle
		));
		$this->db->update('blog',array(
			'title'=>$title,
			'content'=>$content
		));


		$this->PageThree();


	}

}

?>