  <header class="header">
      <h1 class="heading-1">
        <span class="heading-1 heading-1--main">
          Highest Quality Care For
        </span>
        <span class="heading-1--sub mb-md">Pets You'll Love</span>
      </h1>
      <a href="USERS/index.php" class="btn btn--header">ENTER</a>
    </header>
    <!--? ===================================== FEATURES ===================================== -->
    <section class="features">
            <?php
                include('connection/conn.php');
                $query = mysqli_query($conn, "SELECT * FROM site_services") or die(mysqli_error());
                while($fetch = mysqli_fetch_array($query)){
            
            ?>
      <div class="feature">
        <div class="feature__large-circle feature-active-circle">
          <svg class="feature--icon">
            <use xlink:href="img/sprite.svg#blind"></use>
          </svg>
        </div>
        <h3 class="heading-3 mb-sm"><?php echo $fetch['title']; ?></h3>
        <p class="feature--text paragraph">
          <?php echo $fetch['body']; ?></p>
        <div class="feature__small-circle feature-active-circle">
          <svg class="feature--icon-small feature-active-circle">
            <use xlink:href="img/sprite.svg#right-chevron"></use>
          </svg>
        </div>
      </div>
      <?php } ?>
      <!-- <div class="feature">
        <div class="feature__large-circle">
          <svg class="feature--icon">
            <use xlink:href="img/sprite.svg#dog-eating"></use>
          </svg>
        </div>
        <h3 class="heading-3 mb-sm">Pet Appointment</h3>
        <p class="feature--text paragraph">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="feature__small-circle">
          <svg class="feature--icon-small">
            <use xlink:href="img/sprite.svg#right-chevron"></use>
          </svg>
        </div>
      </div>
      <div class="feature">
        <div class="feature__large-circle">
          <svg class="feature--icon">
            <use xlink:href="img/sprite.svg#grooming"></use>
          </svg>
        </div>
        <h3 class="heading-3 mb-sm">Pet Grooming</h3>
        <p class="feature--text paragraph">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="feature__small-circle">
          <svg class="feature--icon-small">
            <use xlink:href="img/sprite.svg#right-chevron"></use>
          </svg>
        </div>
      </div> -->
    </section>
    <!--? ===================================== SERVICES ===================================== -->
    <div class="services__picture">
      <figure class="services__picture--item">
        <img
          src="img/services.jpg"
          alt="Background"
          class="services__picture--img"
        />
      </figure>
    </div>
    <div class="services__content">
      <h2 class="heading-2 mb-md">Why Choose Us?</h2>
      <div class="services__content--container">
        <div>
          <span>
            <svg class="services__content--icon">
              <use xlink:href="img/sprite.svg#stethoscope"></use>
            </svg>
          </span>
          <h3 class="heading-3">Compassionate Care for You and Your Pet</h3>
          <p class="paragraph">
              We have concern for your entire family, including your pet. The best outcome for you and your pet is what our entire team strives for.
          </p>
        </div>
        <div>
          <span>
            <svg class="services__content--icon">
              <use xlink:href="img/sprite.svg#customer-service"></use>
            </svg>
          </span>
          <h3 class="heading-3">Experienced Doctors</h3>
          <p class="paragraph">
              The total experience of our skilled doctors. A multi-doctor practice has the benefit of allowing us to consult on challenging patients within our own practice. Together, we want to help you make the greatest choices for the well-being of your pet.
          </p>
        </div>
        <div>
          <span>
            <svg class="services__content--icon">
              <use xlink:href="img/sprite.svg#emergency-call"></use>
            </svg>
          </span>
          <h3 class="heading-3">Caring Team</h3>
          <p class="paragraph">
              Our compassionate team pledges to care for them as if they were one of our own.
          </p>
        </div>
        <div>
          <span>
            <svg class="services__content--icon">
              <use xlink:href="img/sprite.svg#veterinarian"></use>
            </svg>
          </span>
          <h3 class="heading-3">Convenient Hours</h3>
          <p class="paragraph">
              We open at 8 a.m., Monday through Friday. till 5p.m. We'll work with you to find a time that works.
          </p>
        </div>
      </div>
    </div>
    <!--? ===================================== STAFF ===================================== -->
    <div class="staff">
      <div class="staff--box">
        
      </div>
    </div>
    <!--? ===================================== QUESTIONS ===================================== -->
    <section class="questions">
      <div class="questions__content">
        <h2 class="heading-2 mb-sm">Frequently Asks Questions</h2>
        <p class="paragraph mb-md">
          Possible and usual questions and answers are prepared for you.
        </p>
          <?php
                include('connection/conn.php');
                $queries = mysqli_query($conn, "SELECT * FROM site_faq") or die(mysqli_error());
                while($row = mysqli_fetch_array($queries)){
            
            ?>
        <input
          type="checkbox"
          class="questions__checkbox--<?php echo $row['id']; ?>"
          id="questions-toggle-<?php echo $row['id']; ?>"
        />
        <label for="questions-toggle-<?php echo $row['id']; ?>" class="questions__toggle--<?php echo $row['id']; ?>">
          <div class="questions--box">
            <h3 class="heading-3 heading-3--thin">
              <?php echo $row['title']; ?>
            </h3>
            <svg class="questions--icon">
              <use xlink:href="img/sprite.svg#add"></use>
            </svg>
            <svg class="questions--icon-hidden">
              <use xlink:href="img/sprite.svg#minus"></use>
            </svg>
          </div>
        </label>
        <div class="questions__answer questions__answer--<?php echo $row['id']; ?>">
          <ul class="questions__answer--list">
            <li class="questions__answer--item">
              <span>ANSWER : </span> <?php echo $row['body']; ?>
            </li>
            
          </ul>
        </div>
      <?php } ?>
     
      </div>
      <div class="questions__picture">
        <figure class="questions__picture--item-1">
          <a href="#0">
            <span>
              <svg>
                <use xlink:href="img/sprite.svg#play-button-arrowhead"></use>
              </svg>
            </span>
          </a>
          <img src="img/about.jpg" alt="Image 1" class="img-1" />
        </figure>
        <figure class="questions__picture--item-2">
          <img src="img/about-2.jpg" alt="Image 2" class="-2" />
        </figure>
        <figure class="questions__picture--item-3">
          <img src="img/about-3.jpg" alt="Image 3" class="-3" />
        </figure>
      </div>
    </section>
   
    <!--? ===================================== STAFF ===================================== -->
    <div class="staff">
      <div class="staff--box">
        
      </div>
    </div>
    
   