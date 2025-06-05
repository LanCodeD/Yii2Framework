<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <!-- Botón para mostrar/ocultar el formulario de búsqueda -->
    <p>
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
            Buscar <i class="bi bi-search"></i>
        </button>
    </p>

    <!-- Contenido colapsable (formulario _search.php) -->
    <div class="collapse mb-3" id="collapseSearch">
        <div class="card card-body">
            <?= $this->render('_search', ['model' => $searchModel]) ?>
        </div>
    </div>

    <!-- Tabla de perfiles -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute' => 'perfilIdLink', 'format' => 'raw'],
            ['attribute' => 'userLink', 'format' => 'raw'],
            'nombre',
            'apellido',
            'fecha_nacimiento',
            'generoNombre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
