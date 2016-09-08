<?php $this->assign('title', 'Freeradius / Groups'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="groups index large-10 medium-9 columns content">
    <section id="groups">
        <h2 class="left"><?php echo __('Groups') ?></h2>
        <div class="right">
            <?php echo $this->Html->link(__('Create group'), ['action' => 'add'], ['class' => 'button default small']); ?>
        </div>
        <hr class="clearfix" /> 

        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('groupname'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($groups as $group): ?>
                    <tr>
                        <td><?php echo h($group->groupname); ?></td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), ['action' => 'view', $group->groupname]) ?> · 
                            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $group->groupname]) ?> · 
                            <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $group->groupname], ['confirm' => __('Are you sure you want to delete {0}?', $group->groupname)]) ?>
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
            <p class="text-center"><?php echo $this->Paginator->counter() ?></p>
        </div>
    </section>
</main>