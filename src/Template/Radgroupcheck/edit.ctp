<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $radgroupcheck->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $radgroupcheck->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Radgroupcheck'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="radgroupcheck form large-9 medium-8 columns content">
    <?= $this->Form->create($radgroupcheck) ?>
    <fieldset>
        <legend><?= __('Edit Radgroupcheck') ?></legend>
        <?php
            echo $this->Form->input('groupname');
            echo $this->Form->input('attribute');
            echo $this->Form->input('op');
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
