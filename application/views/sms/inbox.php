<?php $this->load->view("template/header");?>
<div id="rightside">
<div class="contentcontainer">
    <div class="headings altheading">
	<h2><?php get_line('sms_template_label');?></h2>
    </div>
    <script>
         $(document).ready(function() {
         $("#inbox_ajax").load("<?php echo site_url('sms/inbox_ajax');?>");
         var refreshId = setInterval(function() {
         $("#inbox_ajax").load("<?php echo site_url('sms/inbox_ajax');?>");
         }, 7000);
         $.ajaxSetup({ cache: false });
         });
    </script>
    <div class="contentbox">
	<div id="inbox_ajax"></div>
              
                <div style="clear: both;"></div>
         </div>
    </div>
<?php $this->load->view("template/footer");?>