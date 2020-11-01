<!DOCTYPE html>
<!-- saved from url=(0044)https://semantic-ui.com/examples/fixed.html# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Stallions' Shipping</title>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/reset.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/site.css">

  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/container.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/grid.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/header.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/image.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/menu.css">

  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/divider.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/list.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/segment.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/dropdown.css">
  <link rel="stylesheet" type="text/css" href="./Fixed Menu Example - Semantic_files/icon.css">

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="https://semantic-ui.com/examples/fixed.html#" class="header item">
        <img class="logo" src="./Fixed Menu Example - Semantic_files/logo.png">
        Project Name
      </a>
      <a href="https://semantic-ui.com/examples/fixed.html#" class="item">Home</a>
      <div class="ui simple dropdown item">
        Dropdown <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
              <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
            </div>
          </div>
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
        </div>
      </div>
    </div>
  </div>

  <div class="ui main text container">
    <h1 class="ui header">Semantic UI Fixed Template</h1>
    <p>This is a basic fixed menu template using fixed size containers.</p>
    <p  style="margin-bottom:500px;">A text container is used for the main container, which is useful for single column layouts</p>
    
  </div>
<!-- footergoes here --> 

<?php include_once "footer.php" ?>


</body></html>