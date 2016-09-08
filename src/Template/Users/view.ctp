<?php $this->assign('title', 'Freeradius / Users / ' . $user['username']); ?>

<?php echo $this->element('sidebar'); ?>

<main class="users view large-10 medium-9 columns content">
    <section>
        
        <h2 class="left"><?php echo $user['username']; ?></h2>
        <div class="right">
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $user['username']], ['class' => 'button success small']) ?>
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button small']) ?>
        </div>
        <hr class="clearfix" />
        
        <section id="access">
            <h3><?php echo __('Access'); ?></h3>
            
            <div class="panel">
                <div class="panel-body">
                    <table class="vertical-table transparent inverted">
                        <tbody>
                            <tr>
                                <th><?php echo __('User Name'); ?></th>
                                <td colspan="1"><?php if(isset($user['username'])) { echo $user['username']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Password Type'); ?></th>
                                <td colspan="1"><?php if(isset($user['Password-Type'])) { echo $user['Password-Type']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Location ID'); ?></th>
                                <td colspan="1"><?php if(isset($user['WISPr-Location-ID'])) { echo $user['WISPr-Location-ID']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Location Name'); ?></th>
                                <td colspan="1"><?php if(isset($user['WISPr-Location-Name'])) { echo $user['WISPr-Location-Name']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Reply Message'); ?></th>
                                <td colspan="1"><?php if(isset($user['Reply-Message'])) { echo $user['Reply-Message']; } ?></td>
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
                                <th><?php echo __('Groups'); ?></th>
                                <td colspan="1">
                                    <?php 
                                    $groups = '';
                                    if(isset($user['groups'])) { 
                                        foreach($user['groups'] as $group){
                                            $groups .= $group.', ';
                                        }
                                    }
                                    echo trim($groups, ', ');
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th><?php echo __('Port Limit'); ?></th>
                                <td colspan="1"><?php if(isset($user['Port-Limit'])) { echo $user['Port-Limit']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Session Timeout'); ?></th>
                                <td colspan="1"><?php if(isset($user['Session-Timeout'])) { echo $user['Session-Timeout']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Redirection URL (On login success)'); ?></th>
                                <td colspan="1"><?php if(isset($user['WISPr-Redirection-URL'])) { echo $user['WISPr-Redirection-URL']; } ?></td>
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
                                <th><?php echo __('Bandwidth Max Down'); ?></th>
                                <td colspan="1"><?php if(isset($user['WISPr-Bandwidth-Max-Down'])) { echo $user['WISPr-Bandwidth-Max-Down']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Bandwidth Max Up'); ?></th>
                                <td colspan="1"><?php if(isset($user['WISPr-Bandwidth-Max-Up'])) { echo $user['WISPr-Bandwidth-Max-Up']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Bandwidth Min Down'); ?></th>
                                <td colspan="1"><?php if(isset($user['WISPr-Bandwidth-Min-Down'])) { echo $user['WISPr-Bandwidth-Min-Down']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Bandwidth Min Up'); ?></th>
                                <td colspan="1"><?php if(isset($user['WISPr-Bandwidth-Min-Up'])) { echo $user['WISPr-Bandwidth-Min-Up']; } ?></td>
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
                                <th><?php echo __('Max Daily Octets'); ?></th>
                                <td colspan="1"><?php if(isset($user['Max-Daily-Octets'])) { echo $user['Max-Daily-Octets']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Weekly Octets'); ?></th>
                                <td colspan="1"><?php if(isset($user['Max-Weekly-Octets'])) { echo $user['Max-Weekly-Octets']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Monthly Octets'); ?></th>
                                <td colspan="1"><?php if(isset($user['Max-Monthly-Octets'])) { echo $user['Max-Monthly-Octets']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Total Octets'); ?></th>
                                <td colspan="1"><?php if(isset($user['Max-All-Octets'])) { echo $user['Max-All-Octets']; } ?></td>
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
                                <th><?php echo __('Max Daily Time'); ?></th>
                                <td colspan="1"><?php if(isset($user['Max-Daily-Session'])) { echo $user['Max-Daily-Session']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Weekly Time'); ?></th>
                                <td colspan="1"><?php if(isset($user['Max-Weekly-Session'])) { echo $user['Max-Weekly-Session']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Monthly Time'); ?></th>
                                <td colspan="1"><?php if(isset($user['Max-Monthly-Session'])) { echo $user['Max-Monthly-Session']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Total Time'); ?></th>
                                <td colspan="1"><?php if(isset($user['Max-All-Session'])) { echo $user['Max-All-Session']; } ?></td>
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
                                        <th><?php echo __($group->groupname); ?></th>
                                        <td colspan="1"><?php echo $group->priority; ?></td>
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
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $user['username']], ['class' => 'button success small']) ?>
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button small']) ?>
        </div>
        <div class="clearfix"></div>

    </section>
</main>