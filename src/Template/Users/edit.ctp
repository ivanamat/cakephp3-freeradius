<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php echo __('Actions') ?></li>
        <li><?php echo $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?php echo $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?php echo $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories index large-6 medium-6 columns content">
    <h3><?php echo __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id') ?></th>
                <th><?php echo $this->Paginator->sort('username') ?></th>
                <th><?php echo $this->Paginator->sort('attribute', __('Password encryption')) ?></th>
                <th class="actions"><?php echo __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $this->Number->format($user->id) ?></td>
                <td><?php echo h($user->username) ?></td>
                <td><?php echo h($user->attribute) ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?> · 
                    <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->Paginator->prev('< ' . __('previous')) ?>
            <?php echo $this->Paginator->numbers() ?>
            <?php echo $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?php echo $this->Paginator->counter() ?></p>
    </div>
</div>

<div class="categories index large-3 medium-2 columns content">
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><?php echo __('Edit user') ?></h4>
            <?php unset($radcheck->value); echo $this->Form->create($radcheck); ?>
                <fieldset>
                    <?php echo $this->Form->input('username',['required' => true, 'disabled' => true]); ?>
                    <?php echo $this->Form->input('attribute',[
                        'label' => __('Password type'),
                        'options' => [
                            'Cleartext-Password' => 'Cleartext-Password',
                            'Crypt-Password' => 'Crypt-Password',
                            'MD5-Password' => 'MD5-Password',
                            'SMD5-Password' => 'SMD5-Password',
                            'SHA-Password' => 'SHA-Password',
                            'SSHA-Password' => 'SSHA-Password'
                        ],
                        'default' => 'Crypt-Password',
                        'required' => true]); ?>
                    <?php echo $this->Form->input('value',['label' => __('Password'),'required' => true]); ?>
                </fieldset>
                <div class="right">
                    <?php echo $this->Form->button(__('Save'), ['class' => 'success']) ?>
                    <?php echo $this->Html->link(__('Cancel'), ['action' => 'index'],['class' => 'button']) ?>
                </div>
                <div class="clearfix"></div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>