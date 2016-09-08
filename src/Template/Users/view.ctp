<?php $this->assign('title', 'Freeradius / Groups'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="groups view large-9 medium-8 columns content">
    <section>
        
        <h2 class="left"><?php echo $user['username']; ?></h2>
        <div class="right">
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $user['username']], ['class' => 'button success']) ?>
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
                                <td class="text-right" colspan="1"><b><?php echo __('User Name'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['username'])) { echo $user['username']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Password Type'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Password-Type'])) { echo $user['Password-Type']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Location ID'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['WISPr-Location-ID'])) { echo $user['WISPr-Location-ID']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Location Name'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['WISPr-Location-Name'])) { echo $user['WISPr-Location-Name']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Reply Message'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Reply-Message'])) { echo $user['Reply-Message']; } ?></td>
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
                                <td class="text-right" colspan="1"><b><?php echo __('Groups'); ?></b></td>
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
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Port Limit'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Port-Limit'])) { echo $user['Port-Limit']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Session Timeout'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Session-Timeout'])) { echo $user['Session-Timeout']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Redirection URL (On login success)'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['WISPr-Redirection-URL'])) { echo $user['WISPr-Redirection-URL']; } ?></td>
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
                                <td colspan="1"><?php if(isset($user['WISPr-Bandwidth-Max-Down'])) { echo $user['WISPr-Bandwidth-Max-Down']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Bandwidth Max Up'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['WISPr-Bandwidth-Max-Up'])) { echo $user['WISPr-Bandwidth-Max-Up']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Bandwidth Min Down'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['WISPr-Bandwidth-Min-Down'])) { echo $user['WISPr-Bandwidth-Min-Down']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Bandwidth Min Up'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['WISPr-Bandwidth-Min-Up'])) { echo $user['WISPr-Bandwidth-Min-Up']; } ?></td>
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
                                <td colspan="1"><?php if(isset($user['Max-Daily-Octets'])) { echo $user['Max-Daily-Octets']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Weekly Octets'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Max-Weekly-Octets'])) { echo $user['Max-Weekly-Octets']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Monthly Octets'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Max-Monthly-Octets'])) { echo $user['Max-Monthly-Octets']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Total Octets'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Max-All-Octets'])) { echo $user['Max-All-Octets']; } ?></td>
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
                                <td colspan="1"><?php if(isset($user['Max-Daily-Session'])) { echo $user['Max-Daily-Session']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Weekly Time'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Max-Weekly-Session'])) { echo $user['Max-Weekly-Session']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Monthly Time'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Max-Monthly-Session'])) { echo $user['Max-Monthly-Session']; } ?></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-right" colspan="1"><b><?php echo __('Max Total Time'); ?></b></td>
                                <td colspan="1"><?php if(isset($user['Max-All-Session'])) { echo $user['Max-All-Session']; } ?></td>
                                <td></td>
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
                        <table>
                            <tbody>
                                <?php
                                $i = 0;
                                foreach ($radusergroup as $group) {
                                    ?>
                                    <tr>
                                        <td class="text-right" colspan="1"><b><?php echo __($group->groupname); ?></b></td>
                                        <td colspan="1"><?php echo $group->priority; ?></td>
                                        <td></td>
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
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $user['username']], ['class' => 'button success']) ?>
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button']) ?>
        </div>
        <div class="clearfix"></div>

    </section>
</main>