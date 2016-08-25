<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dictionary Attribute'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dictionary Vendors'), ['controller' => 'DictionaryVendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dictionary Vendor'), ['controller' => 'DictionaryVendors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dictionaryAttributes index large-9 medium-8 columns content">
    <h3><?= __('Dictionary Attributes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('dictionary_vendor_id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('oid') ?></th>
                <th><?= $this->Paginator->sort('type') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dictionaryAttributes as $dictionaryAttribute): ?>
            <tr>
                <td><?= $this->Number->format($dictionaryAttribute->id) ?></td>
                <td><?= $dictionaryAttribute->has('dictionary_vendor') ? $this->Html->link($dictionaryAttribute->dictionary_vendor->id, ['controller' => 'DictionaryVendors', 'action' => 'view', $dictionaryAttribute->dictionary_vendor->id]) : '' ?></td>
                <td><?= h($dictionaryAttribute->name) ?></td>
                <td><?= $this->Number->format($dictionaryAttribute->oid) ?></td>
                <td><?= h($dictionaryAttribute->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dictionaryAttribute->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dictionaryAttribute->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dictionaryAttribute->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dictionaryAttribute->id)]) ?>
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
