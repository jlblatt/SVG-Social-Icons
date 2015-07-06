<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SVG Social Icons</title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

    <h1>[SVG Social Icons]</h1>

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

    <h2>[No Spin Linear]</h2>

    <div class="social no-spin linear">
      <?php echo $list; ?>
    </div>

    <h2>[X-Spin Linear]</h2>

    <div class="social x-spin linear">
      <?php echo $list; ?>
    </div>

    <h2>[Y-Spin Linear]</h2>

    <div class="social y-spin linear">
      <?php echo $list; ?>
    </div>

    <h2>[XZ-Spin Linear]</h2>

    <div class="social x-spin z-spin linear">
      <?php echo $list; ?>
    </div>

    <h2>[YZ-Spin Linear]</h2>

    <div class="social y-spin z-spin linear">
      <?php echo $list; ?>
    </div>

    <h2>[XY-Spin Linear]</h2>

    <div class="social xy-spin linear">
      <?php echo $list; ?>
    </div>

    <h2>[XYZ-Spin Linear]</h2>

    <div class="social xy-spin z-spin linear">
      <?php echo $list; ?>
    </div>

    <h2>[No Spin Elastic]</h2>

    <div class="social no-spin elastic">
      <?php echo $list; ?>
    </div>

    <h2>[X-Spin Elastic]</h2>

    <div class="social x-spin elastic">
      <?php echo $list; ?>
    </div>

    <h2>[Y-Spin Elastic]</h2>

    <div class="social y-spin elastic">
      <?php echo $list; ?>
    </div>

    <h2>[XZ-Spin Elastic]</h2>

    <div class="social x-spin z-spin elastic">
      <?php echo $list; ?>
    </div>

    <h2>[YZ-Spin Elastic]</h2>

    <div class="social y-spin z-spin elastic">
      <?php echo $list; ?>
    </div>

    <h2>[XY-Spin Elastic]</h2>

    <div class="social xy-spin elastic">
      <?php echo $list; ?>
    </div>

    <h2>[XYZ-Spin Elastic]</h2>

    <div class="social xy-spin z-spin elastic">
      <?php echo $list; ?>
    </div>

  </body>
</html>