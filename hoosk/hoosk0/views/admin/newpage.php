<?php echo $header; ?>
<link href="<?php echo ADMIN_THEME; ?>/js/trevor/sir-trevor.css" rel="stylesheet">
<link href="<?php echo ADMIN_THEME; ?>/js/trevor/sir-trevor-bootstrap.css" rel="stylesheet">
<link href="<?php echo ADMIN_THEME; ?>/js/trevor/sir-trevor-icons.css" rel="stylesheet">
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
      <div class="span12">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-user"></i>
              <h3><?php echo $this->lang->line('pages_new_header'); ?></h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <?php echo form_error('pageTitle', '<div class="alert">', '</div>'); ?>									
            <?php echo form_error('pageURL', '<div class="alert">', '</div>'); ?>									
			<?php 
			$attr = array('id' => 'contentForm');
			echo form_open(BASE_URL.'/admin/pages/new/add', $attr); ?>
						<?php 	$data = array(
						  'name'        => 'content',
						  'id'          => 'content',
						  'class'       => 'js-st-instance'
						);
			
						echo form_textarea($data, set_value('content', $this->input->post('content'))); ?>
					
                    
                    
                    
                    
                    <div class="form-actions">
             
                    <a class="btn btn-primary" data-toggle="modal" href="#attributes"><?php echo $this->lang->line('btn_next'); ?></a>
					<a class="btn" href="<?php echo BASE_URL; ?>/admin/pages"><?php echo $this->lang->line('btn_cancel'); ?></a>
				</div> <!-- /form-actions -->
             
                
                <!-- /widget-content --> 
            </div>
          </div>
          <!-- /widget -->
          
     
		<div id="attributes" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel"><?php echo $this->lang->line('pages_new_attributes'); ?></h3>
            </div><div class="modal-body">
            <div class="alert alert-info"><?php echo $this->lang->line('pages_new_required'); ?></div>	
            <div class="control-group">		
            		<?php echo form_error('pageTitle', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="pageTitle"><?php echo $this->lang->line('pages_new_title'); ?></label>
					<div class="controls">
                    <?php 	$data = array(
						  'name'        => 'pageTitle',
						  'id'          => 'pageTitle',
						  'class'       => 'span5',
						  'value'		=> set_value('pageTitle')
						);
			
						echo form_input($data); ?>
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
                
                <div class="control-group">		
            		<?php echo form_error('navTitle', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="navTitle"><?php echo $this->lang->line('pages_new_nav'); ?></label>
					<div class="controls">
                    <?php 	$data = array(
						  'name'        => 'navTitle',
						  'id'          => 'navTitle',
						  'class'       => 'span5',
						  'value'		=> set_value('navTitle')
						);
			
						echo form_input($data); ?>
					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
                
                <div class="control-group">		
					<label class="control-label" for="pageKeywords"><?php echo $this->lang->line('pages_new_keywords'); ?></label>
					<div class="controls">
						 <?php 	$data = array(
						  'name'        => 'pageKeywords',
						  'id'          => 'pageKeywords',
						  'class'       => 'span5',
						  'value'		=> set_value('pageKeywords')
						);
			
						echo form_input($data); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->

				<div class="control-group">		
					<label class="control-label" for="pageDescription"><?php echo $this->lang->line('pages_new_description'); ?></label>
					<div class="controls">
						 <?php 	$data = array(
						  'name'        => 'pageDescription',
						  'id'          => 'pageDescription',
						  'class'       => 'span5',
						  'value'		=> set_value('pageDescription')
						);
			
						echo form_input($data); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
               
				<div class="control-group">		
            		<?php echo form_error('pageURL', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="pageURL"><?php echo $this->lang->line('pages_new_url'); ?></label>
					<div class="controls">
						 <?php 	$data = array(
						  'name'        => 'pageURL',
						  'id'          => 'pageURL',
						  'class'       => 'span5',
						  'value'		=> set_value('pageURL')
						);
			
						echo form_input($data); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->
                
               <div class="control-group">		
                <?php echo form_error('pagePublished', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="pagePublished"><?php echo $this->lang->line('pages_new_publish'); ?></label>
					<div class="controls">
						
                        <?php 	
						$att = 'id="pagePublished" class="span5"';
						$data = array(
						  '1'        => $this->lang->line('option_yes'),
						  '0'         => $this->lang->line('option_no'),
						);
			
						echo form_dropdown('pagePublished', $data, '1', $att); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->              
                 <div class="control-group">		
                <?php echo form_error('pageTemplate', '<div class="alert">', '</div>'); ?>									
					<label class="control-label" for="pageTemplate"><?php echo $this->lang->line('pages_new_template'); ?></label>
					<div class="controls">
						
                        <?php

						$att = 'id="pageTemplate" class="span5"';
						$data = array();
						foreach ($templates as $t){
						$t = str_replace(".php", "", $t);
						if (($t != "header") && ($t != "footer") && ($t != "error") && ($t != "article") && ($t != "category") && ($t != "index.html")){
						$data[$t] = $t;	
						}
						}

						echo form_dropdown('pageTemplate', $data, 'home', $att); ?>

					</div> <!-- /controls -->				
				</div> <!-- /control-group -->  
            </div>
            <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true"><?php echo $this->lang->line('btn_back'); ?></button>
            <button class="btn btn-primary" onClick="formSubmit()"><?php echo $this->lang->line('btn_save'); ?></button>
            </div></div>
           <?php  echo form_close(); ?>
     </div>
      <!-- /span12 -->

      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>

<script src="<?php echo ADMIN_THEME; ?>/js/trevor/underscore.js"></script>
<script src="<?php echo ADMIN_THEME; ?>/js/trevor/eventable.js"></script>
<script src="<?php echo ADMIN_THEME; ?>/js/trevor/sortable.min.js"></script>
<script src="<?php echo ADMIN_THEME; ?>/js/trevor/sir-trevor.js"></script>
<script src="<?php echo ADMIN_THEME; ?>/js/trevor/sir-trevor-bootstrap.js"></script>

<script type="text/javascript">
	new SirTrevor.Editor({ el: $('.js-st-instance'),
  	blockTypes: ["Columns", "Heading", "Text", "ImageExtended", "Quote", "Accordion", "Button", "Video", "List", "Iframe"]
	});
	SirTrevor.onBeforeSubmit();
</script>
<script type="text/javascript">
function formSubmit(){
	SirTrevor.onBeforeSubmit();
	document.getElementById("contentForm").submit();
}
</script>
<?php echo $footer; ?>
