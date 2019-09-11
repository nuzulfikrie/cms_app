<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articlesTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articlesTag->article_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articlesTag->article_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articles Tags'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articlesTags form large-9 medium-8 columns content">
    <?= $this->Form->create($articlesTag) ?>
    <fieldset>
        <legend><?= __('Edit Articles Tag') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
