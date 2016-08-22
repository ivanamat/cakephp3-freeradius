<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="nas form large-9 medium-8 columns content">
    <?= $this->Form->create($na) ?>
    <fieldset>
        <legend><?= __('Add Na') ?></legend>
        <?php
            echo $this->Form->input('nasname');
            echo $this->Form->input('shortname');
            echo $this->Form->input('type');
            echo $this->Form->input('ports');
            echo $this->Form->input('secret');
            echo $this->Form->input('server');
            echo $this->Form->input('community');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
