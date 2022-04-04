<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;
use app\themes\adminLTE\components\ThemeNav;
?>
<?php $this->beginContent('@app/themes/adminLTE/layouts/main.php'); ?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo Yii::$app->request->baseUrl; ?>/img/photo3.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                    $info[] = Yii::t('app', 'Hello');

                    if (isset(Yii::$app->user->identity->username))
                        $info[] = ucfirst(\Yii::$app->user->identity->username);

                    echo implode(', ', $info);
                    ?>
                </p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
        echo Menu::widget([
            'encodeLabels' => false,
            'options' => [
                'class' => 'sidebar-menu'
            ],
            'items' => [

                ['label' => Yii::t('app', 'Client Setup'), 'options' => ['class' => 'header']],
                 ['label' => ThemeNav::link('Countries', 'fa fa-flag'), 'url' => ['countries/index'], 'visible' => Yii::$app->user->isGuest],
                  ['label' => ThemeNav::link('Currencies', 'fa fa-money'), 'url' => ['currencies/index'], 'visible' => Yii::$app->user->isGuest],
                 ['label' => ThemeNav::link('Networks', 'fa fa-network-wired'), 'url' => ['networks/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Clients', 'fa fa-cart-plus'), 'url' => ['clients/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Clients selling price', 'fa fa-money'), 'url' => ['clients-selling-price-setup/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Currency Rates', 'fa fa-money'), 'url' => ['currency-rates/index'], 'visible' => Yii::$app->user->isGuest],
                   ['label' => ThemeNav::link('Contact Groups', 'fa fa-phone'), 'url' => ['contact-groups/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Contacts', 'fa fa-phone'), 'url' => ['contacts/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Reports', 'fa fa-bar-chart'), 'url' => ['departments/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('payments', 'fa fa-money'), 'url' => ['payments/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => Yii::t('app', 'Welcome'), 'options' => ['class' => 'header']],
                ['label' => ThemeNav::link('Dashboard', 'fa fa-dashboard'), 'url' => ['site/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => Yii::t('app', 'User Management'), 'options' => ['class' => 'header']],
                ['label' => ThemeNav::link('Module', 'fa fa-check'), 'url' => ['modules/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Permissions', 'fa fa-lock'), 'url' => ['permissions/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('User Roles', 'fa fa-users'), 'url' => ['roles/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('User groups', 'fa fa-users'), 'url' => ['tb-usergroups/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Departments', 'fa fa-building'), 'url' => ['departments/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Users', 'fa fa-user'), 'url' => ['users/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => Yii::t('app', 'Messaging'), 'options' => ['class' => 'header']],
                ['label' => ThemeNav::link('Send Message', 'fa fa-send'), 'url' => ['outbound/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Schedule message', 'fa fa-clock-o'), 'url' => ['outbound/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Message Templates', 'fa fa-book'), 'url' => ['messagetemplates/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => Yii::t('app', 'Whatsapp For Business'), 'options' => ['class' => 'header']],
                ['label' => ThemeNav::link('Clients Setup', 'fa fa-cart-plus'), 'url' => ['whatsapp/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => ThemeNav::link('Menu Setup', 'fa fa-whatsapp'), 'url' => ['whatsappmenus/index'], 'visible' => Yii::$app->user->isGuest],
                ['label' => Yii::t('app', 'Google Business Messaging'), 'options' => ['class' => 'header']],
                ['label' => ThemeNav::link('Clients Setup', 'fa fa-google'), 'url' => ['gbm/index'], 'visible' => Yii::$app->user->isGuest],
            ],
        ]);
        ?>

    </section>
    <!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> <?php echo Html::encode($this->title); ?> </h1>
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $content; ?>
    </section><!-- /.content -->

</div><!-- /.right-side -->
<?php
$this->endContent();
