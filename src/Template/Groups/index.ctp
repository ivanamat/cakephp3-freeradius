<?php $this->assign('title', 'Freeradius / Groups'); ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?php echo __('Actions') ?></li>
        <li><?php echo $this->Html->link(__('New Group'), ['action' => 'add']) ?></li>
        <li><?php echo $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?php echo $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?php echo $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?></li>
        <li><?php echo $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories index large-6 medium-6 columns content">
    <h3><?php echo __('Groups') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('groupname'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groups as $group): ?>
            <tr>
                <td><?php echo $this->Number->format($group->id); ?></td>
                <td><?php echo h($group->groupname); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $group->groupname]) ?> · 
                    <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?php echo $this->Paginator->prev('< ' . __('previous')); ?>
            <?php echo $this->Paginator->numbers(); ?>
            <?php echo $this->Paginator->next(__('next') . ' >'); ?>
        </ul>
        <p><?php echo $this->Paginator->counter() ?></p>
    </div>
</div>

<div class="categories index large-3 medium-2 columns content">
    <div class="panel panel-default">
        <div class="panel-body">
            <h4><?php echo __('Add group') ?></h4>
            <?php echo $this->Form->create($radgroupcheck) ?>
                <fieldset>
                    <?php echo $this->Form->input('groupname',['required' => true]); ?>
                    <div class="required input">
                        <label for="message"><?php echo __('Message'); ?></label>
                        <?php echo $this->Form->textarea('reply_message',['id' => 'message', 'required' => true]); ?>
                    </div>
                </fieldset>
                <div class="right">
                    <?php echo $this->Form->button(__('Create'), ['class' => 'success']) ?>
                </div>
                <div class="clearfix"></div>
            <?php echo $this->Form->end() ?>
        </div>
    </div>
</div>