<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Radreply'), ['action' => 'edit', $radreply->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Radreply'), ['action' => 'delete', $radreply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radreply->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Radreply'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Radreply'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="radreply view large-9 medium-8 columns content">
    <h3><?= h($radreply->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($radreply->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute') ?></th>
            <td><?= h($radreply->attribute) ?></td>
        </tr>
        <tr>
            <th><?= __('Op') ?></th>
            <td><?= h($radreply->op) ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($radreply->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($radreply->id) ?></td>
        </tr>
    </table>
</div>
