<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Groups'), ['controller' => 'Groups','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading">Dictionary</li>
        <li><?= $this->Html->link(__('Dictionary update'), ['controller' => 'Dashboard', 'action' => 'update'],['confirm' => __('¿Deseas actualizar el diccionario?')]) ?></li>
    </ul>
</nav>
<div class="freeradius index large-9 medium-8 columns content">
    
</div>