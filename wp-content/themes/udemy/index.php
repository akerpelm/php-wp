<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <?php wp_head(); ?>
  <style>
    :lang(ar) {
      direction: rtl;
    }

  </style>
</head>
<body <?php body_class('example'); ?>>
<?php wp_body_open(); ?>
  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id, voluptate iste culpa cumque quaerat, alias sed ab voluptas dolorem nulla voluptates perspiciatis magni eos reiciendis placeat aspernatur deserunt itaque. Quos.<p>
  
  <?php wp_footer(); ?>
</body>
</html>