<!-- sponsors section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2 style="text-align: center;"><span>Organised by</span></h2>
        </div>
        <div class="organisers_row">
            <div class="organiser_logo">
                <img src="./images/sponsors/2.png" alt="Organiser 1">
            </div>
            <div class="organiser_logo">
                <img src="./images/sponsors/1.png" alt="Organiser 2">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="heading_container">
            <h2 style="text-align: center;"><span>Technical Co-Sponsors</span></h2>
        </div>
        <div class="organisers_row">
            <div class="organiser_logo">
                <img src="./images/sponsors/5.png" alt="Organiser 1">
            </div>
            <div class="organiser_logo">
                <img src="./images/sponsors/4.png" alt="Organiser 2">
            </div>
            <div class="organiser_logo">
                <img src="./images/sponsors/7.png" alt="Organiser 3">
            </div>
            <div class="organiser_logo">
                <img src="./images/sponsors/3.png" alt="Organiser 4">
            </div>
        </div>
    </div>
</section>
<!-- end sponsors section -->

<style>
    .container {
        display: flex;
        justify-content: center;
        margin: 0 auto;
        max-width: 1200px; /* Adjust as needed */
    }

    .organisers_row {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .organiser_logo {
        margin: 10px;
    }

    .organiser_logo img {
        max-width: 100%;
        height: auto;
    }

    @media screen and (max-width: 768px) {
        .organiser_logo {
            flex-basis: 50%; /* Two logos per row on smaller screens */
        }
    }

    @media screen and (max-width: 576px) {
        .organiser_logo {
            flex-basis: 100%; /* One logo per row on extra small screens */
        }
    }
</style>
