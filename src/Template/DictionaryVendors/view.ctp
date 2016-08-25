<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dictionary Vendor'), ['action' => 'edit', $dictionaryVendor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dictionary Vendor'), ['action' => 'delete', $dictionaryVendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dictionaryVendor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dictionary Vendors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dictionary Vendor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dictionary Attributes'), ['controller' => 'DictionaryAttributes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dictionary Attribute'), ['controller' => 'DictionaryAttributes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dictionaryVendors view large-9 medium-8 columns content">
    <h3><?= h($dictionaryVendor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Vendor') ?></th>
            <td><?= h($dictionaryVendor->vendor) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($dictionaryVendor->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dictionary Attributes') ?></h4>
        <?php if (!empty($dictionaryVendor->dictionary_attributes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Dictionary Vendor Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Oid') ?></th>
                <th><?= __('Type') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dictionaryVendor->dictionary_attributes as $dictionaryAttributes): ?>
            <tr>
                <td><?= h($dictionaryAttributes->id) ?></td>
                <td><?= h($dictionaryAttributes->dictionary_vendor_id) ?></td>
                <td><?= h($dictionaryAttributes->name) ?></td>
                <td><?= h($dictionaryAttributes->oid) ?></td>
                <td><?= h($dictionaryAttributes->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DictionaryAttributes', 'action' => 'view', $dictionaryAttributes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DictionaryAttributes', 'action' => 'edit', $dictionaryAttributes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DictionaryAttributes', 'action' => 'delete', $dictionaryAttributes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dictionaryAttributes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
