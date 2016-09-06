<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <h2 class="hide"><?php echo __('Freeradius menu'); ?></h2>
    
    <ul class="side-nav">
        <li class="heading"><?= __('Freeradius') ?></li>
        <li><?= $this->Html->link(__('Groups'), ['controller' => 'Groups','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading">Dictionary</li>
        <li><?= $this->Html->link(__('Dictionary update'), ['controller' => 'Dashboard', 'action' => 'update'],['confirm' => __('¿Deseas actualizar el diccionario?')]) ?></li>
    </ul>
</nav>