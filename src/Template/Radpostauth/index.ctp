<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Radpostauth'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="radpostauth index large-9 medium-8 columns content">
    <h3><?= __('Radpostauth') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('pass') ?></th>
                <th><?= $this->Paginator->sort('reply') ?></th>
                <th><?= $this->Paginator->sort('authdate') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($radpostauth as $radpostauth): ?>
            <tr>
                <td><?= $this->Number->format($radpostauth->id) ?></td>
                <td><?= h($radpostauth->username) ?></td>
                <td><?= h($radpostauth->pass) ?></td>
                <td><?= h($radpostauth->reply) ?></td>
                <td><?= h($radpostauth->authdate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $radpostauth->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $radpostauth->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $radpostauth->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radpostauth->id)]) ?>
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
