<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>About Us</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #e5e5e6;
    color: #333;
}

.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}

header {
    background:  #7b0a77;
    color: #fff;
    padding-top: 30px;
    min-height: 70px;
    border-bottom: #77aaff 3px solid;
}

header h1 {
    text-align: center;
    margin: 0;
    font-size: 24px;
}

.container h2 {
    margin-left: 8px;
}

.team-section {
    margin: 20px 0;
}

.team-section div {
    margin-bottom: 20px;
}

.team-member {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.i img {
    height: 200px;
    width: 270px;
    border-radius: 10%;
    border: 2px solid #ccc;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 10px 0;
    max-width: 100%;
    display: block;
}

.one {
    height: 230px;
    width: 350px;
}

.two {
    height: 250px;
}

footer {
    background-color:  #7b0a77;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
}
@media (max-width: 768px) {
    .team-section .team-member {
        flex-direction: column;
        text-align: center;
    }

    .team-section .team-member div {
        margin-right: 0;
        margin-bottom: 20px;
    }

    header h1 {
        font-size: 20px;
    }

    .container {
        width: 90%;
    }
}

@media (max-width: 480px) {
    .i img {
        width: 100%;
        height: auto;
    }

    header h1 {
        font-size: 18px;
    }
}
</style>
<body>
    <header>
        <h1>Welcome to Our Beauty Salon</h1>
    </header>

    <div class="container">
        <section>
            <h2>About Us</h2>
            <p>At Luxe Beauty Salon, we believe in enhancing your natural beauty through a personalized and luxurious
                experience. Our salon is a sanctuary where you can unwind, rejuvenate, and leave feeling more confident than ever. We pride ourselves on delivering top-notch services by the most talented and renowned professionals in the industry.</p>
        </section>

        <section class="team-section">
            <h2>Our Team</h2>

            <div class="team-member">
                <div>
                    <h3>John Masters - Celebrity Hairstylist</h3>
                    <p>John Masters has been a leading name in the world of hairstyling for over two decades. With a
                        career that spans high-profile fashion shows, celebrity clients, and editorial shoots, John’s
                        expertise and creativity are unparalleled. Known for his innovative techniques and keen eye
                        fordetail, John has transformed the looks of numerous Hollywood stars, making him a sought-after stylist in the industry. At Luxe Beauty Salon, John brings his wealth of experience and passion for hair to each client, ensuring they leave with a style that perfectly suits their personality and lifestyle.</p>
                </div><br>
                <img src="Hairstylist(3).png" alt="" class="one">
            </div>

            <div class="team-member">
                <div>
                    <h3>Sophia Laurent - Skincare Guru</h3>
                    <p>Sophia Laurent is a celebrated skincare expert whose holistic approach and bespoke treatments
                        have earned her a devoted following. With a background in dermatology and years of hands-on
                        experience, Sophia’s philosophy revolves around using natural and effective methods to achieve
                        radiant skin. Her custom skincare routines and treatments have graced the faces of top models
                        and actresses, making her a trusted name in skincare. At Luxe Beauty Salon, Sophia offers
                        tailored consultations and treatments, ensuring that every client achieves their best skin.
                    </p>
                </div><br>
                <img src="Hairstylist(2).jpeg" alt="" class="two"><br>
            </div>
        </section>
        <section>
            <h2>Our Philosophy</h2>
            <p>At Luxe Beauty Salon, we are committed to providing a serene and luxurious environment where our   clients can escape the everyday and indulge in self-care. Our mission is to enhance your natural beauty using the highest quality products and the latest techniques in hair and skincare. We believe that beauty is unique to each individual, and our goal is to help you discover and embrace your own.</p>
        </section>

        <div class="i">
            <section>
                <h2>Our Services</h2>
                <ul>
                    <li><strong>Hair Services:</strong> Haircuts, Styling, Coloring, Extensions, and Treatments</li><br>
                    <img src="Hairstylist(1).jpeg" alt=""><br>
                    <li><strong>Skincare:</strong> Facials, Peels, Microdermabrasion, and Custom Skincare Plans</li><br>
                    <img src="Makeup(2).jpeg" alt=""><br>
                    <li><strong>Makeup:</strong> Bridal, Special Events, and Everyday Makeup Application</li><br>
                    <img src="Makeup(1).jpeg" alt=""><br>
                    <li><strong>Nails:</strong> Manicures, Pedicures, and Nail Art</li><br>
                    <img src="Makeup(3).jpg" alt="">
                </ul>
            </section>
        </div>

        <section>
            <h2>Visit Us</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, ipsam dolor rerum, unde architecto,
                voluptates aliquid animi dolorum facere assumenda explicabo tenetur incidunt ex obcaecati cupiditate
                expedita doloribus magnam nobis.</p>
            <p><strong>Address:</strong><br>
                123 Beauty Avenue,<br>
                Downtown City, 56789</p>
            <p><strong>Contact:</strong><br>
                Phone: (123) 456-7890<br>
                Email: info@luxebeautysalon.com</p>
        </section>

        <section>
            <h2>Connect With Us</h2>
            <p>Follow us on social media to stay updated with the latest trends, tips, and exclusive offers:</p>
            <ul>
                <li>Instagram: @luxebeautysalon</li>
                <li>Facebook: Luxe Beauty Salon</li>
                <li>Twitter: @luxebeautysalon</li>
            </ul>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Luxe Beauty Salon. All rights reserved.</p>
    </footer>
</body>

</html>