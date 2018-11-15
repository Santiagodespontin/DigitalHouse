<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laramon</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
  <div class="full-height">
    <nav class="main-nav">
        <marquee>
      <?php $__env->startComponent('components.logo', ['url' => '/']); ?>
        Laramon
      <?php echo $__env->renderComponent(); ?>
    </marquee>
      <ul class="main-nav_links">
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
        <li><a href=""></a></li>
      </ul>
    </nav>
    <main>
      <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer>
      <?php $__env->startComponent('components.logo', ['url' => '/']); ?>
        Laramon
      <?php echo $__env->renderComponent(); ?>
      <ul>
        <li><a href=""><i class="fab fa-github-alt"></i></a></li>
        <li><a href=""><i class="fab fa-css3-alt"></i></a></li>
        <li><a href=""><i class="fab fa-html5"></i></a></li>
        <li><a href=""><i class="fab fa-js-square"></i></a></li>
        <li><a href=""><i class="fab fa-laravel"></i></a></li>
      </ul>
    </footer>
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
  </div>
</body>
</html>
  