<?php $this->load->view('adminlte3/global/01_head'); ?>
<?php $this->load->view('adminlte3/global/02_navbar'); ?>
<!-- bagian yang dinamis -->
<?php $this->load->view('adminlte3/'.$active_controller.'/'.$active_function); ?>
<!-- bagian yang dinamis berakhir -->
<?php $this->load->view('adminlte3/global/03_sidebar'); ?>
<?php $this->load->view('adminlte3/global/05_controlsidebar'); ?>
<?php $this->load->view('adminlte3/global/06_footer'); ?>
<?php $this->load->view('adminlte3/global/07_javascript'); ?>