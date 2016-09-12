<?php $controller = strtolower($this->request->params['controller']); ?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <h2 class="hide"><?php echo __('Freeradius menu'); ?></h2>
    
    <ul class="side-nav">
        <li class="heading"><?php echo __('Freeradius') ?></li>
        <li<?php if($controller == 'nas') { echo " class=\"active\""; } ?>><?php echo $this->Html->link(__('NAS'), ['controller' => 'Nas','action' => 'index']) ?></li>
        <li<?php if($controller == 'groups') { echo " class=\"active\""; } ?>><?php echo $this->Html->link(__('Groups'), ['controller' => 'Groups','action' => 'index']) ?></li>
        <li<?php if($controller == 'users') { echo " class=\"active\""; } ?>><?php echo $this->Html->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li<?php if($controller == 'post-authentication') { echo " class=\"active\""; } ?>><?php echo $this->Html->link(__('Post-Authentication'), ['controller' => 'PostAuthentication', 'action' => 'index']) ?></li>
        <li<?php if($controller == 'accounting') { echo " class=\"active\""; } ?>><?php echo $this->Html->link(__('Accounting'), ['controller' => 'Accounting', 'action' => 'index']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading">Dictionary</li>
        <li><?php echo $this->Html->link(__('Dictionary update'), ['controller' => 'Dictionary', 'action' => 'update'],['confirm' => __('¿Deseas actualizar el diccionario?')]) ?></li>
    </ul>
    
</nav>