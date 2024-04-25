<?php $this->layout= 'CakeLte.login';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
    <div class="login-box">
    <!-- /.login-logo -->
    <?= $this->Flash->render() ?>
    <div class="card card-outline card-primary">
        <!-- <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
        </div> -->
        <div class="card">
    <div class="card-body login-card-body">
        <!-- <p class="login-box-msg">Daftar untuk mulai berkeluh kesah</p> -->
        <div class="users form">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <?= $this->Form->control('username') ?>
                <?= $this->Form->control('password') ?>
            </fieldset>
        </div>
            <div class="row">
                <div class="col">
                    <?= $this->Form->submit(__('Login'),["style"=>"width:155px;height:40px;"]); ?>
                </div>
            <!-- /.col -->
            <div class="col">
                <button class="btn btn-success btn-block" >
                    <?= $this->Html->link(__('Daftar'), ['action' => 'add'],["style"=>"color:white;height:20px;"]) ?>
                </button>
            </div>
            <!-- /.col -->
        </div>
        
    </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>

