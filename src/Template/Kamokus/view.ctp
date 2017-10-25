<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作項目') ?></li>
        <li><?= $this->Html->link(__('科目編集'), ['action' => 'edit', $kamokus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('科目削除'), ['action' => 'delete', $kamokus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kamokus->id)]) ?> </li>
        <li><?= $this->Html->link(__('科目一覧'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('科目登録'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kamokus view large-9 medium-8 columns content">
    <h3><?= h($kamokus->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('番号') ?></th>
            <td><?= $this->Number->format($kamokus->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('科目名') ?></h4>
        <?= $this->Text->autoParagraph(h($kamokus->kamokumei)); ?>
    </div>
</div>
