<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Blogpost $blogpost
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Blogpost'), ['action' => 'edit', $blogpost->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Blogpost'), ['action' => 'delete', $blogpost->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogpost->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Blogposts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Blogpost'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blogposts view content">
            <h3><?= h($blogpost->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($blogpost->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contents') ?></th>
                    <td><?= h($blogpost->contents) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($blogpost->Id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($blogpost->date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
