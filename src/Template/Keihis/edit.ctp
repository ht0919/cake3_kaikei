<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作項目') ?></li>
        <li><?= $this->Form->postLink(
                __('経費削除'),
                ['action' => 'delete', $keihi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $keihi->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('経費一覧'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('科目一覧'), ['controller' => 'Kamokus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('科目登録'), ['controller' => 'Kamokus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="keihis form large-9 medium-8 columns content">
    <?= $this->Form->create($keihi) ?>
    <fieldset>
        <legend><?= __('経費編集') ?></legend>
        <?php
            echo $this->Form->input('date', ['label'=>'日付','monthNames'=>false]);
            echo $this->Form->input('kamoku_id', ['label'=>'科目', 'options' => $kamokus]);
            echo $this->Form->input('tekiyou', ['label'=>'適用']);
            echo $this->Form->input('kingaku', ['label'=>'金額']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('登録')) ?>
    <?= $this->Form->end() ?>
</div>
