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
            <li><?= $this->Html->link(__('Edit Vehicle'), ['action' => 'edit', $vehicle->id]) ?> </li>
            <li><?= $this->Form->postLink(__('Delete Vehicle'), ['action' => 'delete', $vehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicle->id)]) ?> </li>
            <li><?= $this->Html->link(__('List Vehicles'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('List Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?> </li>
            <li><?= $this->Html->link(__('New Vehicle'), ['action' => 'add']) ?> </li>
        </ul>
    </nav>
    <div class="col-sm-9 no-padding no-margin pm-b-0 p-10">
    <div><?= $this->Html->link($this->Html->image($vehicle->brand->brandLogo, ["height"=>"50", "width"=>"50"]), ['controller' => 'Brands', 'action' => 'view', $vehicle->brand->id], array('escape' => false))?></div>
        <div class="col-sm-12 no-padding no-margin">
                <div class="col-sm-12 no-padding no-margin text-center border-bottom m-b-5"><?= h($vehicle->brand->brandName)?> - <?= h($vehicle->modelName) ?></div>
                <div class="col-sm-12 no-padding no-margin text-center border-bottom m-b-5"><img src="<?= h($vehicle->modelImage) ?>" alt="img"></div>
                <div class="row no-padding no-margin border-bottom m-b-5">
                    <div class="row col-sm-6 no-padding no-margin">
                        <label class="col-sm-4 no-padding no-margin">
                            Ano de fabricação:
                        </label>
                        <div class="col-sm-8 no-padding no-margin"><?= number_format($vehicle->yearFabrication, 0, ',', ''); ?></div>
                    </div>
                    <div class="row col-sm-6 no-padding no-margin">
                        <label class="col-sm-4 no-padding no-margin">
                            Ano do modelo:
                        </label>
                        <div class="col-sm-8 no-padding no-margin"><?= number_format($vehicle->yearModel, 0, ',', ''); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>