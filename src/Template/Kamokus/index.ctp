<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('操作項目') ?></li>
        <li><?= $this->Html->link(__('科目登録'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('経費一覧'), ['controller' => 'Keihis', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('経費登録'), ['controller' => 'Keihis', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kamokus index large-9 medium-8 columns content">
    <h3><?= __('科目一覧') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','番号') ?></th>
                <th scope="col"><?= __('科目名') ?></th>
                <th scope="col" class="actions"><?= __('操作') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kamokus as $kamokus): ?>
            <tr>
                <td><?= $this->Number->format($kamokus->id) ?></td>
                <td><?= __($kamokus->kamokumei) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $kamokus->id]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $kamokus->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $kamokus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kamokus->id)]) ?>
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
