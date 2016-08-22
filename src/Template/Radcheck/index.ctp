<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Radcheck'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="radcheck index large-9 medium-8 columns content">
    <h3><?= __('Radcheck') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('attribute') ?></th>
                <th><?= $this->Paginator->sort('op') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($radcheck as $radcheck): ?>
            <tr>
                <td><?= $this->Number->format($radcheck->id) ?></td>
                <td><?= h($radcheck->username) ?></td>
                <td><?= h($radcheck->attribute) ?></td>
                <td><?= h($radcheck->op) ?></td>
                <td><?= h($radcheck->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $radcheck->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $radcheck->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $radcheck->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radcheck->id)]) ?>
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
