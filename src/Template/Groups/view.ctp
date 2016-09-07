<?php $this->assign('title', 'Freeradius / Groups'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="groups view large-9 medium-8 columns content">
    <section>
        
        <h2 class="left"><?php echo $group['groupname']; ?></h2>
        <div class="right">
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $group['groupname']], ['class' => 'button success']) ?>
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
        <div class="clearfix"></div>
        <hr />
        
        <section id="access">
            <h3><?php echo __('Access'); ?></h3>
            <div class="panel">
                <div class="panel-body">
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Group Name'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['groupname'])) { echo $group['groupname']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Location ID'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['WISPr-Location-ID'])) { echo $group['WISPr-Location-ID']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Location Name'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['WISPr-Location-Name'])) { echo $group['WISPr-Location-Name']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Reply Message'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Reply-Message'])) { echo $group['Reply-Message']; } ?></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

            <h3><?php echo __('General'); ?></h3>
            <div class="panel">
                <div class="panel-body">
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Port Limit'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Port-Limit'])) { echo $group['Port-Limit']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Session Timeout'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Session-Timeout'])) { echo $group['Session-Timeout']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Redirection URL (On login success)'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['WISPr-Redirection-URL'])) { echo $group['WISPr-Redirection-URL']; } ?></td>
                                <td></td>
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
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Bandwidth Max Down'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['WISPr-Bandwidth-Max-Down'])) { echo $group['WISPr-Bandwidth-Max-Down']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Bandwidth Max Up'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['WISPr-Bandwidth-Max-Up'])) { echo $group['WISPr-Bandwidth-Max-Up']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Bandwidth Min Down'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['WISPr-Bandwidth-Min-Down'])) { echo $group['WISPr-Bandwidth-Min-Down']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Bandwidth Min Up'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['WISPr-Bandwidth-Min-Up'])) { echo $group['WISPr-Bandwidth-Min-Up']; } ?></td>
                                <td></td>
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
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Daily Octets'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Max-Daily-Octets'])) { echo $group['Max-Daily-Octets']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Weekly Octets'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Max-Weekly-Octets'])) { echo $group['Max-Weekly-Octets']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Monthly Octets'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Max-Monthly-Octets'])) { echo $group['Max-Monthly-Octets']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Total Octets'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Max-All-Octets'])) { echo $group['Max-All-Octets']; } ?></td>
                                <td></td>
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
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Daily Time'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Max-Daily-Session'])) { echo $group['Max-Daily-Session']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Weekly Time'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Max-Weekly-Session'])) { echo $group['Max-Weekly-Session']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Monthly Time'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Max-Monthly-Session'])) { echo $group['Max-Monthly-Session']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Total Time'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['Max-All-Session'])) { echo $group['Max-All-Session']; } ?></td>
                                <td></td>
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
                    <table>
                        <tbody>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Number of users'); ?></b></td>
                                <td colspan="1"><?php if(isset($group['users'])) { echo count($group['users']); } else { echo "0"; } ?></td>
                                <td></td>
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