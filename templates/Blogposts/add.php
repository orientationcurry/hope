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
            <?= $this->Html->link(__('List Blogposts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="blogposts form content">
            <?= $this->Form->create($blogpost) ?>
            <fieldset>
                <legend><?= __('Add Blogpost') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('date');
                    echo $this->Form->control('contents');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
