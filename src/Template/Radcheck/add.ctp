<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Radcheck'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="radcheck form large-9 medium-8 columns content">
    <?= $this->Form->create($radcheck) ?>
    <fieldset>
        <legend><?= __('Add Radcheck') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('attribute');
            echo $this->Form->input('op');
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
