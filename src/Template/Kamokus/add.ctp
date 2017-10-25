<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作項目') ?></li>
        <li><?= $this->Html->link(__('科目一覧'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="kamokus form large-9 medium-8 columns content">
    <?= $this->Form->create($kamokus) ?>
    <fieldset>
        <legend><?= __('科目登録') ?></legend>
        <?php
            echo $this->Form->input('kamokumei', ['label'=>'科目名']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('登録')) ?>
    <?= $this->Form->end() ?>
</div>
