<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dictionary Attributes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dictionary Vendors'), ['controller' => 'DictionaryVendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dictionary Vendor'), ['controller' => 'DictionaryVendors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dictionaryAttributes form large-9 medium-8 columns content">
    <?= $this->Form->create($dictionaryAttribute) ?>
    <fieldset>
        <legend><?= __('Add Dictionary Attribute') ?></legend>
        <?php
            echo $this->Form->input('dictionary_vendor_id', ['options' => $dictionaryVendors]);
            echo $this->Form->input('name');
            echo $this->Form->input('oid');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
