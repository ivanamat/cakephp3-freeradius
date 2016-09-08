<?php $this->assign('title', 'Freeradius / NAS / ' . $na->nasname); ?>

<?php echo $this->element('sidebar'); ?>

<main class="nas view large-10 medium-9 columns content">
    <section id="radpostauth">
        <h2 class='left'><?php echo $na->nasname; ?></h2>
        <div class="right">
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $na->id], ['class' => 'button success small']) ?>
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button small']) ?>
        </div>
        <hr class="clearfix" />
        
        <h3><?php echo h($na->shortname); ?></h3>
        <div class="panel">
            <div class="panel-body">
                <table class="vertical-table transparent inverted">
                    <tbody>
                        <tr>
                            <th><?php echo h(__('NAS Name')); ?></th>
                            <td><?php echo $na->nasname; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo h(__('Short Name')); ?></th>
                            <td colspan="1"><?php echo $na->shortname; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo h(__('Type')); ?></th>
                            <td><?php echo $na->shortname; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo h(__('Ports')); ?></th>
                            <td><?php echo $na->ports; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo h(__('Secret')); ?></th>
                            <td><?php echo $na->secret; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo h(__('Community')); ?></th>
                            <td><?php echo $na->community; ?></td>
                        </tr>
                        <tr>
                            <th><?php echo h(__('Description')); ?></th>
                            <td><?php echo $na->description; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="right">
            <?php echo $this->Html->link(__('Edit'), ['action' => 'edit', $na->id], ['class' => 'button success small']) ?>
            <?php echo $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'button small']) ?>
        </div>
        <div class="clearfix"></div>
    </section>
</main>
