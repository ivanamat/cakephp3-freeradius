<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Radgroupcheck'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="radgroupcheck index large-9 medium-8 columns content">
    <h3><?= __('Radgroupcheck') ?></h3>
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
            <?php foreach ($radgroupcheck as $radgroupcheck): ?>
            <tr>
                <td><?= $this->Number->format($radgroupcheck->id) ?></td>
                <td><?= h($radgroupcheck->groupname) ?></td>
                <td><?= h($radgroupcheck->attribute) ?></td>
                <td><?= h($radgroupcheck->op) ?></td>
                <td><?= h($radgroupcheck->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $radgroupcheck->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $radgroupcheck->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $radgroupcheck->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radgroupcheck->id)]) ?>
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
