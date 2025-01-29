let headerInfo=`
<a href="index.html"><img src="images/mainLogo.jpg" alt="MIT Lion Dance Logo" class="img-fluid"></a>
`;
document.getElementById("headerGoesHere").innerHTML = headerInfo;

// for now,... need to figure out how to keep navs in this shared file instead of in individual but unsure rn
let navs=`
<div class="container-fluid justify-content-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNav"
        aria-controls="collapsibleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="collapsibleNav">
        <ul class="navbar-nav text-center">
            <li class="nav-item px-3">
                <a id="home" class="nav-link" href="./index.html">Home</a>
            </li>
            <li class="nav-item px-3">
                <a id="about" class="nav-link" href="./about.html">About</a>
            </li>
            <li class="nav-item px-3">
                <a id="mem" class="nav-link" href="./members.html">Members</a>
            </li>
            <li class="nav-item px-3">
                <a id="per" class="nav-link" href="./performances.html">Performances</a>
            </li>
            <li class="nav-item px-3">
                <a id="media" class="nav-link" href="./media.html">Media/Links</a>
            </li>
            <li class="nav-item px-3">
                <a id="cont" class="nav-link" href="./contact.html">Contact/Request</a>
            </li>
        </ul>
    </div>
</div>
`;

document.getElementById("navGoesHere").innerHTML = navs;

let footerInfo=`
<div class="d-flex justify-content-evenly align-items-center">
    <div class="col">
        <p>(C) MIT Lion Dance</p>
    </div>
    <div class="col">
        <img src="images/mit.gif" alt="WILL BE SOCIAL MEDIA LOGO THINGS and a better mit logo">
    </div>
</div>
`;


//      add copyright
// add social media 
// mit logo
// -->

// <!-- good footer examples: https://blog.hubspot.com/website/website-footer -->
document.getElementById("footerGoesHere").innerHTML=footerInfo;