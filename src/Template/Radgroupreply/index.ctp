<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Radgroupreply'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="radgroupreply index large-9 medium-8 columns content">
    <h3><?= __('Radgroupreply') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('groupname') ?></th>
                <th><?= $this->Paginator->sort('attribute') ?></th>
                <th><?= $this->Paginator->sort('op') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($radgroupreply as $radgroupreply): ?>
            <tr>
                <td><?= $this->Number->format($radgroupreply->id) ?></td>
                <td><?= h($radgroupreply->groupname) ?></td>
                <td><?= h($radgroupreply->attribute) ?></td>
                <td><?= h($radgroupreply->op) ?></td>
                <td><?= h($radgroupreply->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $radgroupreply->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $radgroupreply->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $radgroupreply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radgroupreply->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
