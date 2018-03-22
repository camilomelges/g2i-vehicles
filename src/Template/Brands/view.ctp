<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Brand $brand
 */
?>
<nav class="large-3 medium-4 columns new-sidebar" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Brand'), ['action' => 'edit', $brand->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Brand'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicles'), ['controller' => 'Vehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle'), ['controller' => 'Vehicles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="brands view large-9 medium-8 columns content">
    <div class="vertical-table">
            <div class="text-center">
            <?=$this->html->image($brand->brandLogo, ['width' => '80px']);?><?= h($brand->brandName) ?>
            </div>
    </div>
    <div class="related">
        <h4><?= __('Veículos da marca') ?></h4>
        <?php if (!empty($brand->vehicles)): ?>
        <div class="col-sm-12 no-margin no-padding view large-9 medium-8 columns content pm-b-0">
            <?php foreach ($brand->vehicles as $vehicle): ?>
            <div class="col-sm-12 no-padding no-margin m-b-30 p-10 gray-border">
                <div><?= $this->Html->link($this->Html->image($brand->brandLogo, ["height"=>"50", "width"=>"50"]), ['controller' => 'Brands', 'action' => 'view', $brand->id], array('escape' => false))?></div>
                    <div class="col-sm-12 no-padding no-margin text-center border-bottom m-b-5"><?= h($brand->brandName)?> - <?= h($vehicle->modelName) ?></div>
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
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
