<?php
$this->title = 'OFAMS | Welcome';
$this->params['breadcrumbs'] = [['label' => $this->title]];
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?= \hail812\adminlte\widgets\Alert::widget([
                'type' => 'success',
                'body' => '<h2>Welcome to OFAMS!</h2>',
            ]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?= \hail812\adminlte\widgets\Callout::widget([
                'type' => 'info',
                'head' => 'Revolutionize Your Office Operations with OFAMS',
                'body' => '<p>OFAMS (Office Automation Management System) is the ultimate solution for modernizing your office workflow. Say goodbye to tedious manual processes and hello to efficiency and productivity.</p>',
            ]) ?>
        </div>
    </div>

    </div>

    <div class="column">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Streamlined Task Management',
                'number' => 'Effortlessly assign and track tasks within your team.',
                'icon' => 'fas fa-tasks',
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Project Tracking Made Easy',
                'number' => 'Monitor project progress and milestones seamlessly.',
                'icon' => 'fas fa-project-diagram',
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Efficient Team Collaboration',
                'number' => 'Facilitate smooth collaboration among team members.',
                'icon' => 'fas fa-users',
            ]) ?>
        </div>
    </div>

    <div class="column">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Document Management Simplified',
                'number' => 'Manage and share documents effortlessly.',
                'icon' => 'far fa-file-alt',
            ]) ?>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <?= \hail812\adminlte\widgets\InfoBox::widget([
                'text' => 'Stay Informed with Real-time Notifications',
                'number' => 'Receive instant updates on important events.',
                'icon' => 'fas fa-bell',
            ]) ?>
        </div>
    </div>

    
    </div>
</div>
