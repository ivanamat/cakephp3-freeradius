<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dictionary Vendors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Dictionary Attributes'), ['controller' => 'DictionaryAttributes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dictionary Attribute'), ['controller' => 'DictionaryAttributes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dictionaryVendors form large-9 medium-8 columns content">
    <?= $this->Form->create($dictionaryVendor) ?>
    <fieldset>
        <legend><?= __('Add Dictionary Vendor') ?></legend>
        <?php
            echo $this->Form->input('vendor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>