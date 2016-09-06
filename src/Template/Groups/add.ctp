<?php $this->assign('title', 'Freeradius / Groups'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="groups view large-9 medium-8 columns content">
    <section>
        
        <h2><?php echo __('New group'); ?></h2>
        <hr />
        
        <?php echo $this->Form->create('Group'); ?>
        
            <section id="content1">
                <h3><?php echo __('General'); ?></h3>
                <div class="panel">
                    <div class="panel-body">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="text-right" colspan="1"><div class="input text required"><label for="groupname"><?php echo __('Group Name'); ?></label></div></td>
                                    <td colspan="1"><?php echo $this->Form->input('groupname', ['label' => false,'required' => true]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="wispr-location-id"><?php echo __('Location ID'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('WISPr-Location-ID', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="wispr-location-name"><?php echo __('Location Name'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('WISPr-Location-Name', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="port-limit"><?php echo __('Port Limit'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Port-Limit', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="session-timeout"><?php echo __('Session Timeout'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Session-Timeout', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="wispr-redirection-url"><?php echo __('Redirection URL (On login success)'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('WISPr-Redirection-URL', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="speed">
                <h3><?php echo __('Speed limits'); ?></h3>
                
                <div class="panel">
                    <div class="panel-body">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="wispr-bandwidth-max-down"><?php echo __('Bandwidth Max Down'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('WISPr-Bandwidth-Max-Down', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="wispr-bandwidth-max-up"><?php echo __('Bandwidth Max Up'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('WISPr-Bandwidth-Max-Up', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="wispr-bandwidth-min-down"><?php echo __('Bandwidth Min Down'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('WISPr-Bandwidth-Min-Down', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="wispr-bandwidth-min-up"><?php echo __('Bandwidth Min Up'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('WISPr-Bandwidth-Min-Up', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
            <section id="content3">
                <h3><?php echo __('Data transfer limits'); ?></h3>
                
                <div class="panel">
                    <div class="panel-body">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="max-daily-octets"><?php echo __('Max Daily Octets'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Max-Daily-Octets', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="max-weekly-octets"><?php echo __('Max Weekly Octets'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Max-Weekly-Octets', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="max-monthly-octets"><?php echo __('Max Monthly Octets'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Max-Monthly-Octets', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="max-all-octets"><?php echo __('Max Total Octets'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Max-All-Octets', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="content4">
                <h3><?php echo __('Time limits'); ?></h3>
                
                <div class="panel">
                    <div class="panel-body">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="max-daily-session"><?php echo __('Max Daily Time'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Max-Daily-Session', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="max-weekly-session"><?php echo __('Max Weekly Time'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Max-Weekly-Session', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="max-monthly-session"><?php echo __('Max Monthly Time'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Max-Monthly-Session', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="text-right" colspan="1"><label for="max-all-session"><?php echo __('Max Total Time'); ?></label></td>
                                    <td colspan="1"><?php echo $this->Form->input('Max-All-Session', ['label' => false]); ?></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

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