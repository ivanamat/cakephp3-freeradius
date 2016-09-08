<?php $this->assign('title', 'Freeradius / Users / Post-Authentication'); ?>

<?php echo $this->element('sidebar'); ?>

<main class="radpostauth index large-10 medium-9 columns content">
    <section id="nas">
        
        <h2 class="left"><?php echo __('Post-Authentication Log') ?></h2>
        <hr class="clearfix" />

        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th><?php echo $this->Paginator->sort('username') ?></th>
                    <th><?php echo $this->Paginator->sort('pass') ?></th>
                    <th><?php echo $this->Paginator->sort('reply') ?></th>
                    <th><?php echo $this->Paginator->sort('authdate') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($radpostauth as $radpostauth): ?>
                <tr>
                    <td><?php echo h($radpostauth->username) ?></td>
                    <td class="ellipsis"><?php echo h($radpostauth->pass) ?></td>
                    <td><?php echo h($radpostauth->reply) ?></td>
                    <td><?php echo h($radpostauth->authdate) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?php echo $this->Paginator->first('<< ' . __('first')) ?>
                <?php echo $this->Paginator->prev('< ' . __('previous')) ?>
                <?php echo $this->Paginator->numbers() ?>
                <?php echo $this->Paginator->next(__('next') . ' >') ?>
                <?php echo $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p class="text-center"><?php echo $this->Paginator->counter() ?></p>
        </div>
        
    </section>
</main>
