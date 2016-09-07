<?php $this->assign('title', 'Freeradius / Users'); ?>

<?php echo $this->element('sidebar'); ?>

<div class="categories index large-9 medium-8 columns content">
    <h3 class="left"><?php echo __('Users') ?></h3>
    <?php echo $this->Html->link(__('Create user'),['action' => 'add'],['class' => 'button default small right']); ?>
    <div class="clearfix"></div>
    
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('username'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo h($user->username); ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), ['action' => 'view', $user->username]) ?> · 
                    <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $user->username]) ?> · 
                    <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->username], ['confirm' => __('Are you sure you want to delete {0}?', $user->username)]) ?>
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