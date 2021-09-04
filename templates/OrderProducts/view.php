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
            <?= $this->Html->link(__('Edit Order Product'), ['action' => 'edit', $orderProduct->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order Product'), ['action' => 'delete', $orderProduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderProduct->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Order Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderProducts view content">
            <h3><?= h($orderProduct->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($orderProduct->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Products') ?></th>
                    <td><?= $this->Number->format($orderProduct->id_products) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price Total') ?></th>
                    <td><?= $this->Number->format($orderProduct->price_total) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
