<?php
if (! function_exists('print_data')) {
	function print_data($func, $args = array(), $field_name = '')
	{
		$CI =& get_instance();
		$model = 'M_users';
		$CI->load->model($model);

		$retrieve = call_user_func_array(array($CI->$model, $func), $args)->row_array();
		if (empty($field_name))
			return call_user_func_array(array($CI->$model, $func), $args)->result();
		else
			return isset($retrieve[$field_name]) ? $retrieve[$field_name] : '';
	}
}