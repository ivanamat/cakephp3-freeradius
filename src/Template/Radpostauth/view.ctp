<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Radpostauth'), ['action' => 'edit', $radpostauth->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Radpostauth'), ['action' => 'delete', $radpostauth->id], ['confirm' => __('Are you sure you want to delete # {0}?', $radpostauth->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Radpostauth'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Radpostauth'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="radpostauth view large-9 medium-8 columns content">
    <h3><?= h($radpostauth->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($radpostauth->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Pass') ?></th>
            <td><?= h($radpostauth->pass) ?></td>
        </tr>
        <tr>
            <th><?= __('Reply') ?></th>
            <td><?= h($radpostauth->reply) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($radpostauth->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Authdate') ?></th>
            <td><?= h($radpostauth->authdate) ?></td>
        </tr>
    </table>
</div>
