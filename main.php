<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="favicon.ico" type="image/icon type">

</head>

<body>

    <header class="header">
        <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="main.php" class="logo"> <span>Kacha</span>Stop </a>

        <nav class="navbar">
            <a class="current" href="main.php">home</a>
            <a href="#vehicles">vehicles</a>
            <a href="#spareparts">spare parts</a>
            <a href="#reviews">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div id="login-btn">
            <button onclick="location.href='logout.php'" class="btn">logout</button>
            <i class="far fa-user"></i>
        </div>

    </header>

    <section class="home" id="home">

        <h3 data-speed="-2" class="home-parallax">Find Old Cars and SpareParts</h3>

        <img class="home-parallax" src="image/home-img.png" alt="">

    </section>
    <section class="home" id="home">
        <h3>vehicles</h3>
    </section>
    <section class="vehicles" id="vehicles">

        <img src="image/1.png" alt="" />

        <details>
            <summary>Description</summary>
            <ul>
                <li><strong>Altis Car</strong></li>
                <li>Model: 2015</li>
                <li>Color: Black</li>
                <li>SeatingCapacity: 5</li>
                <li>FuelType : Diesel</li>
                <li>TransmissionType: Manual</li>
                <li>Demand: 20 Lac</li>
                <li>Availability: Yes</li>
                <br>
                <h6> Address: House no 5, Street 66, Satellite Town, Rawalpindi, Pakistan. <br>
                    Phone No # 03567567897.</h6>

            </ul>

        </details>

        <img src="image/2.jpg" alt="">

        <details>
            <summary>Description</summary>
            <ul>
                <li><strong>Vigo Car</strong></li>
                <li>ARAIMileage: 9 kmp</li>
                <li>iMaxPower(bhp@rpm): 90.2bhp@3800rpm</li>
                <li>SeatingCapacity: 6</li>
                <li>FuelType : Petrol</li>
                <li>TransmissionType: Automatic</li>
                <li>Demand: 31 Lac</li>
                <li>Availability: Yes</li>
                <br>
                <h6> Address: House no biv/538, Muslim Town, Rawalpindi, Pakistan. <br>
                    Phone No # 03225567897.</h6>

            </ul>

        </details>

        <img src="image/3.png" alt="">
        <details>
            <summary>Description</summary>
            <ul>
                <li><strong>Toyota Corolla Car</strong></li>
                <li>ARAIMileage: 15.43 kmp</li>
                <li>iMaxPower(bhp@rpm): 81.2bhp@3800rpm</li>
                <li>SeatingCapacity: 4</li>
                <li>FuelType : Petrol</li>
                <li>TransmissionType: Manual</li>
                <li>Demand: 14 Lac</li>
                <li>Availability: No</li>
                <br>
            </ul>

        </details>

        <img src="image/4.jpg" alt="">
        <details>
            <summary>Description</summary>
            <ul>
                <li><strong>Kia Sportage Car</strong></li>
                <li>ARAIMileage: 25.43 kmp</li>
                <li>iMaxPower(bhp@rpm): 99.2bhp@3800rpm</li>
                <li>SeatingCapacity: 5</li>
                <li>FuelType : Diesel</li>
                <li>TransmissionType: Manual</li>
                <li>Demand: 30 Lac</li>
                <li>Availability: Yes</li>
                <br>
                <h6> Address: House no 44, i14/4, Islamabad, Pakistan. <br>
                    Phone No # 03225523457.</h6>

            </ul>


        </details>

        <img src="image/5.jpg" alt="">
        <details>
            <summary>Description</summary>
            <ul>
                <li><strong>Honda City Car</strong></li>
                <li>ARAIMileage: 21.43 kmp</li>
                <li>iMaxPower(bhp@rpm): 87.2bhp@3800rpm</li>
                <li>SeatingCapacity: 5</li>
                <li>FuelType : Diesel</li>
                <li>TransmissionType: Manual</li>
                <li>Demand: 20 Lac</li>
                <li>Availability: Yes</li>
                <br>
                <h6> Address: House no 8, Ghouri Town, Islamabad, Pakistan. <br>
                    Phone No # 03217741665.</h6>

            </ul>

        </details>

        <img src="image/mehran.jpg" alt="">
        <details>
            <summary>Description</summary>
            <ul>
                <li><strong>Mehran Car</strong></li>
                <li>ARAIMileage: 13.43 kmp</li>
                <li>iMaxPower(bhp@rpm): 44.2bhp@3800rpm</li>
                <li>SeatingCapacity: 4</li>
                <li>FuelType : Petrol</li>
                <li>TransmissionType: Manual</li>
                <li>Demand: 5 Lac</li>
                <li>Availability: Yes</li>
                <br>
                <h6> Address: House no 11, Jinnah Town, Islamabad, Pakistan. <br>
                    Phone No # 03117341664.</h6>
            </ul>
        </details>
        <img src="image/Alto.png" alt="">
        <details>
            <summary>Description</summary>
            <ul>
                <li><strong>Alto Car</strong></li>
                <li>ARAIMileage: 23.43 kmp</li>
                <li>iMaxPower(bhp@rpm): 66.2bhp@3800rpm</li>
                <li>SeatingCapacity: 4</li>
                <li>FuelType : Petrol</li>
                <li>TransmissionType: Automatic</li>
                <li>Demand: 12.5 Lac</li>
                <li>Availability: No</li>
                <br>
            </ul>
        </details>
    </section>
    <div class="home">
        <h3 data-speed="-2">SpareParts</h3>
    </div>
    <section class="spareparts" id="spareparts">

        <img data-speed="5" class="spareparts" src="image/spareparts.jpg" alt="">
    </section>

    <section class="shops" id="shops">

        <img src="image/aziz.jpg" alt="">
        <details>
            <summary>Details/Contact</summary>
            <ul>
                <br>
                <h3><strong>Aziz Autos</strong></h3>
                <p> We deals in all kind of spareparts of Mehran, Khyber, Alto and Cultus.
                    <br>
                    Delivery: Availabe
                </p>
                <br>
                <h6> Address: Shop no 11, KachaStop, near Mandi Moor, Islamabad, Pakistan. <br>
                    Phone No # 03114546764.</h6>
            </ul>
        </details>


        <img src="image/khalid.jpg" alt="">
        <details>
            <summary>Details/Contact</summary>
            <ul>
                <br>
                <h3><strong>khalid Autos</strong></h3>
                <p> We deals in all kind of spareparts of all Cars.
                    <br>
                    Delivery: Availabe
                </p>
                <br>
                <h6> Address: Shop no 21, KachaStop, near Mandi Moor, Islamabad, Pakistan. <br>
                    Phone No # 03234546764.</h6>
            </ul>
        </details>


        <img src="image/mehranautos.jpg" alt="">
        <details>
            <summary>Details/Contact</summary>
            <ul>
                <br>
                <h3><strong>Mehran Autos</strong></h3>
                <p> We deals in all kind of spareparts of Mehran, Khyber, Alto and Cultus.
                    <br>
                    Delivery: Not_Available
                </p>
                <br>
                <h6> Address: Shop no 11, KachaStop, near Mandi Moor, Islamabad, Pakistan. <br>
                    Phone No # 03454546764.</h6>
            </ul>
        </details>

        <img src="image/sunrise.jpg" alt="">
        <details>
            <summary>Details/Contact</summary>
            <ul>
                <br>
                <h3><strong>Sunrise Auto SpareParts</strong></h3>
                <p> We deals in all kind of spareparts of Corolla, Vigo, Altis.
                    <br>
                    Delivery: Available
                </p>
                <br>
                <h6> Address: Shop no 55, KachaStop, Islamabad, Pakistan. <br>
                    Phone No # 03114546764.</h6>
            </ul>
        </details>

        <img src="image/ashraf.jpg" alt="">
        <details>
            <summary>Details/Contact</summary>
            <ul>
                <br>
                <h3><strong>Ashraf Autos</strong></h3>
                <p> We deals in Engine Oils, SpareParts and Filters.
                    <br>
                    Delivery: Not_Available
                </p>
                <br>
                <h6> Address: Shop no 33, KachaStop, near Mandi Moor, Islamabad, Pakistan. <br>
                    Phone No # 03384546764.</h6>
            </ul>
        </details>


    </section>








    </section>

    <section class="reviews" id="reviews">

        <h1 class="heading"> client's <span>review</span> </h1>

        <img src="image/saad.jpg" alt="">
        <div class="content">
            <p>Very Useful and really love it.</p>
            <h3>Saad Altaf.</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        </div>

        <br>
        <br>

        <img src="image/burhan.jpg" alt="">
        <div class="content">
            <p>Thanks for the lovely Website. it really make it very easy to find my car SpareParts.</p>
            <h3>Burhan Shaheen</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        </div>

        <br>
        <br>

        <img src="image/usman.jpg" alt="">
        <div class="content">
            <p>Thanks, It really make it very easy to find my car SpareParts.</p>
            <h3>Usman Karamat</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
        </div>

        <br>
        <br>

        <img src="image/hamad.jpg" alt="">
        <div class="content">
            <p>Found it very useful.</p>
            <h3>Hamad Ahmed Farooq Hashmi</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

            <!-- <section class="contact" id="contact">

                <h3 class="heading"><span>Write a Review</span></h3>

                <div class="row">


                    <form action="">
                        <input type="text" placeholder="your name" class="box" required>
                        <input type="email" placeholder="your email" class="box" required>
                        <input type="tel" placeholder="Stars out of 5" class="box" required>
                        <p  class="box">Add Photo : <input class="box" type="file" name="" id=""></p>
                        <textarea placeholder="your review" class="box" cols="10" rows="10"></textarea>
                        <input type="submit" value="Submit " class="btn">
                    </form>

                </div>


        </div>
        </div>
    </section> -->
    </section>


    <section class="contact" id="contact">

        <h1 class="heading"><span>contact</span></h1>

        <div class="row">

      <form action="" method="post">
      <h3>say something!</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="email" name="email" required placeholder="enter your email" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" name="send" class="btn">
     </form>


            <!-- <form action="">
                <h3><strong>Get In Touch</strong></h3>
                <input type="text" placeholder="your name" class="box" required>
                <input type="email" placeholder="your email" class="box" required>
                <input type="tel" placeholder="subject" class="box" required>
                <textarea placeholder="your message" class="box" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form> -->

        </div>

    </section>


    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>our shops</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Aziz auto store </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> khalid autos </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> mehran autos </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> sunrise auto spareparts </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> ashraf autos </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="main.php"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#vehicles"> <i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#spareparts"> <i class="fas fa-arrow-right"></i> SpareParts </a>
                <a href="#reviews"> <i class="fas fa-arrow-right"></i> review </a>
                <a href="logout.php"> <i class="fas fa-arrow-right"></i> logout </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 0322-9948363 </a>
                <a href="#"> <i class="fas fa-phone"></i> 0318-5204385 </a>
                <a href="#"> <i class="fas fa-envelope"></i> muhammed.bscs3971@iiu.edu.pk </a>
                <a href="#"> <i class="fas fa-envelope"></i> muhammed.bscs4076@iiu.edu.pk </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> Rawalpindi, Pakistan - 43600 </a>
            </div>

        </div>

        <div class="credit"> created by: muhammad aown ali & muhammad usman karamat | all rights reserved </div>

    </section>
</body>

</html>