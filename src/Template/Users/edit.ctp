<?php 
$this->assign('title', 'Freeradius / Users / Edit / '.$this->request->data['username']); 

$passwordTypes = [
    'Cleartext-Password' => 'Cleartext-Password',
    'Crypt-Password' => 'Crypt-Password',
    'MD5-Password' => 'MD5-Password',
    'SMD5-Password' => 'SMD5-Password',
    'SHA-Password' => 'SHA-Password',
    'SSHA-Password' => 'SSHA-Password'
];
?>

<?php echo $this->element('sidebar'); ?>

<main class="users edit large-10 medium-9 columns content">
    <?php echo $this->Form->create('User'); ?>
        <section>
            
            <h2 class="left"><?php echo __('Edit ' . $this->request->data['username']); ?></h2>
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
                                    <th><label><?php echo __('User Name'); ?></label></th>
                                    <td>
                                        <?php echo $this->Form->input('username', ['label' => false, 'id' => false, 'disabled' => true]); ?>
                                        <?php echo $this->Form->input('username', ['type' => 'hidden']); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th><label for="password-type"><?php echo __('Password Type'); ?></label></th>
                                    <td><?php echo $this->Form->select('Password-Type', $passwordTypes,['id' => 'password-type','label' => false, 'default' => 'SSHA-Password']); ?></td>
                                </tr>
                                <tr>
                                    <th><label for="password"><?php echo __('Password'); ?></label></th>
                                    <td><?php echo $this->Form->input('password', ['label' => false, 'required' => false]); ?></td>
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
                                    <td><?php echo $this->Form->textarea('Reply-Message', ['id' => 'reply-message', 'label' => false]); ?></td>
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
                                    <th><label for="groupslist"><?php echo __('Groups'); ?></label></th>
                                    <td><?php echo $this->Form->select('groups', $groups,['id' => 'groupslist','label' => false,'empty' => [null => 'none'], 'multiple' => true, 'selected' => $this->request->data['groups']]); ?></td>
                                </tr>
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

            <?php if(count($radusergroup) > 0): ?>
                <section id="priority">
                    <h3><?php echo __('Priority group'); ?></h3>

                    <div class="panel">
                        <div class="panel-body">
                            <table class="vertical-table transparent inverted">
                                <tbody>
                                    <?php
                                    $i = 0;
                                    foreach ($radusergroup as $group) {
                                        ?>
                                        <tr>
                                            <th><label for="max-daily-session"><?php echo __($group->groupname); ?></label></th>
                                            <td><?php echo $this->Form->input('priority.'.$group->groupname, ['label' => false, 'value' => $group->priority]); ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </section>
            <?php endif; ?>
            
            <div class="right">
                <?php echo $this->Form->button(__('Save'), ['class' => 'button success small']) ?>
                <?php echo $this->Html->link(__('Cancel'), ['action' => 'index'],['class' => 'button small']) ?>
            </div>
            <div class="clearfix"></div>
                
        </section>
    <?php echo $this->Form->end(); ?>
</main>