<?php $this->assign('title', 'Freeradius / Groups'); ?>

<?php echo $this->element('sidebar'); ?>

<div class="categories index large-9 medium-8 columns content">
    <h3 class="left"><?php echo __('Groups') ?></h3>
    <?php echo $this->Html->link(__('Create group'),['action' => 'add'],['class' => 'button default small right']); ?>
    <div class="clearfix"></div>

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