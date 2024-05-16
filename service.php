<?php
include ('header.php');
?>
<div class="breadcumnd__wrapper">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xxl-6 col-xl-6 col-lg-7 col-md-7 col-sm-7">
                <div class="breadcumnd__content">
                    <span class="d4 mb-24">
                        Our Services
                    </span>
                    <ul class="breadcun__list flex-wrap gap-1 d-flex align-items-center">
                    </ul>
                </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5">
                <div class="featured__card">
                    <img src="assets/img/about/abouts.png" class="w-100" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="new_register">
    <div class="container">
        <div class="row_register pt-3 pb-5">
            <div class="row">
                <div class="col-md-6">
                    <h2 style="color:black;">
                        CIBIL Score Improvement Agency

                    </h2>
                    <br>

                    <h4 style="color:#008080;">
                        Offering Complete and End-to-End CIBIL Score Repair Services!

                    </h4>
                    <br>
                    <li>

                        Credit report analysis
                    </li>
                    <li>
                        Credit disputing

                    </li>
                    <li>
                        Dispute escalating
                    </li>
                    <li>
                        Credit score analysis and mentoring
                    </li>
                    <br>
                    <h5 style="color:#008080;">
                        Timing
                    </h5>


                    30-45 working days, sometimes it takes 3-4 days however we take 30-45
                    working days to Credit Issues Clearance.
                    <br>
                    <br>
                    <button class="new-registerbtn">
                        <a href="https://www.cibil.com/cibil-score-improvement-agency/" target="_blank"
                            class="btn btn-primary btn-lg">
                            Download Brocher
                        </a>
                    </button>
                </div>
                <div class="col-md-6">
                    <form id="contact" action="" method="post">
                        <h3 style="color:black;">Get free Credit Report and Credit History Register Here</h3>
                        <!-- <h4>Contact us for custom quote</h4> -->
                        <fieldset>
                            <input placeholder="Your name" type="text" tabindex="1" required >
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" type="email" tabindex="2" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                        </fieldset>
                        <!-- <fieldset>
                            <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
                        </fieldset> -->
                        <fieldset>
                            <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">Submit</button>
                        </fieldset>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<style>
    .new-registerbtn {
        border: none;
    }

    .new_register {
        margin-top: 30px;
    }

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);


    .container {

        width: 100%;
        margin: 0 auto;
        position: relative;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea,
    #contact button[type="submit"] {
        font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    }

    #contact {
        background: #F9F9F9;
        padding: 25px;
        margin: 15px 0;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
        display: block;
        font-size: 30px;
        font-weight: 300;
        margin-bottom: 10px;
    }

    #contact h4 {
        margin: 5px 0 15px;
        display: block;
        font-size: 13px;
        font-weight: 400;
    }

    fieldset {
        border: medium none !important;
        margin: 0 0 10px;
        min-width: 100%;
        padding: 0;
        width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea {
        width: 100%;
        border: 1px solid #ccc;
        background: #FFF;
        margin: 0 0 5px;
        padding: 10px;
        color:black;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    #contact input[type="tel"]:hover,
    #contact input[type="url"]:hover,
    #contact textarea:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.3s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 1px solid #aaa;
    }

    #contact textarea {
        height: 100px;
        max-width: 100%;
        resize: none;
    }

    #contact button[type="submit"] {
        cursor: pointer;
        width: 100%;
        border: none;
        background: #4CAF50;
        color: #FFF;
        margin: 0 0 5px;
        padding: 10px;
        font-size: 15px;
    }

    #contact button[type="submit"]:hover {
        background: #43A047;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active {
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    .copyright {
        text-align: center;
    }

    #contact input:focus,
    #contact textarea:focus {
        outline: 0;
        border: 1px solid #aaa;
    }

    ::-webkit-input-placeholder {
        color: #888;
    }

    :-moz-placeholder {
        color: #888;
    }

    ::-moz-placeholder {
        color: #888;
    }

    :-ms-input-placeholder {
        color: #888;
    }

    .row_register {
        color: black;
    }
</style>

<!-- Top Rated Here -->
<section class="top__reted pb-60 pt-120" style="background-color: aliceblue;">
   <div class="container">
      <div class="row align-items-center mb-20 g-3 justify-content-between">
         <div class="col-lg-8">
            <div class="section__title">
               <h3 class="sub ralt base mb-16 wow fadeInUp">
                  Our Services
               </h3>
               <h4 class="title wow fadeInUp">
                  We people are spreading happiness after clearing issues from
                  their Credit Report.
               </h4>
            </div>
         </div>

      </div>
   </div>
   <div class="top__ratedwrapper owl-theme owl-carousel">
      <div class="top__items suctom__space bgwhite round16 bgwhite">
         <div class="icon m-auto d-flex align-items-center justify-content-center boxes2 round50">
            <i class="material-symbols-outlined icolor1">
               account_balance_wallet
            </i>
         </div>
         <div class="content text-center mt-24">
            <h5 class="mb-16">
               <a href="#" class="title">
                  Credit Report Analysis
               </a>
            </h5>
            <p class="fz-16 fw-400 inter ptext2 mb-30">
               Regularly monitor your credit report for any suspicious activity or errors. You're entitled to a free
               credit report annually from each of the three major credit bureaus.
            </p>
            <!-- <a href="#" class="arrow m-auto boxes4 round50 d-flex align-items-center justify-content-center">
               <i class="material-symbols-outlined">
                  chevron_right
               </i>
            </a> -->
         </div>
      </div>
      <div class="top__items suctom__space bgwhite round16 bgwhite">
         <div class="icon m-auto d-flex align-items-center icolor2 justify-content-center boxes3 round50">
            <i class="material-symbols-outlined">
               credit_card
            </i>
         </div>
         <div class="content text-center mt-24">
            <h5 class="mb-16">
               <a href="#" class="title">
                  Wrong Entry Clearance
               </a>
            </h5>
            <p class="fz-16 fw-400 inter ptext2 mb-30">
               Keep a close eye on your credit report in the months following the dispute to ensure that the error has
               been corrected.They may need to update their records accordingly.
            </p>
            <!-- <a href="#" class="arrow m-auto boxes4 round50 d-flex align-items-center justify-content-center">
               <i class="material-symbols-outlined">
                  chevron_right
               </i>
            </a> -->
         </div>
      </div>
      <div class="top__items suctom__space bgwhite round16 bgwhite">
         <div class="icon m-auto d-flex align-items-center base justify-content-center boxes4 round50">
            <i class="material-symbols-outlined">
               social_leaderboard
            </i>
         </div>
         <div class="content text-center mt-24">
            <h5 class="mb-16">
               <a href="#" class="title">
                  Score Updation Clearance

               </a>
            </h5>
            <p class="fz-16 fw-400 inter ptext2 mb-30">
               Having a diverse mix of credit types, such as credit cards, loans, and mortgages, can positively impact
               your credit score. If you've recently taken out a new type of credit.
            </p>

         </div>
      </div>
      <div class="top__items suctom__space bgwhite round16 bgwhite">
         <div class="icon m-auto d-flex align-items-center icolor1 justify-content-center boxes2 round50">
            <i class="material-symbols-outlined">
               monitoring
            </i>
         </div>
         <div class="content text-center mt-24">
            <h5 class="mb-16">
               <a href="#" class="title">
                  Written off Clearance
               </a>
            </h5>
            <p class="fz-16 fw-400 inter ptext2 mb-30">
               Make timely payments on any current debts, keep your credit card balances low, and consider using secured
               credit cards or credit builder loans to establish positive payment history.
            </p>

         </div>
      </div>
      <div class="top__items suctom__space bgwhite round16 bgwhite">
         <div class="icon m-auto d-flex align-items-center justify-content-center boxes2 round50">
            <i class="material-symbols-outlined icolor1">
               account_balance_wallet
            </i>
         </div>
         <div class="content text-center mt-24">
            <h5 class="mb-16">
               <a href="#" class="title">
                  Settled Clearance

               </a>
            </h5>
            <p class="fz-16 fw-400 inter ptext2 mb-30">
               If you're unsure about the implications of settling a debt or need assistance negotiating with creditors,
               consider seeking advice from a reputable credit counseling agency.
            </p>

         </div>
      </div>
      <div class="top__items suctom__space bgwhite round16 bgwhite">
         <div class="icon m-auto d-flex align-items-center icolor2 justify-content-center boxes3 round50">
            <i class="material-symbols-outlined">
               credit_card
            </i>
         </div>
         <div class="content text-center mt-24">
            <h5 class="mb-16">
               <a href="#" class="title">
                  Suit Filed Clearance

               </a>
            </h5>
            <p class="fz-16 fw-400 inter ptext2 mb-30">
               This includes the complaint, which outlines the creditor's allegations against you, as well as any
               summons or notices regarding court appearances.
            </p>

         </div>
      </div>
      <div class="top__items suctom__space bgwhite round16 bgwhite">
         <div class="icon m-auto d-flex align-items-center base justify-content-center boxes4 round50">
            <i class="material-symbols-outlined">
               social_leaderboard
            </i>
         </div>
         <div class="content text-center mt-24">
            <h5 class="mb-16">
               <a href="#" class="title">
                  Profile Correction

               </a>
            </h5>
            <p class="fz-16 fw-400 inter ptext2 mb-30">
               Going forward, monitor your profile or records regularly to ensure that any corrections remain accurate
               and up-to-date. If you notice any new inaccuracies or errors.
            </p>

         </div>
      </div>

   </div>
</section>
<!-- Top Rated End -->

<?php
include ('footer.php');
?>