<?php
Yii::$app->db->open();
/* @var $this yii\web\View */
use yii\helpers\Html;

$this->title = 'รพ.เชียงคาน';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>ติดตั้ง Yii สำเร็จแล้วครับ</h1>

        <p class="lead">วันที่ 5 กันยายน 2558</p>
    </div>
    
    
    <?= Html::a('ลิงค์ที่ 1',['send/send'],['class' => 'btn btn-success']); ?>
    
    <?php echo '<br/>'; ?>
    
    <?= Html::a('ลิงค์ที่ 2',[''],['class' => 'btn btn-danger']); ?>
    

</div>

