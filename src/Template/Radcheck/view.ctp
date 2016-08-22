<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Radcheck'), ['action' => 'edit', $radcheck->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Radcheck'), ['action' => 'delete', $radcheck->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radcheck->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Radcheck'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Radcheck'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="radcheck view large-9 medium-8 columns content">
    <h3><?= h($radcheck->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($radcheck->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Attribute') ?></th>
            <td><?= h($radcheck->attribute) ?></td>
        </tr>
        <tr>
            <th><?= __('Op') ?></th>
            <td><?= h($radcheck->op) ?></td>
        </tr>
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($radcheck->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($radcheck->id) ?></td>
        </tr>
    </table>
</div>
