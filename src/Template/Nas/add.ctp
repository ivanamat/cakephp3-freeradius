<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="nas form large-9 medium-8 columns content">
    <?= $this->Form->create($na) ?>
    <fieldset>
        <legend><?= __('Add Network Access Server') ?></legend>
        <?php echo $this->Form->input('nasname', ['placeholder' => '10.0.0.0/24']); ?>
        <?php echo $this->Form->input('shortname', ['placeholder' => 'VPN']); ?>
        <?php echo $this->Form->input('type', ['value' => 'other']); ?>
        <?php echo $this->Form->input('ports', ['value' => 1812]); ?>
        <?php echo $this->Form->input('secret', ['placeholder' => 'testing123']); ?>
        <?php echo $this->Form->input('server', ['value' => 'default']); ?>
        <?php echo $this->Form->input('community', ['placeholder' => 'My Community']); ?>
        <?php echo $this->Form->textarea('description', ['placeholder' => 'Describe here whom you have granted permissions.']); ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
