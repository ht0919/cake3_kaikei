<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作項目') ?></li>
        <li><?= $this->Html->link(__('経費登録'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('科目一覧'), ['controller' => 'Kamokus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('科目登録'), ['controller' => 'Kamokus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="keihis index large-9 medium-8 columns content">
    <h3><?= __('経費一覧') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','番号') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date','日付') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kamoku_id','科目') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kingaku','金額') ?></th>
                <th scope="col" class="actions"><?= __('操作') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($keihis as $keihi): ?>
            <tr>
                <td><?= $this->Number->format($keihi->id) ?></td>
                <!-- <td><?= h($keihi->date) ?></td> -->
                <td><?= h($keihi->date->format('Y-m-d')) ?></td>
                <!-- <td><?= $keihi->has('kamokus') ? $this->Html->link($keihi->kamokus->id, ['controller' => 'Kamokus', 'action' => 'view', $keihi->kamokus->id]) : '' ?></td> -->
                <td><?= $keihi->has('kamokus') ? $this->Html->link($keihi->kamokus->kamokumei, ['controller' => 'Kamokus', 'action' => 'view', $keihi->kamokus->id]) : '' ?></td>
                <td><?= $this->Number->format($keihi->kingaku) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $keihi->id]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $keihi->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $keihi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $keihi->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('前頁')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次頁') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
