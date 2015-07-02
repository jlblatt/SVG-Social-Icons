<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SVG Social Icons</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

    <?php ob_start(); ?>

      <ul>

        <li class="facebook">
          <a>
            <div class="icon">
              <?php echo file_get_contents("img/facebook.svg"); ?>
            </div>
            <div class="circle ">
              <?php echo file_get_contents("img/circle.svg"); ?>
            </div>
          </a>
        </li>
        
        <li class="twitter">
          <a>
            <div class="icon">
              <?php echo file_get_contents("img/twitter.svg"); ?>
            </div>
            <div class="circle">
              <?php echo file_get_contents("img/circle.svg"); ?>
            </div>
          </a>
        </li>
        
        <li class="linkedin">
          <a>
            <div class="icon">
              <?php echo file_get_contents("img/linkedin.svg"); ?>
            </div>
            <div class="circle">
              <?php echo file_get_contents("img/circle.svg"); ?>
            </div>
          </a>
        </li>
        
        <li class="youtube">
          <a>
            <div class="icon">
              <?php echo file_get_contents("img/youtube.svg"); ?>
            </div>
            <div class="circle">
              <?php echo file_get_contents("img/circle.svg"); ?>
            </div>
          </a>
        </li>
        
        <li class="pinterest">
          <a>
            <div class="icon">
              <?php echo file_get_contents("img/pinterest.svg"); ?>
            </div>
            <div class="circle">
              <?php echo file_get_contents("img/circle.svg"); ?>
            </div>
          </a>
        </li>
        
        <li class="instagram">
          <a>
            <div class="icon">
              <?php echo file_get_contents("img/instagram.svg"); ?>
            </div>
            <div class="circle">
              <?php echo file_get_contents("img/circle.svg"); ?>
            </div>
          </a>
        </li>
        
        <li class="googleplus">
          <a>
            <div class="icon">
              <?php echo file_get_contents("img/googleplus.svg"); ?>
            </div>
            <div class="circle">
              <?php echo file_get_contents("img/circle.svg"); ?>
            </div>
          </a>
        </li>

      </ul>

    <?php $list = ob_get_contents(); ?>
    <?php ob_end_clean(); ?>

    <h1>[No Spin Linear]</h1>

    <div class="social no-spin linear">
      <?php echo $list; ?>
    </div>

    <h1>[X-Spin Linear]</h1>

    <div class="social x-spin linear">
      <?php echo $list; ?>
    </div>

    <h1>[Y-Spin Linear]</h1>

    <div class="social y-spin linear">
      <?php echo $list; ?>
    </div>

    <h1>[XY-Spin Linear]</h1>

    <div class="social xy-spin linear">
      <?php echo $list; ?>
    </div>

    <h1>[No Spin Elastic]</h1>

    <div class="social no-spin elastic">
      <?php echo $list; ?>
    </div>

    <h1>[X-Spin Elastic]</h1>

    <div class="social x-spin elastic">
      <?php echo $list; ?>
    </div>

    <h1>[Y-Spin Elastic]</h1>

    <div class="social y-spin elastic">
      <?php echo $list; ?>
    </div>

    <h1>[XY-Spin Elastic]</h1>

    <div class="social xy-spin elastic">
      <?php echo $list; ?>
    </div>

  </body>
</html>