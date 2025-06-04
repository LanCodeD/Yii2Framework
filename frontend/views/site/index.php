<?php
/** @var yii\web\View $this */
use yii\helpers\Html;

$this->title = 'Yii 2 Build';
?>

<!-- Facebook SDK (solo una vez por página) -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
    src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v17.0"
    nonce="abc123"></script>

<div class="site-index">

    <div class="p-5 mb-4 bg-light rounded-3 text-center">
        <?php if (Yii::$app->user->isGuest): ?>
            <?= Html::a('Comience Hoy', ['site/signup'], ['class' => 'btn btn-lg btn-success']) ?>
        <?php endif; ?>

        <h1>Yii 2 Build <i class="fa fa-plug"></i></h1>
        <p class="lead">Use esta plantilla de Yii 2 para comenzar Proyectos.</p>

        <!-- Botón Like de Facebook -->
        <div class="fb-like" data-href="http://www.yii2build.com" data-width=""
            data-layout="standard" data-action="like" data-size="small"
            data-share="true"></div>
    </div>

    <!-- Collapse estilo Bootstrap 5 -->
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    Características Principales
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="fb-share-button" data-href="http://www.yii2build.com"
                        data-layout="button_count"></div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    Recursos Principales
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="fb-share-button" data-href="http://www.yii2build.com"
                        data-layout="button_count"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal trigger -->
    <button type="button" class="btn btn-primary mt-4" data-bs-toggle="modal" data-bs-target="#comentariosModal">
        Comentarios
    </button>

    <!-- Modal Bootstrap 5 -->
    <div class="modal fade" id="comentariosModal" tabindex="-1" aria-labelledby="comentariosModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="comentariosModalLabel">Últimos Comentarios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="fb-comments" data-href="http://www.yii2build.com"
                        data-width="100%" data-numposts="5"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Alert de Bootstrap 5 -->
    <div class="alert alert-info mt-4" role="alert">
        Lance su proyecto como un cohete...
    </div>

    <div class="body-content mt-4">
        <div class="row">
            <div class="col-lg-4">
                <h2>Gratis</h2>
                <p>
                    <?php
                    if (!Yii::$app->user->isGuest) {
                        echo Yii::$app->user->identity->username . ' está haciendo cosas geniales. ';
                    }
                    ?>
                    Partiendo de esta plantilla de código abierto y gratuita de Yii 2 ahorrará mucho tiempo.
                </p>
                <p>
                    <a class="btn btn-outline-secondary" href="http://www.yiiframework.com/doc-2.0/guide-index.html">
                        Documentación de Yii &raquo;
                    </a>
                </p>
                <div class="fb-like" data-href="http://www.yii2build.com" data-width=""
                    data-layout="standard" data-action="like" data-size="small"
                    data-share="false"></div>
            </div>
            <div class="col-lg-4">
                <h2>Ventajas</h2>
                <p> La facilidad de uso es una enorme ventaja.  Hemos simplificado el RBAC y le hemos
                    otorgado tipos de usuario Gratuito/Pago de manera predeterminada.  Los plugins sociales
                    son tan sencillos y rápidos de instalar, ¡que los amará!</p>
                <p>
                    <a class="btn btn-outline-secondary" href="http://www.yiiframework.com/forum/">
                        Foro de Yii &raquo;
                    </a>
                </p>
                <div class="fb-comments" data-href="http://www.yii2build.com"
                    data-width="100%" data-numposts="2"></div>
            </div>
            <div class="col-lg-4">
                <h2>¡Codifique Rápidamente, Codifique Correctamente!</h2>
                <p> Libere el poder del asombroso framework Yii 2 con esta plantilla mejorada.
                    Con base en la plantilla avanzada de Yii 2, obtiene una implementación de frontend y
                    backend completa que presenta una IU rica para la administración del backend.</p>
                <p>
                    <a class="btn btn-outline-secondary" href="http://www.yiiframework.com/extensions/">
                        Extensiones de Yii &raquo;
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
