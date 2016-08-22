<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Radreply'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="radreply index large-9 medium-8 columns content">
    <h3><?= __('Radreply') ?></h3>
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
            <?php foreach ($radreply as $radreply): ?>
            <tr>
                <td><?= $this->Number->format($radreply->id) ?></td>
                <td><?= h($radreply->username) ?></td>
                <td><?= h($radreply->attribute) ?></td>
                <td><?= h($radreply->op) ?></td>
                <td><?= h($radreply->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $radreply->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $radreply->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $radreply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radreply->id)]) ?>
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
