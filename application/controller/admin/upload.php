<?php
/**
 * application_controller_admin_default
 */
class controller_admin_upload extends controller_admin_base
{
	public function __construct()
	{
		parent::__construct(__CLASS__);
	}

	public function run()
	{
		if(app::$session != 'admin')
		{
			app::$content['ajax_error'] = "Access only for admins!";
			view::set_special("ajax", "browser/error/ajax.html");
		}
		elseif(count(app::$param) > 0 && method_exists($this, app::$param[0]))
		{
			$this->{app::$param[0]}();
		}
		$this->generate_html_output();
	}
  
  public function firstroundtable()
  {
		view::set_col("maincol", "html/user/admin/upload/firstround.html");
  }
	
  public function finaltable()
  {
		view::set_col("maincol", "html/user/admin/upload/final.html");
  }
}
