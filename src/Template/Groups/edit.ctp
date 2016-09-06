<?php $this->assign('title', 'Freeradius / Groups'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="groups view large-9 medium-8 columns content">
    <section>
        
        <h2><?php echo $groupname; ?></h2>

        <?php echo $this->Form->create('Group'); ?>
        
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1"><?php echo __('Basics'); ?></label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2"><?php echo __('Speed'); ?></label>
            
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3"><?php echo __('Data transfer'); ?></label>

            <input id="tab4" type="radio" name="tabs">
            <label for="tab4"><?php echo __('Time'); ?></label>

            <input id="tab5" type="radio" name="tabs">
            <label for="tab5"><?php echo __('Miscelanea'); ?></label>

            <input id="tab6" type="radio" name="tabs">
            <label for="tab6"><?php echo __('Specific'); ?></label>
        
            <section id="content1">
                <h3><?php echo __('Basics'); ?></h3>
                
                <fieldset>
                    <?php echo $this->Form->input('groupname',['value' => $groupname]); ?>
                </fieldset>
            </section>

            <section id="content2">
                <h3><?php echo __('Speed'); ?></h3>
                
                <div class="row">
                    <table class="large-8 medium-8 large-offset-2 medium-offset-2 columns">
                        <thead>
                            <tr>
                                <th colspan="2">Maximo permitido</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-right"><label for="wispr-bandwidth-max-down"><?php echo __('Bandwidth Max Down'); ?></label></td>
                                <td><?php echo $this->Form->input('WISPr-Bandwidth-Max-Down', ['label' => false]); ?></td>
                            </tr>
                            <tr>
                                <td class="text-right"><label for="wispr-bandwidth-max-up"><?php echo __('Bandwidth Max Up'); ?></label></td>
                                <td><?php echo $this->Form->input('WISPr-Bandwidth-Max-Up', ['label' => false]); ?></td>
                            </tr>
                            <tr>
                                <th colspan="2">Minimo garantizado</th>
                            </tr>
                            <tr>
                                <td class="text-right"><label for="wispr-bandwidth-min-down"><?php echo __('Bandwidth Min Down'); ?></label></td>
                                <td><?php echo $this->Form->input('WISPr-Bandwidth-Min-Down', ['label' => false]); ?></td>
                            </tr>
                            <tr>
                                <td class="text-right"><label for="wispr-bandwidth-min-up"><?php echo __('Bandwidth Min Up'); ?></label></td>
                                <td><?php echo $this->Form->input('WISPr-Bandwidth-Min-Up', ['label' => false]); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            
            <section id="content3">
                <h3><?php echo __('Data transfer'); ?></h3>
                
                <div class="row">
                    <table class="large-8 medium-8 large-offset-2 medium-offset-2 columns">

                    </table>
                </div>
            </section>

            <section id="content4">
                <h3><?php echo __('Time'); ?></h3>
                
            </section>

            <section id="content5">
                <h3><?php echo __('Miscelanea'); ?></h3>
                
            </section>

            <section id="content6">
                <h3><?php echo __('Specific'); ?></h3>

            </section>
            
            <hr />
            
            <div class="right">
                <?php echo $this->Form->button(__('Save'), ['class' => 'success']) ?>
                <?php echo $this->Html->link(__('Cancel'), ['action' => 'index'],['class' => 'button']) ?>
            </div>
            <div class="clearfix"></div>
                
        <?php echo $this->Form->end(); ?>
        
    </section>
</main>

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