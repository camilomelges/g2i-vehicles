<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vehicle $vehicle
 */
?>
<div class="row col-sm-12 no-padding no-margin" style="height: 100%; position: absolute;">
    <nav class="col-sm-3 no-padding no-margin new-sidebar" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Form->postLink(
                    __('Delete Vehicle'),
                    ['action' => 'delete', $vehicle->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]
                )
            ?></li>
            <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li>
        </ul>
    </nav>
    <div class="col-sm-9 no-padding no-margin p-10">
        <?= $this->Form->create($vehicle) ?>
        <fieldset>
            <legend><?= __('Edit Vehicle') ?></legend>
            <?php
                echo $this->Form->control('brand_id', ['options' => $brands]);
                echo $this->Form->control('modelName');
                echo $this->Form->control('modelImage');
                echo $this->Form->control('yearFabrication');
                echo $this->Form->control('yearModel');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>