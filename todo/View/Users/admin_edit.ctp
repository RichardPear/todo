<div class="block span12">
    <div class="block-heading" data-toggle="collapse" data-target="#tablewidget">网站设置</div>
    <div class="block-body collapse in">
        <p>
            <div class="alert">修改用户信息</div>
        </p>
        <?php 
            $this->BForm->formatInput = '<div class="control-group"><label class="control-label">%s</label><div class="controls">%s</div></div>';
         ?>
        <?php echo $this->BForm->create('User'); ?>
        <?php echo $this->BForm->input('id',array('label'=>false,'type'=>'hidden','style'=>'width:200px;')); ?>
        <?php echo $this->BForm->input('email',array('label'=>'邮箱:','type'=>'text','style'=>'width:200px;')); ?>
        <?php echo $this->BForm->input('password',array('label'=>'密码:','type'=>'text','style'=>'width:200px;')); ?>
        <?php echo $this->BForm->input('name',array('label'=>'用户名:','type'=>'text','style'=>'width:200px;')); ?>
        <?php echo $this->BForm->input('qq',array('label'=>'qq:','type'=>'text','style'=>'width:200px;')); ?>
        <?php echo $this->BForm->input('tel',array('label'=>'电话:','type'=>'text','style'=>'width:200px;')); ?>
        <?php echo $this->BForm->input('alipay',array('label'=>'支付宝:','type'=>'text','style'=>'width:200px;')); ?>
        <?php echo $this->BForm->input('point',array('label'=>'积分:','type'=>'text','style'=>'width:200px;')); ?>
        <?php echo $this->BForm->submit('提交'); ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>