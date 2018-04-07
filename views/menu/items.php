<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $menuProvider,
    'columns' => [
        'id',
        'name',
        'image',
        'price',
        'weight',
        [
            'attribute' => 'compositionItems',
            'value' => function ($data) {
                return $data->getCompositionString();
            },
        ],
    ]
]);