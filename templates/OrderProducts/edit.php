<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderProduct $orderProduct
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderProduct->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderProduct->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Order Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderProducts form content">
            <?= $this->Form->create($orderProduct) ?>
            <fieldset>
                <legend><?= __('Edit Order Product') ?></legend>
                <?php
                    echo $this->Form->control('id_products');
                    echo $this->Form->control('price_total');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
