<script type="text/javascript">
    $(document).ready(function(){
        $('#post_req').validationEngine();
        });
</script>
<div class="container">
<div class="row">
<?php echo $this->Session->flash();?>
    <div class="col-md-12">    
        <div class="panel panel-default mrg">
            <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title">Edit <span>Properties</span></strong></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('Property', array( 'controller' => 'Property','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
					<?php foreach ($Property as $k=>$post): $id=$post['Property']['id'];$form_no=$k+1;?>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger">Form <?php echo$form_no?></small></strong></div>
							<div class="panel-body">
                    <div class="form-group">
                        <label for="group_name" class="col-sm-2 control-label"><small>Project:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->select("$k.Property.project_id",$projectName,array('label' => false,'class'=>'form-control','empty'=>'Please Select','div'=>false));?>
                        </div>
			<label for="group_name" class="col-sm-2 control-label"><small>Property Name:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input("$k.Property.name",array('label' => false,'class'=>'form-control','placeholder'=>'Property Name','div'=>false));?>
                        </div>
                    </div>
		    <div class="form-group">
                        <label for="group_name" class="col-sm-2 control-label"><small>Type:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input("$k.Property.type",array('type'=>'radio','options'=>array("Commercial"=>"Commercial","Residential"=>"Residential"),'legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','label' => false,'div'=>false,'class'=>''));?>
                        </div>
			<label for="group_name" class="col-sm-2 control-label"><small>Availiable For:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input("$k.Property.availiable",array('type'=>'radio','options'=>array("Sale"=>"Sale","Rent"=>"Rent"),'legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','label' => false,'div'=>false,'class'=>''));?>
                        </div>
                    </div>
                    <div class="form-group">
		    <label for="group_name" class="col-sm-2 control-label"><small>Status:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->select("$k.Property.status",array('Availiable'=>'Availiable','Sold'=>'Sold'),array('empty'=>null,'label' => false,'class'=>'form-control','div'=>false));?>
                        </div>
			<label for="group_name" class="col-sm-2 control-label"><small>Comment/Remarks:</small></label>
			<div class="col-sm-4">
			   <?php echo $this->Form->input("$k.Property.remarks",array('label' => false,'class'=>'form-control','placeholder'=>'Comment/Remarks','div'=>false));?>
			</div>
		    </div> 
			<div class="form-group text-left">
			    <div class="col-sm-offset-3 col-sm-7">
			    <?php echo $this->Form->input("$k.Property.id", array('type' => 'hidden'));?>
			    </div>
			</div>
							</div>
						</div>						
                    <?php endforeach;?>
                        <?php unset($post);?>
                        <div class="form-group text-left">
                        <div class="col-sm-offset-3 col-sm-7">                            
                            <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span> Update</button>
                            <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button><?php }?>
                        </div>
                    </div>
                <?php echo$this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>