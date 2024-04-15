<!-- sponsors section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="heading_container">
            <h2 class="section_heading"><span>Organised by</span></h2>
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
            <h2 class="section_heading"><span>Technical Co-Sponsors</span></h2>
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

    .heading_container {
        text-align: center;
    }

    .section_heading {
        white-space: nowrap; /* Prevent line break */
        overflow: hidden; /* Hide overflowing text */
        text-overflow: ellipsis; /* Show ellipsis for overflow */
    }

    .organisers_row {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin: -10px; /* Reduce white space */
}

    .organiser_logo {
        flex: 0 0 auto; /* Allow flexible sizing */
        margin: 10px;
        box-sizing: border-box; /* Include padding and border in width calculation */
        max-width: 200px; /* Increase maximum width of the logo */
    }

    .organiser_logo img {
        max-width: 100%;
        height: auto;
        display: block; /* Remove extra space below image */
        margin: auto; /* Center image horizontally */
    }

    @media screen and (max-width: 992px) {
        .organiser_logo {
            flex: 0 0 calc(50% - 20px); /* Two logos per row on smaller screens */
        }
    }

    @media screen and (max-width: 576px) {
        .organisers_row {
            flex-direction: column; /* Display logos in a single column */
            align-items: center; /* Center logos vertically */
        }
        .organiser_logo {
            flex: 0 0 calc(100% - 20px); /* One logo per row on extra small screens */
            margin-bottom: 20px; /* Add spacing between logos */
        }
    }
</style>
