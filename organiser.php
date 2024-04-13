<!-- sponsors section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2><span>Organised by</span></h2>
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
            <h2><span>Technical Co-Sponsors</span></h2>
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
        flex-wrap: wrap;
        justify-content: center;
        margin: -10px; /* Reduce white space */
    }

    .organiser_logo {
        flex: 0 0 calc(33.333% - 20px); /* Three logos per row with reduced white space */
        margin: 10px;
        box-sizing: border-box; /* Include padding and border in width calculation */
    }

    .organiser_logo img {
        max-width: 100%;
        height: auto;
        display: block; /* Remove extra space below image */
        margin: auto; /* Center image horizontally */
    }

    @media screen and (max-width: 768px) {
        .organiser_logo {
            flex: 0 0 calc(50% - 20px); /* Two logos per row on smaller screens */
        }
    }

    @media screen and (max-width: 576px) {
        .organiser_logo {
            flex: 0 0 calc(100% - 20px); /* One logo per row on extra small screens */
        }
    }
</style>
