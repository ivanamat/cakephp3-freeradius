<?php $this->assign('title', 'Freeradius / NAS / Edit ' . $na->nasname); ?>

<?php echo $this->element('sidebar'); ?>

<main class="nas edit large-10 medium-9 columns content">
    <?php echo $this->Form->create($na) ?>
        <section>
            <h2 class='left'><?php echo h(__('Edit {0}', $na->nasname)); ?></h2>
            <div class="right">
                <?php echo $this->Form->button(__('Save'), ['class' => 'button success small']) ?>
                <?php echo $this->Html->link(__('Back'), ['action' => 'index'],['class' => 'button small']) ?>
            </div>
            <hr class="clearfix" />
            <h3><?php echo h($na->shortname); ?></h3>
            <div class="panel">
                <div class="panel-body">
                    <table class="vertical-table transparent inverted">
                        <tbody>
                            <tr>
                                <th><div class="input text required"><label for="nasname"><?php echo __('NAS Name'); ?></label></div></th>
                                <td><?php echo $this->Form->input('nasname', ['label' => false,'required' => true]); ?></td>
                            </tr>
                            <tr>
                                <th><label for="shortname"><?php echo __('Short Name'); ?></label></th>
                                <td><?php echo $this->Form->input('shortname', ['label' => false]); ?></td>
                            </tr>
                            <tr>
                                <th><div class="input text required"><label for="type"><?php echo __('Type'); ?></label></div></th>
                                <td><?php echo $this->Form->input('type', ['label' => false,'required' => true]); ?></td>
                            </tr>
                            <tr>
                                <th><label for="ports"><?php echo __('Ports'); ?></label></th>
                                <td><?php echo $this->Form->input('ports', ['label' => false]); ?></td>
                            </tr>
                            <tr>
                                <th><div class="input text required"><label for="secret"><?php echo __('Secret'); ?></label></div></th>
                                <td><?php echo $this->Form->input('secret', ['label' => false,'required' => true]); ?></td>
                            </tr>
                            <tr>
                                <th><label for="community"><?php echo __('Community'); ?></label></th>
                                <td><?php echo $this->Form->input('community', ['label' => false]); ?></td>
                            </tr>
                            <tr>
                                <th><label for="description"><?php echo __('description'); ?></label></th>
                                <td><?php echo $this->Form->input('description', ['label' => false]); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="right">
                <?php echo $this->Form->button(__('Save'), ['class' => 'button success small']) ?>
                <?php echo $this->Html->link(__('Back'), ['action' => 'index'],['class' => 'button small']) ?>
            </div>
            <div class="clearfix"></div>
        </section>

    <?php echo $this->Form->end() ?>
</main>
