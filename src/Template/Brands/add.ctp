<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brand $brand
 */
?>
<div class="row col-sm-12 no-padding no-margin" style="height: 100%; position: absolute;">
    <nav class="col-sm-3 no-padding no-margin new-sidebar" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?></li>
        </ul>
    </nav>
    <div class="col-sm-9 no-padding no-margin p-10">
        <?= $this->Form->create($brand) ?>
        <fieldset>
            <legend><?= __('Add Brand') ?></legend>
            <?php
                echo $this->Form->control('brandName');
                echo $this->Form->control('brandLogo');
            ?>
        </fieldset>
        <button class="btn" id="addBrand">Add Brand</button>
        <?= $this->Form->end() ?>
    </div>
</div>