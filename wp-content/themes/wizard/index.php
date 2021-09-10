<?php get_header(); ?>

<body>
    <div class="global-container">
<div class="wizard" style="margin:0 0 55px 0">
      
    <div class="container">

      <!--Progress-Bar-->

      <div class="progress-bar">
        <div class="step">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/Vector.png" alt="">
        </div>
        <div class="step">
          <p class="bullet step-arrow">Contact Info</p>
        </div>
        <div class="step">
          <p class="bullet">Quantity</p>
          <div class="check fas fa-check" style="display: none"></div>
        </div>
        <div class="step">
          <p class="bullet">Price</p>
          <div class="check fas fa-check" style="display: none"></div>
        </div>
        <div class="step">
          <p class="bullet">Done</p>
          <div class="check fas fa-check" style="display: none"></div>
        </div>
      </div>

      <div class="form-outer">
        <form action="#" method="post" id="form">

          <!--Page1-->

          <div class="page slide-page">
            <h2 class="title title-contacts">Contact Info</h1>
              <div class="page__field">
                <div class="field__container">
                  <div class="field">
                    <div class="label">Name</div>
                    <input type="text" name="name">
                  </div>
                  <div class="field">
                    <div class="label"><span class="small-text">Email</span></div>
                    <input type="text" name="email" id="email _req _email">
                  </div>
                  <div class="field">
                    <div class="label">Phone</div>
                    <input type="Number" name="phone">
                  </div>
                </div>

              </div>
              <div class="fiel__button">
                <div class="field">
                  <button class="firstNext next" onclick="valid(document.getElementById('form'))">Continue</button>
                </div>
              </div>

          </div>

          <!--Page2-->
          <div class="page">

            <h2 class="title title-contacts">Quantity</h1>
              <div class="field__containerr">
                <div class="field">
                  <div class="label"><span class="small-text">Quantity</span></div>
                  <input type="number" name="quantity" id="quantity" min="0" max="1000"
                    onkeyup="if(parseInt(this.value)>1000){ this.value =1000; return false; }">
                </div>
              </div>


              <div class="field btns">

                <button class="next-1 next" id="quanCont">Continue</button>
                <button class="prev-1 prev"><i class="fas fa-arrow-left"></i> Back</button>
                <div class="buttons">

                </div>
              </div>
          </div>

          <!--Page3-->
          <div class="page">

            <h2 class="title">Price</h1>
              <div class="field__containerr price__container">
                <p id="price"></p>
              </div>



              <div class="field btns">
                <button class="next-2 next" type="submit">Send to Email</button>
                <button class="prev-2 prev"><i class="fas fa-arrow-left"></i>Back</button>
              </div>
          </div>


          <!--Page4-->
          <div class="page">
            <h2 class="title title-contacts">Done</h1>
              <div class="field__containerr">
                <p class="chek__true">✅ Your email was send successfully</p>
              </div>

              <div class="field btns">
                <button class="prev-3 prev">Start again <i class="fas fa-arrow-right"></i></button>
                <button class="submit" style="display: none"></button>
              </div>
          </div>
        </form>
      </div>
    </div>

  </div>
    <div class="short-code__container" style="margin-left: 80px">
        <div class="short-code" style="font-weight: 600;
            font-size: 24px;color:#4B5563;">
        <?php the_field('short-code') ?>
    </div>
  </div>
          
      </div>
  
      <?php get_footer(); ?>