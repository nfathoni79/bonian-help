<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Faq $faq
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Faqs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Faq Categories'), ['controller' => 'FaqCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Faq Category'), ['controller' => 'FaqCategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="faqs form large-9 medium-8 columns content">
    <?= $this->Form->create($faq) ?>
    <fieldset>
        <legend><?= __('Add Faq') ?></legend>
        <?php
            echo $this->Form->control('faq_category_id', ['options' => $faqCategories]);
            echo $this->Form->control('judul');
            echo $this->Form->control('content');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
