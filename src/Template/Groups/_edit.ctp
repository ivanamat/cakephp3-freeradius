<?php $this->assign('title', 'Freeradius / Groups'); ?>

<?php echo $this->element('sidebar'); ?>

<div class="groups edit large-9 medium-8 columns content">
    <?php echo $this->Form->create($radgroupcheck); ?>
        <fieldset>
            <legend><?php echo __('Edit group'); ?></legend>
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="large-12 medium-12 columns">
                            <?php echo $this->Form->input('groupname',['value' => $groupname]); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3><?php echo __('Check items'); ?></h3>
            <?php
            $n = 0;
            foreach($radgroupcheck as $attribute):
                echo $this->element('Freeradius.attributes/edit',[
                    'attribute' => $attribute,
                    'n' => $n
                ]);
            $n++;
            endforeach;
            ?>
            <div class="right">
                <?php echo $this->Form->button(__('Add attribute'), ['class' => 'add_button button default']); ?>
            </div>
            <div class="clearfix"></div>
            
            <h3><?php echo __('Reply items'); ?></h3>
            <?php
            $n = 0;
            foreach($radgroupreply as $attribute):
                echo $this->element('Freeradius.attributes/edit',[
                    'attribute' => $attribute,
                    'n' => $n
                ]);
            $n++;
            endforeach; ?>
            <div class="right">
                <?php echo $this->Form->button(__('Add attribute'), ['class' => 'add_button button default']); ?>
            </div>
            <div class="clearfix"></div>
            
            <div class="field_wrapper">
            </div>

            <hr />
            
            <div class="right">
                <?php echo $this->Form->button(__('Save'), ['class' => 'success']) ?>
                <?php echo $this->Html->link(__('Cancel'), ['action' => 'index'],['class' => 'button']) ?>
            </div>
            <div class="clearfix"></div>
        </fieldset>
    <?php echo $this->Form->end(); ?>
</div>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var x = 1; //Initial field counter is 1
    var fieldHTML = 'Hola!<br />';
                    
    $(addButton).click(function(e){ //Once add button is clicked
        e.preventDefault();
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent().parent().parent().parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>