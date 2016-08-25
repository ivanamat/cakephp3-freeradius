<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dictionary Attribute'), ['action' => 'edit', $dictionaryAttribute->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dictionary Attribute'), ['action' => 'delete', $dictionaryAttribute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dictionaryAttribute->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dictionary Attributes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dictionary Attribute'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dictionary Vendors'), ['controller' => 'DictionaryVendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dictionary Vendor'), ['controller' => 'DictionaryVendors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dictionaryAttributes view large-9 medium-8 columns content">
    <h3><?= h($dictionaryAttribute->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Dictionary Vendor') ?></th>
            <td><?= $dictionaryAttribute->has('dictionary_vendor') ? $this->Html->link($dictionaryAttribute->dictionary_vendor->id, ['controller' => 'DictionaryVendors', 'action' => 'view', $dictionaryAttribute->dictionary_vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($dictionaryAttribute->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Type') ?></th>
            <td><?= h($dictionaryAttribute->type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($dictionaryAttribute->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Oid') ?></th>
            <td><?= $this->Number->format($dictionaryAttribute->oid) ?></td>
        </tr>
    </table>
</div>
