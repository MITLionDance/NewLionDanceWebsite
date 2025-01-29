window.onload = () => {
    perel = document.getElementById("per");
    perel.classList.add("active");
    perel.style.color="gray";
    perel.setAttribute("href","#");
    scy2324();
};

function dropDate(text){
    document.getElementById("parent").innerHTML = text;
}

// add functions for each button, and on onload call the function instead
function scy2324() {
    dropDate("2023-2024");
    document.getElementById("descriptions").innerHTML = "<b>Fall 2023</b><br>\
    <ul>\
        <li>Aug/Sep 2023 - ASA Orientation Midway</li>\
        <li> Nov 2023 - Nightmarket</li>\
        <li> Dec 2023 - ADT Showcase: Twilight</li>\
    </ul>\
    <br>\
    <b>Spring 2024</b><br>\
        <ul>\
            <li>2024 - Royal East Lunar New Year</li>\
            <li>Feb 2024 - Google Lunar New Year</li>\
            <li>2024 - Milton Academy Lunar New Year</li>\
            <li> 2024 - BASICS @ Harvard</li>\
            <li>Feb 2024 - MIT Open Spaces Lunar New Year</li>\
            <li>Feb 2024 - CAAC Lunar New Year</li>\
            <li> 2024 - Wusong Road x3</li>\
            <li>Feb 2024 - HMS APAMSA LNY @ HMS</li>\
            <li>April 2024 - Intercollegiate Lion Dance Competition 2024</li>\
            <li>April 2024 - CPW Midway</li>\
            <li>April 2024 - CPW Closing Show</li>\
        </ul>";
}

function scy2223() {
    dropDate("2022-2023");
    document.getElementById("descriptions").innerHTML = "<b>Fall 2022</b><br>\
    <ul>\
        <li> Sep 2022 - ASA Orientation Midway</li>\
        <li> Oct 2022 - Teado Grand Openning</li>\
        <li> Nov 2022 - Nightmarket</li>\
        <li> Dec 2022 - ADT Showcase: Reminiscence</li>\
    </ul>\
    <br>\
    <b>Spring 2023</b><br>\
        <ul>\
            <li> Jan 2023 - Wusong Road x2</li>\
            <li> Jan 2023 - Harvard Pforzheimer House Lunar New Year Open House</li>\
            <li> Jan 2023 - MIT Graduate Student Union Lunar New Year</li>\
            <li> Feb 2023 - Google Lunar New Year</li>\
            <li> Feb 2023 - CAAC Lunar New Year</li>\
            <li> Feb 2023 - MIT Open Spaces Lunar New Year</li>\
            <li> Feb 2023 - MIT Sloan Fellows Chinese New Year</li>\
            <li> Apr 2023 - Intercollegiate Lion Dance Competition 2023</li>\
            <li> Apr 2023 - CPW Midway</li>\
            <li> Apr 2023 - CPW Closing Show</li>\
            <li> Apr 2023 - AAA Grains of Rice</li>\
            <li> Apr 2023 - Lion Dance Show 2023</li>\
            <li> May 2023 - ADT Showcase: Awakening</li>\
        </ul>";
}

function scy2122() {
    dropDate("2021-2022");
    document.getElementById("descriptions").innerHTML = "<b>Fall 2021</b><br>\
    <ul>\
        <li> Aug/Sep 2021 - ASA Orientation Midway</li>\
        <li> Oct 2021 - Nightmarket</li>\
        <li> Dec 2021 - ADT Showcase: Reverie</li>\
    </ul>\
    <br>\
    <b>Spring 2022</b><br>\
        <ul>\
            <li> Feb 2022 - CSC Lunar Banquet</li>\
            <li> Apr 2022 - Intercollegiate Lion Dance Competition 2022</li>\
            <li> Apr 2022 - Ukraine Fundraiser</li>\
            <li> Apr 2022 - CPW Midway</li>\
            <li> Apr 2022 - CPW Closing Show</li>\
            <li> Apr 2022 - Lion Dance Show (first one!!!!)</li>\
            <li> Apr 2022 - Springfest</li>\
            <li> Apr 2022 - ASA Grains of Rice</li>\
            <li> May 2022 - ADT Showcase Ascension</li>\
        </ul>";
}

function scy2021() {
    dropDate("2020-2021");
    document.getElementById("descriptions").innerHTML = " <b>Fall 2020</b><br>\
    <br>\
    <b>Spring 2021</b><br>\
        <ul>\
            <li> Spring 2021 - RISE Awards Ceremony</li>\
        </ul>";
}

function scy1920() {
    dropDate("2019-2020");
    document.getElementById("descriptions").innerHTML = " <b>Fall 2019</b><br>\
    <ul>\
        <li> Sep 2019 - ASA Orientation Midway</li>\
        <li> Oct 2019 - Nightmarket</li>\
        <li> Dec 2019 - ADT Showcase: Essence</li>\
    </ul>\
    <br>\
    <b>Spring 2020</b><br>\
        <ul>\
            <li> Jan 2020 - Google Cambridge Lunar New Year</li>\
            <li> Jan 2020 - Harvard Fairbank Lunar New Year</li>\
            <li> Feb 2020 - Boston University CSA Lunar New Year</li>\
            <li> Feb 2020 - CSC Lunar Banquet</li>\
            <li> COVID :(((</li>\
        </ul>";
}