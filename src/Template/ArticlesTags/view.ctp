<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $articlesTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articles Tag'), ['action' => 'edit', $articlesTag->article_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articles Tag'), ['action' => 'delete', $articlesTag->article_id], ['confirm' => __('Are you sure you want to delete # {0}?', $articlesTag->article_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articles Tag'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articlesTags view large-9 medium-8 columns content">
    <h3><?= h($articlesTag->article_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Article Id') ?></th>
            <td><?= $this->Number->format($articlesTag->article_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag Id') ?></th>
            <td><?= $this->Number->format($articlesTag->tag_id) ?></td>
        </tr>
    </table>
</div>
