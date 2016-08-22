<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Radgroupreply'), ['action' => 'edit', $radgroupreply->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Radgroupreply'), ['action' => 'delete', $radgroupreply->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radgroupreply->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Radgroupreply'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Radgroupreply'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="radgroupreply view large-9 medium-8 columns content">
    <h3><?= h($radgroupreply->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Groupname') ?></th>
            <td><?= h($radgroupreply->groupname) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute') ?></th>
            <td><?= h($radgroupreply->attribute) ?></td>
        </tr>
        <tr>
            <th><?= __('Op') ?></th>
            <td><?= h($radgroupreply->op) ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($radgroupreply->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($radgroupreply->id) ?></td>
        </tr>
    </table>
</div>
