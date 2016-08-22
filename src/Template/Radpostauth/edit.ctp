<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $radpostauth->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $radpostauth->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Radpostauth'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="radpostauth form large-9 medium-8 columns content">
    <?= $this->Form->create($radpostauth) ?>
    <fieldset>
        <legend><?= __('Edit Radpostauth') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('pass');
            echo $this->Form->input('reply');
            echo $this->Form->input('authdate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
