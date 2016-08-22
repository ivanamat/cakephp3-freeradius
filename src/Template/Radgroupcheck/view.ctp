<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Radgroupcheck'), ['action' => 'edit', $radgroupcheck->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Radgroupcheck'), ['action' => 'delete', $radgroupcheck->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radgroupcheck->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Radgroupcheck'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Radgroupcheck'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="radgroupcheck view large-9 medium-8 columns content">
    <h3><?= h($radgroupcheck->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Groupname') ?></th>
            <td><?= h($radgroupcheck->groupname) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute') ?></th>
            <td><?= h($radgroupcheck->attribute) ?></td>
        </tr>
        <tr>
            <th><?= __('Op') ?></th>
            <td><?= h($radgroupcheck->op) ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($radgroupcheck->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($radgroupcheck->id) ?></td>
        </tr>
    </table>
</div>
