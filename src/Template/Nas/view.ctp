<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Na'), ['action' => 'edit', $na->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Na'), ['action' => 'delete', $na->id], ['confirm' => __('Are you sure you want to delete # {0}?', $na->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Na'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nas view large-9 medium-8 columns content">
    <h3><?= h($na->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nasname') ?></th>
            <td><?= h($na->nasname) ?></td>
        </tr>
        <tr>
            <th><?= __('Shortname') ?></th>
            <td><?= h($na->shortname) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($na->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Secret') ?></th>
            <td><?= h($na->secret) ?></td>
        </tr>
        <tr>
            <th><?= __('Server') ?></th>
            <td><?= h($na->server) ?></td>
        </tr>
        <tr>
            <th><?= __('Community') ?></th>
            <td><?= h($na->community) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($na->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($na->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ports') ?></th>
            <td><?= $this->Number->format($na->ports) ?></td>
        </tr>
    </table>
</div>
