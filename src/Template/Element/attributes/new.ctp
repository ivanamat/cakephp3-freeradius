<div class="panel">
    <div class="panel-body">
        <div class="row">
            <?php // debug('ID:'.$attribute->id); ?>
            <div class="large-2 medium-2 columns">
                <?php echo $this->Form->input('vendor'); ?>
            </div>
            <div class="large-2 medium-2 columns">
                <?php echo $this->Form->input($n.'.groupname'); ?>
            </div>
            <div class="large-3 medium-3 columns">
                <?php echo $this->Form->input($n.'.attribute'); ?>
            </div>
            <div class="large-1 medium-1 columns">
                <?php echo $this->Form->input($n.'.op'); ?>
            </div>
            <div class="large-4 medium-4 columns">
                <?php echo $this->Form->input($n.'.value'); ?>
            </div>
        </div>
    </div>
</div>