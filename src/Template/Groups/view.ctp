<?php $this->assign('title', 'Freeradius / Groups / ' . $group['groupname']); ?>

<?php echo $this->element('sidebar'); ?>

<main class="groups view large-10 medium-9 columns content">
    <section id="groups">
        <h2 class="left"><?php echo $group['groupname']; ?></h2>
        <div class="right">
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $group['groupname']], ['class' => 'button success small']) ?>
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button small']) ?>
        </div>
        <hr class="clearfix" />
        
        <section id="general">
            <h3><?php echo __('Access'); ?></h3>
            <div class="panel">
                <div class="panel-body">
                    <table class="vertical-table transparent inverted">
                        <tbody>
                            <tr>
                                <th><?php echo __('Group Name'); ?></th>
                                <td><?php if(isset($group['groupname'])) { echo $group['groupname']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Location ID'); ?></th>
                                <td><?php if(isset($group['WISPr-Location-ID'])) { echo $group['WISPr-Location-ID']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Location Name'); ?></th>
                                <td><?php if(isset($group['WISPr-Location-Name'])) { echo $group['WISPr-Location-Name']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Reply Message'); ?></th>
                                <td><?php if(isset($group['Reply-Message'])) { echo $group['Reply-Message']; } ?></td>
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
                                <th><?php echo __('Port Limit'); ?></th>
                                <td><?php if(isset($group['Port-Limit'])) { echo $group['Port-Limit']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Session Timeout'); ?></th>
                                <td><?php if(isset($group['Session-Timeout'])) { echo $group['Session-Timeout']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Redirection URL (On login success)'); ?></th>
                                <td><?php if(isset($group['WISPr-Redirection-URL'])) { echo $group['WISPr-Redirection-URL']; } ?></td>
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
                                <td><?php if(isset($group['WISPr-Bandwidth-Max-Down'])) { echo $group['WISPr-Bandwidth-Max-Down']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Bandwidth Max Up'); ?></th>
                                <td><?php if(isset($group['WISPr-Bandwidth-Max-Up'])) { echo $group['WISPr-Bandwidth-Max-Up']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Bandwidth Min Down'); ?></th>
                                <td><?php if(isset($group['WISPr-Bandwidth-Min-Down'])) { echo $group['WISPr-Bandwidth-Min-Down']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Bandwidth Min Up'); ?></th>
                                <td><?php if(isset($group['WISPr-Bandwidth-Min-Up'])) { echo $group['WISPr-Bandwidth-Min-Up']; } ?></td>
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
                                <td><?php if(isset($group['Max-Daily-Octets'])) { echo $group['Max-Daily-Octets']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Weekly Octets'); ?></th>
                                <td><?php if(isset($group['Max-Weekly-Octets'])) { echo $group['Max-Weekly-Octets']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Monthly Octets'); ?></th>
                                <td><?php if(isset($group['Max-Monthly-Octets'])) { echo $group['Max-Monthly-Octets']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Total Octets'); ?></th>
                                <td><?php if(isset($group['Max-All-Octets'])) { echo $group['Max-All-Octets']; } ?></td>
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
                                <td><?php if(isset($group['Max-Daily-Session'])) { echo $group['Max-Daily-Session']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Weekly Time'); ?></th>
                                <td><?php if(isset($group['Max-Weekly-Session'])) { echo $group['Max-Weekly-Session']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Monthly Time'); ?></th>
                                <td><?php if(isset($group['Max-Monthly-Session'])) { echo $group['Max-Monthly-Session']; } ?></td>
                            </tr>
                            <tr>
                                <th><?php echo __('Max Total Time'); ?></th>
                                <td><?php if(isset($group['Max-All-Session'])) { echo $group['Max-All-Session']; } ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <section id="related">
            <h3><?php echo __('Related'); ?></h3>

            <div class="panel">
                <div class="panel-body">
                    <table class="vertical-table transparent inverted">
                        <tbody>
                            <tr>
                                <th><?php echo __('Number of users'); ?></th>
                                <td><?php if(isset($group['users'])) { echo count($group['users']); } else { echo "0"; } ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <div class="right">
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $group['groupname']], ['class' => 'button success']) ?>
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
        <div class="clearfix"></div>

    </section>
</main>