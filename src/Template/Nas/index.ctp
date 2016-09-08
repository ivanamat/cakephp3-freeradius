<?php $this->assign('title', 'Freeradius / NAS'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="nas index large-10 medium-9 columns content">
    <section id="nas">
        <h2 class="left"><?php echo __('Network Access Server') ?></h2>
        <div class="right">
            <?php echo $this->Html->link(__('Create NAS'),['action' => 'add'],['class' => 'button default small']); ?>
        </div>
        <hr class="clearfix" />
        
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('id') ?></th>
                    <th><?php echo $this->Paginator->sort('nasname') ?></th>
                    <th><?php echo $this->Paginator->sort('shortname') ?></th>
                    <th><?php echo $this->Paginator->sort('type') ?></th>
                    <th><?php echo $this->Paginator->sort('ports') ?></th>
                    <th><?php echo $this->Paginator->sort('secret') ?></th>
                    <th><?php echo $this->Paginator->sort('server') ?></th>
                    <th><?php echo $this->Paginator->sort('community') ?></th>
                    <th><?php echo $this->Paginator->sort('description') ?></th>
                    <th class="actions"><?php echo __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nas as $na): ?>
                <tr>
                    <td><?php echo $this->Number->format($na->id) ?></td>
                    <td><?php echo h($na->nasname) ?></td>
                    <td><?php echo h($na->shortname) ?></td>
                    <td><?php echo h($na->type) ?></td>
                    <td><?php echo $this->Number->format($na->ports) ?></td>
                    <td><?php echo h(str_repeat("*", strlen($na->secret))) ?></td>
                    <td><?php echo h($na->server) ?></td>
                    <td><?php echo h($na->community) ?></td>
                    <td><?php echo h($na->description) ?></td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View'), ['action' => 'view', $na->id]) ?> · 
                        <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $na->id]) ?> · 
                        <?php echo $this->Form->postLink(__('Delete'), ['action' => 'delete', $na->id], ['confirm' => __('Are you sure you want to delete # {0}?', $na->id)]) ?>
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
            <p class="text-center"><?php echo $this->Paginator->counter() ?></p>
        </div>
    </section>
</main>
