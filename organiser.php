<!-- sponsors section -->
<section class="about_section layout_padding">
    <div class="container">
        <div class="sponsors_row">
            <div class="sponsors_column">
                <div class="heading_container">
                    <h2 class="section_heading"><span>Organised by</span></h2>
                    <img src="./images/sponsors/1.png" alt="Organiser 1">
                </div>
            </div>
            <div class="sponsors_column">
                <div class="heading_container">
                    <h2 class="section_heading"><span>Technical Co-Sponsors</span></h2>
                    <img src="./images/sponsors/2.png" alt="Organiser 2">
                </div>
            </div>
        </div>
    </div>
</section>

.about_section {
    display: flex;
    justify-content: space-between;
}

.sponsors_row {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.sponsors_column {
    flex: 1;
    margin: 0 10px; /* Adjust margins as needed */
}

.heading_container {
    text-align: center;
}

.section_heading span {
    display: block;
}
