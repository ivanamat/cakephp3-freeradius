<?php $controller = strtolower($this->request->params['controller']); ?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <h2 class="hide"><?php echo __('Freeradius menu'); ?></h2>
    
    <ul class="side-nav">
        <li class="heading"><?= __('Freeradius') ?></li>
        <li<?php if($controller == 'nas') { echo " class=\"active\""; } ?>><?= $this->Html->link(__('NAS'), ['controller' => 'Nas','action' => 'index']) ?></li>
        <li<?php if($controller == 'groups') { echo " class=\"active\""; } ?>><?= $this->Html->link(__('Groups'), ['controller' => 'Groups','action' => 'index']) ?></li>
        <li<?php if($controller == 'users') { echo " class=\"active\""; } ?>><?= $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li<?php if($controller == 'radpostauth') { echo " class=\"active\""; } ?>><?= $this->Html->link(__('Post-Authentication'), ['controller' => 'radpostauth', 'action' => 'index']) ?></li>
        <li<?php if($controller == 'radacct') { echo " class=\"active\""; } ?>><?= $this->Html->link(__('Accounting'), ['controller' => 'radacct', 'action' => 'index']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading">Dictionary</li>
        <li><?= $this->Html->link(__('Dictionary update'), ['controller' => 'Dashboard', 'action' => 'update'],['confirm' => __('¿Deseas actualizar el diccionario?')]) ?></li>
    </ul>
</nav>