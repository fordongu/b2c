<?php
$db['count_member_buy'] = array(
    'columns'=>array(
        'cid' => array(
            'type'=>'number',
            'pkey'=>true,
            'required'=>true,
            'editable'=>false,
            'extra'=>'auto_increment',
            'in_list'=>false,
        ),
        'special_id'=>array(
            'type'=>'table:special',
            'label'=>app::get('starbuy')->_('规则id'),
            'comment'=>app::get('starbuy')->_('规则id'),
        ),
        'product_id'=>array(
            'type'=>'table:products@b2c',
            'label'=>app::get('starbuy')->_('货品id'),
            'comment'=>app::get('starbuy')->_('货品id'),
        ),
        'member_id'=>array(
            'type'=>'table:members@b2c',
            'label'=>app::get('starbuy')->_('会员id'),
            'comment'=>app::get('starbuy')->_('会员id'),
        ),
        'count'=>array(
            'type'=>'number',
            'label'=>app::get('starbuy')->_('购买数量'),
            'comment'=>app::get('starbuy')->_('购买数量'),
        ),
    ),
    'index' => array(
        'ind_member_count'=>array(
            'columns' => array(
                0 => 'member_id',
                1 => 'special_id',
                2 => 'product_id',
            ),
            'prefix' =>'UNIQUE',
        ),
    ),
);
