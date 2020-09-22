<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {


	public function __construct()
	{
        parent::__construct();
		$this->load->model('Mod_reg','Alumni');
	}

public function reg(){
    $data = array(
        'mr' => $this->input->post("mr"),
        'fname' => $this->input->post("fname"),
        'mre' => $this->input->post("mre"),
        'ename' => $this->input->post("ename"),
        'id'=> $this->input->post("id"),
        'date'=> $this->input->post("date"),
        'job'=> $this->input->post("job"),
        'nation'=> $this->input->post("nation"),
        'nation2'=> $this->input->post("nation2"),
        'religion'=> $this->input->post("re"),
        'blood'=> $this->input->post("blood"),
        'email'=> $this->input->post("email"),
        'tel'=> $this->input->post("tel"),
        'facebook'=> $this->input->post("face"),
        'line'=> $this->input->post("line"),
        'rey'=> $this->input->post("ry")


    );
        // $this->Menu->menu_insert($data);
        $this->Alumni->Alumni_name($data);
        $this->load->view('home');
        // $this->load->view('view_insert_successwithmenulink');


}
// public function showall()
// 	{
// 		$result['menus'] = $this->Menu->getAllMenus();
// 		$this->load->view('view_menu',$result);
// 	}


// 	public function delete_menu()
// 	{
// 		$delete_mid = $this->input->get("del_id");
// 		//echo $delete_mid;
// 		$this->Menu->menu_delete($delete_mid);
// 		echo "<center>";
// 		echo "ลบเมนู รหัส ".$delete_mid." เรียบร้อยแล้ว";
// 		$this->load->view('view_show_menulink');
// 	}

// 	public function edit_menu()
// 	{
// 		$edit_mid = $this->input->get("edit_id");
// 		$menuselect['menu_select'] = $this->Menu->menu_edit($edit_mid);
// 		//echo $edit_mid;
// 		$this->load->view('view_menu_edit',$menuselect);
// 	}

// 	public function update_menu()
// 	{
// 		$data = array(
// 			'menu_id' => $this->input->post("menu_id"),
// 			'menu_name' => $this->input->post("menu_name"),
// 			'mcategory_id' => $this->input->post("menu_ctype_id"),
// 			'mshop_id'=> $this->input->post("sh_menu_id"),
// 		);
// 		$menu_id = $this->input->post("menu_id");
// 		//echo $menu_id;
// 		$this->Menu->menu_update($data,$menu_id);
// 		echo "<center>";
// 		echo "อัพเดทเมนู รหัส ".$menu_id." เรียบร้อยแล้ว";
// 		$this->load->view('view_show_menulink');
	}