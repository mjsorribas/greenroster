<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <link rel="stylesheet" href="/css/app.css" />
</head>
<body>

    <?php echo NavMenu::getCheckinMenu(); ?>
    
               
<div class="row">
  <div class="twelve columns">
    <?php echo $content; ?>
  </div>
</div>
        

        <div class="clear"></div>

<div class="row">
  <div class="twelve columns">

   <div id="footer">
                <hr/>
                <center>
                (C)2013 Cornerstone Community Church
                </center>
        </div><!-- footer -->

  </div>
</div>


  
</body>
</html>



