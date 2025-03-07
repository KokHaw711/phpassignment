<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<style>
    /* Footer */
    footer {
        background-color: #222;
        color: #ddd;
        text-align: center;
        padding: 40px 20px;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-bottom: 20px;
    }

    .footer-section {
        width: 300px;
        margin: 0 20px;
    }

    .footer-section h3 {
        color: #835A36;
        font-family: 'Arial', sans-serif;
        font-size: 20px;
        margin-bottom: 10px;
    }

    .footer-section p {
        margin-bottom: 5px;
        font-family: 'Arial', sans-serif;
        font-size: 14px;
    }

    .footer-section a {
        color: #ffc107;
        text-decoration: none;
        font-family: 'Arial', sans-serif;
        font-size: 14px;
    }

    .footer-section a:hover {
        text-decoration: underline;
    }

    .social-icons {
        margin-top: 10px;
    }

    .social-icons a {
        margin-right: 10px;
    }

    .payment-methods {
        margin-top: 20px;
    }

    .payment-methods img {
        margin-right: 1%;
        max-width: fit-content;
        max-height: 100px;
        width: 23%;
    }

    .copyright {
        margin-top: 20px;
        font-family: 'Arial', sans-serif;
        font-size: 12px;
    }

    .bx {
        font-size: 250%;
        color: #f7f4f4;
        transition: transform 0.3s ease;
    }

    .bx:hover {
        transition: transform 0.3s ease;
        transform: scale(1.5);
    }
</style>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About</h3>
            <p>Contact Number: <a href="tel:+6011-10693749">+60 11-1069 3749</a></p>
            <p>Email: <a href="mailto:pohtw-wm22@student.tarc.edu.my">pohtw-wm22@student.tarc.edu.my</a></p>
            <p>Address: Jalan Genting Kelang, Setapak, 53300 Kuala Lumpur.</p>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-media-icons">
                <a href=""><i class='bx bxl-facebook-square'></i></a>
                <a href=""><i class='bx bxl-twitter'></i></a>
                <a href=""><i class='bx bxl-youtube'></i></a>
                <a href=""><i class='bx bxl-instagram-alt'></i></a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; 2024 Online Store. All rights reserved.</p>
    </div>
    <div class="payment-methods">
        <img src="images/cimbBankLogo.png" alt="CIMB">
        <img src="images/masterCardLogo.png" alt="Mastercard">
        <img src="images/hongLeongBankLogo.png" alt="hongleong">
        <img src="images/mayBankLogo.png" alt="maybank">
    </div>
</footer>

</body>

</html>