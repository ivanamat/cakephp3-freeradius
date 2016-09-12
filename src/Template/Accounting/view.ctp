<?php $this->assign('title', 'Freeradius / Accounting / ' . $radacct->acctuniqueid); ?>

<?php echo $this->element('sidebar'); ?>

<main class="radacct view large-10 medium-9 columns content">
    <section>
        
        <h2 class="left"><?php echo h($radacct->username) ?></h2>
        <div class="right">
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'],['class' => 'button']) ?>
        </div>
        <hr class="clearfix" />
        
        <h3><?php echo $radacct->acctuniqueid; ?></h3>
        <div class="panel">
            <div class="panel-body">
                <table class="vertical-table transparent inverted">
                    <tr>
                        <th><?php echo __('Acctsessionid') ?></th>
                        <td><?php echo h($radacct->acctsessionid) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctuniqueid') ?></th>
                        <td><?php echo h($radacct->acctuniqueid) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Username') ?></th>
                        <td><?php echo h($radacct->username) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Groupname') ?></th>
                        <td><?php echo h($radacct->groupname) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Realm') ?></th>
                        <td><?php echo h($radacct->realm) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Nasipaddress') ?></th>
                        <td><?php echo h($radacct->nasipaddress) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Nasportid') ?></th>
                        <td><?php echo h($radacct->nasportid) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Nasporttype') ?></th>
                        <td><?php echo h($radacct->nasporttype) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctauthentic') ?></th>
                        <td><?php echo h($radacct->acctauthentic) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Connectinfo Start') ?></th>
                        <td><?php echo h($radacct->connectinfo_start) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Connectinfo Stop') ?></th>
                        <td><?php echo h($radacct->connectinfo_stop) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Calledstationid') ?></th>
                        <td><?php echo h($radacct->calledstationid) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Callingstationid') ?></th>
                        <td><?php echo h($radacct->callingstationid) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctterminatecause') ?></th>
                        <td><?php echo h($radacct->acctterminatecause) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Servicetype') ?></th>
                        <td><?php echo h($radacct->servicetype) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Framedprotocol') ?></th>
                        <td><?php echo h($radacct->framedprotocol) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Framedipaddress') ?></th>
                        <td><?php echo h($radacct->framedipaddress) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Radacctid') ?></th>
                        <td><?php echo $this->Number->format($radacct->radacctid) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctinterval') ?></th>
                        <td><?php echo $this->Number->format($radacct->acctinterval) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctsessiontime') ?></th>
                        <td><?php echo $this->Number->format($radacct->acctsessiontime) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctinputoctets') ?></th>
                        <td><?php echo $this->Number->format($radacct->acctinputoctets) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctoutputoctets') ?></th>
                        <td><?php echo $this->Number->format($radacct->acctoutputoctets) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctstarttime') ?></th>
                        <td><?php echo h($radacct->acctstarttime) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctupdatetime') ?></th>
                        <td><?php echo h($radacct->acctupdatetime) ?></td>
                    </tr>
                    <tr>
                        <th><?php echo __('Acctstoptime') ?></th>
                        <td><?php echo h($radacct->acctstoptime) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="right">
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'],['class' => 'button']) ?>
        </div>
        <div class="clearfix"></div>
        
    </section>
</main>
