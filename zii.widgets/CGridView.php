<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    'filter'=>$model,
    'summaryText' => '',
    'cssFile' => Yii::app()->baseUrl . '/css/gridview.css',
    'id' => 'grid-view',
    'template' => '{items}',
    'enablePagination' => false,
    'columns'=>array(
        'record1',
        array('name'=>'record1','value'=>'$data->record1','headerHtmlOptions'=>array('class'=>'css-class')),
        array(
            'class'=>'CButtonColumn',
            'header'=>'Add',
            'template'=>'{add}',
            'buttons'=>array(
                'add'=>array(
                    'label'=>'Add',
                    'imageUrl'=>Yii::app()->request->baseUrl.'/images/icon/add.png',
                    'url'=>'Yii::app()->createUrl("url/path", array("id"=>$data->record1))',
                    'options'=>array(
                        'ajax'=>array(
                            'type'=>'POST',
                            'url'=>'js:$(this).attr("href")',
                            'success'=>'function(data, textStatus, jqXHR){
                            	//  Do something
                             }',
                            'error'=>'function(jqXHR, textStatus, errorThrown){
                                //  Do something
                            }',
                        ),
                    ),
                ),
            ),
        ),
    )
));