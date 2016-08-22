<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Radacct'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="radacct form large-9 medium-8 columns content">
    <?= $this->Form->create($radacct) ?>
    <fieldset>
        <legend><?= __('Add Radacct') ?></legend>
        <?php
            echo $this->Form->input('acctsessionid');
            echo $this->Form->input('acctuniqueid');
            echo $this->Form->input('username');
            echo $this->Form->input('groupname');
            echo $this->Form->input('realm');
            echo $this->Form->input('nasipaddress');
            echo $this->Form->input('nasportid');
            echo $this->Form->input('nasporttype');
            echo $this->Form->input('acctstarttime', ['empty' => true]);
            echo $this->Form->input('acctupdatetime', ['empty' => true]);
            echo $this->Form->input('acctstoptime', ['empty' => true]);
            echo $this->Form->input('acctinterval');
            echo $this->Form->input('acctsessiontime');
            echo $this->Form->input('acctauthentic');
            echo $this->Form->input('connectinfo_start');
            echo $this->Form->input('connectinfo_stop');
            echo $this->Form->input('acctinputoctets');
            echo $this->Form->input('acctoutputoctets');
            echo $this->Form->input('calledstationid');
            echo $this->Form->input('callingstationid');
            echo $this->Form->input('acctterminatecause');
            echo $this->Form->input('servicetype');
            echo $this->Form->input('framedprotocol');
            echo $this->Form->input('framedipaddress');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
