<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Pets</title>
  </head>
  <body>
    
    <?php
    include 'includes/header.php'
    ?>

    <!-- Animal list -->
    <div class="container">
      <!--row 1-->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="d-flex gap-3">
              <img
                src="images/penguins.jpg"
                alt=""
                class="img-fluid rounded-circle picture-size"
              />
            </div>
          </div>
        </div>
        <!---->
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="d-flex gap-3">
              <img
                src="./images/puppies.webp"
                alt=""
                class="img-fluid rounded-circle picture-size"
              />
            </div>
          </div>
        </div>
        <!---->
        <div class="col-md-4">
          <div class="card mb-3">
            <div class="d-flex gap-3">
              <img
                src="images/cat.jpg"
                alt=""
                class="img-fluid rounded-circle picture-size"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>

  </body>
</html>