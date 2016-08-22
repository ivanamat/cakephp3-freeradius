<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Na'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nas index large-9 medium-8 columns content">
    <h3><?= __('Network Access Server') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nasname') ?></th>
                <th><?= $this->Paginator->sort('shortname') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th><?= $this->Paginator->sort('ports') ?></th>
                <th><?= $this->Paginator->sort('secret') ?></th>
                <th><?= $this->Paginator->sort('server') ?></th>
                <th><?= $this->Paginator->sort('community') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nas as $na): ?>
            <tr>
                <td><?= $this->Number->format($na->id) ?></td>
                <td><?= h($na->nasname) ?></td>
                <td><?= h($na->shortname) ?></td>
                <td><?= h($na->type) ?></td>
                <td><?= $this->Number->format($na->ports) ?></td>
                <td><?= h($na->secret) ?></td>
                <td><?= h($na->server) ?></td>
                <td><?= h($na->community) ?></td>
                <td><?= h($na->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $na->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $na->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $na->id], ['confirm' => __('Are you sure you want to delete # {0}?', $na->id)]) ?>
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
