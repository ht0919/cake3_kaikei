<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作項目') ?></li>
        <li><?= $this->Html->link(__('経費編集'), ['action' => 'edit', $keihi->id]) ?> </li>
        <li><?= $this->Form->postLink(__('経費削除'), ['action' => 'delete', $keihi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keihi->id)]) ?> </li>
        <li><?= $this->Html->link(__('経費一覧'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('経費登録'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('科目一覧'), ['controller' => 'Kamokus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('科目登録'), ['controller' => 'Kamokus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="keihis view large-9 medium-8 columns content">
    <h3><?= h($keihi->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('科目') ?></th>
            <!-- <td><?= $keihi->has('kamokus') ? $this->Html->link($keihi->kamokus->id, ['controller' => 'Kamokus', 'action' => 'view', $keihi->kamokus->id]) : '' ?></td> -->
            <td><?= $keihi->has('kamokus') ? $this->Html->link($keihi->kamokus->kamokumei, ['controller' => 'Kamokus', 'action' => 'view', $keihi->kamokus->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('番号') ?></th>
            <td><?= $this->Number->format($keihi->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('金額') ?></th>
            <td><?= $this->Number->format($keihi->kingaku) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('日付') ?></th>
            <td><?= h($keihi->date->format('Y-m-d')) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('適用') ?></h4>
        <?= $this->Text->autoParagraph(h($keihi->tekiyou)); ?>
    </div>
</div>
