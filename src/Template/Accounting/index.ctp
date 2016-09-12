<?php $this->assign('title', 'Freeradius / Accounting'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="radacct index large-10 medium-9 columns content">
    <section id="accounting">
        <h2 class="left"><?= __('Accounting Log') ?></h2>
        <hr class="clearfix" />

        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('username', ['User']) ?></th>
                    <th><?= $this->Paginator->sort('groupname', ['Group']) ?></th>
                    <th><?= $this->Paginator->sort('nasipaddress', ['NAS IP']) ?></th>
                    <th><?= $this->Paginator->sort('nasporttype', ['Port Type']) ?></th>
                    <th><?= $this->Paginator->sort('acctstarttime', ['Start']) ?></th>
                    <th><?= $this->Paginator->sort('acctstoptime', ['Stop']) ?></th>
                    <th><?= $this->Paginator->sort('acctsessiontime', ['Session Time']) ?></th>
                    <th><?= $this->Paginator->sort('acctinputoctets', ['In. Oct.']) ?></th>
                    <th><?= $this->Paginator->sort('acctoutputoctets', ['Out. Oct.']) ?></th>
                    <th><?= $this->Paginator->sort('calledstationid', ['Called ID']) ?></th>
                    <th><?= $this->Paginator->sort('callingstationid', ['Calling ID']) ?></th>
                    <th><?= $this->Paginator->sort('framedipaddress', ['IP']) ?></th>
                    <th><?= $this->Paginator->sort('acctterminatecause', ['Cause']) ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($radacct as $radacct): ?>
                <tr>
                    <td class="ellipsis"><?= h($radacct->username) ?></td>
                    <td class="ellipsis"><?= h($radacct->groupname) ?></td>
                    <td class="ellipsis"><?= h($radacct->nasipaddress) ?></td>
                    <td class="ellipsis"><?= h($radacct->nasporttype) ?></td>
                    <td><?= h($radacct->acctstarttime) ?></td>
                    <td><?= h($radacct->acctstoptime) ?></td>
                    <td class="ellipsis"><?= $this->Number->format($radacct->acctsessiontime) ?></td>
                    <td class="ellipsis"><?= $this->Number->format($radacct->acctinputoctets) ?></td>
                    <td class="ellipsis"><?= $this->Number->format($radacct->acctoutputoctets) ?></td>
                    <td class="ellipsis"><?= h($radacct->calledstationid) ?></td>
                    <td class="ellipsis"><?= h($radacct->callingstationid) ?></td>
                    <td class="ellipsis"><?= h($radacct->framedipaddress) ?></td>
                    <td class="ellipsis"><?= h($radacct->acctterminatecause) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $radacct->radacctid]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="paginator">
            <ul class="pagination">
                <?php echo $this->Paginator->first('<< ' . __('first')) ?>
                <?php echo $this->Paginator->prev('< ' . __('previous')) ?>
                <?php echo $this->Paginator->numbers() ?>
                <?php echo $this->Paginator->next(__('next') . ' >') ?>
                <?php echo $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
        
    </section>
</main>
