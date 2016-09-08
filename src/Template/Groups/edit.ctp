<?php $this->assign('title', 'Freeradius / Groups / Edit ' . $this->request->data['groupname']); ?>

<?php echo $this->element('sidebar'); ?>

<main class="groups edit large-10 medium-9 columns content">
    <section>
        <?php echo $this->Form->create('Group'); ?>
            <h2 class='left'><?php echo __('Edit ' . $this->request->data['groupname']); ?></h2>
            <div class="right">
                <?php echo $this->Form->button(__('Save'), ['class' => 'button success small']) ?>
                <?php echo $this->Html->link(__('Cancel'), ['action' => 'index'],['class' => 'button small']) ?>
            </div>
            <hr class="clearfix" />

            <section id="general">
                <h3><?php echo __('Access'); ?></h3>
                <div class="panel">
                    <div class="panel-body">
                        <table class="vertical-table transparent inverted">
                            <tbody>
                                <tr>
                                    <th><div class="input text required"><label for="groupname"><?php echo __('Group Name'); ?></label></div></th>
                                    <td><?php echo $this->Form->input('groupname', ['label' => false,'required' => true]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="wispr-location-id"><?php echo __('Location ID'); ?></label></th>
                                    <td><?php echo $this->Form->input('WISPr-Location-ID', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="wispr-location-name"><?php echo __('Location Name'); ?></label></th>
                                    <td><?php echo $this->Form->input('WISPr-Location-Name', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="reply-message"><?php echo __('Reply Message'); ?></label></th>
                                    <td><?php echo $this->Form->textarea('Reply-Message', ['label' => false]); ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                
                <h3><?php echo __('General'); ?></h3>
                <div class="panel">
                    <div class="panel-body">
                        <table class="vertical-table transparent inverted">
                            <tbody>
                                <tr>
                                    <th><label for="port-limit"><?php echo __('Port Limit'); ?></label></th>
                                    <td><?php echo $this->Form->input('Port-Limit', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="session-timeout"><?php echo __('Session Timeout'); ?></label></th>
                                    <td><?php echo $this->Form->input('Session-Timeout', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="wispr-redirection-url"><?php echo __('Redirection URL (On login success)'); ?></label></th>
                                    <td><?php echo $this->Form->input('WISPr-Redirection-URL', ['label' => false]); ?></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </section>

            <section id="bandwidth">
                <h3><?php echo __('Bandwidth'); ?></h3>
                
                <div class="panel">
                    <div class="panel-body">
                        <table class="vertical-table transparent inverted">
                            <tbody>
                                <tr>
                                    <th><label for="wispr-bandwidth-max-down"><?php echo __('Bandwidth Max Down'); ?></label></th>
                                    <td><?php echo $this->Form->input('WISPr-Bandwidth-Max-Down', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="wispr-bandwidth-max-up"><?php echo __('Bandwidth Max Up'); ?></label></th>
                                    <td><?php echo $this->Form->input('WISPr-Bandwidth-Max-Up', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="wispr-bandwidth-min-down"><?php echo __('Bandwidth Min Down'); ?></label></th>
                                    <td><?php echo $this->Form->input('WISPr-Bandwidth-Min-Down', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="wispr-bandwidth-min-up"><?php echo __('Bandwidth Min Up'); ?></label></th>
                                    <td><?php echo $this->Form->input('WISPr-Bandwidth-Min-Up', ['label' => false]); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            
            <section id="data">
                <h3><?php echo __('Data'); ?></h3>
                
                <div class="panel">
                    <div class="panel-body">
                        <table class="vertical-table transparent inverted">
                            <tbody>
                                <tr>
                                    <th><label for="max-daily-octets"><?php echo __('Max Daily Octets'); ?></label></th>
                                    <td><?php echo $this->Form->input('Max-Daily-Octets', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="max-weekly-octets"><?php echo __('Max Weekly Octets'); ?></label></th>
                                    <td><?php echo $this->Form->input('Max-Weekly-Octets', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="max-monthly-octets"><?php echo __('Max Monthly Octets'); ?></label></th>
                                    <td><?php echo $this->Form->input('Max-Monthly-Octets', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="max-all-octets"><?php echo __('Max Total Octets'); ?></label></th>
                                    <td><?php echo $this->Form->input('Max-All-Octets', ['label' => false]); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section id="time">
                <h3><?php echo __('Time'); ?></h3>
                
                <div class="panel">
                    <div class="panel-body">
                        <table class="vertical-table transparent inverted">
                            <tbody>
                                <tr>
                                    <th><label for="max-daily-session"><?php echo __('Max Daily Time'); ?></label></th>
                                    <td><?php echo $this->Form->input('Max-Daily-Session', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="max-weekly-session"><?php echo __('Max Weekly Time'); ?></label></th>
                                    <td><?php echo $this->Form->input('Max-Weekly-Session', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="max-monthly-session"><?php echo __('Max Monthly Time'); ?></label></th>
                                    <td><?php echo $this->Form->input('Max-Monthly-Session', ['label' => false]); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="max-all-session"><?php echo __('Max Total Time'); ?></label></th>
                                    <td><?php echo $this->Form->input('Max-All-Session', ['label' => false]); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <div class="right">
                <?php echo $this->Form->button(__('Save'), ['class' => 'button success small']) ?>
                <?php echo $this->Html->link(__('Cancel'), ['action' => 'index'],['class' => 'button small']) ?>
            </div>
            <div class="clearfix"></div>
                
        <?php echo $this->Form->end(); ?>
        
    </section>
</main>