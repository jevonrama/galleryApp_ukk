<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo[]|\Cake\Collection\CollectionInterface $photos
 */
?>

<?php
$this->assign('title', __('Photos'));
$this->Breadcrumbs->add([
    ['title' => __('Home'), 'url' => '/'],
    ['title' => __('List Photos')],
]);
?>

<div class="card card-primary card-outline">
    <div class="card-header d-flex flex-column flex-md-row">
        <h2 class="card-title">
            <!-- -->
        </h2>
        <div class="d-flex ml-auto">
            <?= $this->Paginator->limitControl([], null, [
                'label' => false,
                'class' => 'form-control form-control-sm',
                'templates' => ['inputContainer' => '{{content}}']
            ]); ?>
            <?= $this->Html->link(__('New Photo'), ['action' => 'add'], ['class' => 'btn btn-primary btn-sm ml-2']) ?>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body d-flex flex-wrap">
        <?php foreach ($photos as $photo) : ?>
        <div class="card m-2" style="width: 18rem;">
            <?= $this->Html->image('../upload/' . $photo->image, ['width' => '100px', 'class' => 'card-img-top']); ?>
            <div class="card-body">
                <h5 class="card-title"><?= h($photo->title) ?></h5>
                <p class="card-text"><?= h($photo->description) ?></p>
                <?= $this->Html->link(__('View'), ['action' => 'view', $photo->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                <div class="mt-1">
            <?= $this->Form->create(null, ['url' => ['controller'=>'likes', 'action'=>'add'], 'role'=>'form']) ?>
            <?php 
                    $auth = $this->getRequest()->getSession()->read()['Auth'];
                ?>
                <input type="hidden" name="user_id" id="" value="<?=$auth['id']?>">
                <input type="hidden" name="photo_id" value = "<?=$photo->id?>">
               
            </div>
                <button type="submit" class="btn btn-danger" ><i class="fas fa-heart"></i></button>
            <?= $this->Form->end() ?>
            </div>
            
        </div>
        <?php endforeach; ?>
    </div>
    <!-- /.card-body -->
    <div class="card-footer d-flex flex-column flex-md-row">
        <div class="text-muted">
            <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
        </div>
        <ul class="pagination pagination-sm mb-0 ml-auto">
            <?= $this->Paginator->first('<i class="fas fa-angle-double-left"></i>', ['escape' => false]) ?>
            <?= $this->Paginator->prev('<i class="fas fa-angle-left"></i>', ['escape' => false]) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('<i class="fas fa-angle-right"></i>', ['escape' => false]) ?>
            <?= $this->Paginator->last('<i class="fas fa-angle-double-right"></i>', ['escape' => false]) ?>
        </ul>
    </div>
    <!-- /.card-footer -->
</div>