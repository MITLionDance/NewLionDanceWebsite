window.onload = () => {
    memel = document.getElementById("mem");
    memel.classList.add("active");
    memel.style.color="gray";
    memel.setAttribute("href","#");
    curmem();
};


function switchActive(idName) {
    buttons = document.getElementsByTagName("button");
    for (let i = 0; i < buttons.length; i++) {
        thing = buttons.item(i);
        if (thing.classList.contains("active")) {
            thing.classList.remove("active");
            thing.removeAttribute("aria-current");
        }
    }
    newthing = document.getElementById(idName)
    newthing.classList.add("active");
    newthing.setAttribute("aria-current", "true");
}

// add functions for each button, and on onload call the function instead
function curmem() {
    switchActive("cur");
    document.getElementById("descriptions").innerHTML = "<h2>Current members</h2><br>\
    Anna Chen '28<br>\
    Cindy Tang '28<br>\
    Eric Wang '28<br>\
    Leonid Asatryan '28<br>\
    Victoria Pham '28<br>\
\
    Christine Wu '27<br>\
    Ivyann Shen '27<br>\
    Jolie Duquene '27<br>\
    Megan Tseng '27<br>\
    Michelle Wang '27<br>\
    Raphael Dylan Dalida '27<br>\
\
    Allison Lin '26<br>\
    Danny Yang '26<br>\
\
    Alex Li '25<br>\
    Elijah Van Ryck de Groot '25<br>\
    Grace Yang '25<br>\
    Serena Li '25<br>\
    Nrithya Renganathan '25<br>\
    Zixuan Liu '25<br>\
    Zi Yan Wu '25<br>\
\
    Christian Teshome '24<br>\
    Jason Li '24<br>\
\
    Brian Cho '23<br>\
    Justin Duffy '22";
}

function board() {
    switchActive("exc");
    document.getElementById("descriptions").innerHTML = "<h2>Executive Board</h2><br>\
    President: Elijah Van Ryck de Groot '25<br>\
    Vice President: Danny Yang '26<br>\
    Treasurer: Alex Li '25<br>\
    Social Chair: Grace Yang '25<br>\
    Public Relations: Alex Li '25<br>\
    Choreographer: Zixuan Liu '25<br>\
    Lion Keepers: Allison Lin '26, Danny Yang '26, Zixuan Liu '25<br>\
    Webmaster: Jolie Duquene '27<br>\
    Room Coordinator: Elijah Van Ryck de Groot '25<br>\
    Show Coordinators: Amanda Mei '24, Eileen Chau '23<br>\
    Competition Coach: Danny Yang '26";
}

function prez() {
    switchActive("pre");
    document.getElementById("descriptions").innerHTML = "<h2>Former Presidents</h2><br>\
    Amanda Mei '24<br>\
    Eileen Chau '23<br>\
    Kevin Ly '22<br>\
    Andison Tran '21 and Nathan Liang '21<br>\
    Joy Chen '14<br>\
    Cathy Wu '11<br>\
    Sammy Chu '10<br>\
    Melissa Chu '08<br>\
    Karen Law '07<br>\
    John Wu '06<br>\
    John Wu '06<br>\
    Emily Chi '04<br>\
    Eugene Chiu '01<br>\
    Andrew Lau '00<br>\
    Frank Liu '00<br>\
    Rachel Sha '98<br>\
    Vincent See '97";
}

function alumSwitchActive(idName) {
    buttons = document.getElementsByTagName("dropdown-item");
    for (let i = 0; i < buttons.length; i++) {
        thing = buttons.item(i);
        if (thing.classList.contains("active")) {
            thing.classList.remove("active");
            thing.removeAttribute("aria-current");
        }
    }
    newthing = document.getElementById(idName)
    newthing.classList.add("active");
    newthing.setAttribute("aria-current", "true");
}

//FIX THIS TO HAVE DROPDOWN BY YEAR!!!!!!!!!!!
function alums() {
    switchActive("als");
    document.getElementById("descriptions").innerHTML = "<h2>Alumni</h2><br>\
    Amanda Mei '24<br>\
    April Cheng '24<br>\
    Austin Chin '24<br>\
    Erica Chen '24<br>\
    Jason Li '24<br>\
    Kevin Qian '23<br>\
    Eileen Chau '23<br>\
    Zachary Francis '23<br>\
    Britney Ting '22<br>\
    Jamie Geng '22<br>\
    Juan Aleman '22<br>\
    Kevin Ly '22<br>\
    Andrea Lo '21<br>\
    Andison Tran '21<br>\
    Nathan Liang '21<br>\
    Sarah Vu '21<br>\
    Chris Xu '21<br>\
    Gloria \"Wawa\" Chyr '20<br>\
    Junyu Yang '20<br>\
    Elizabeth Li '18<br>\
    Sibo Wang '18<br>\
    Gina Liu '18<br>\
    Kevin Ng '17<br>\
    Tara Lee '17<br>\
    Doris Le '17<br>\
    Julia Guo '17<br>\
    Jamin Liu '15<br>\
    Yang Chen '15<br>\
    Ronald Chan '15<br>\
    Yang Chen '15<br>\
    Jamin Liu '15<br>\
    Yukino Nagai '15<br>\
    Lealia Xiong '15<br>\
    Joy Chen '14<br>\
    Catherine Fan '14<br>\
    Geza Kovacks '12<br>\
    Carrie Liang '14<br>\
    Qian Long '14<br>\
    North Surakitbovorn '14<br>\
    Stephanie Tsai '13<br>\
    Josh Chartier '07<br>\
    Tim Lee '11<br>\
    Alice Li '11<br>\
    Lakshman Sankar '11<br>\
    Danielle Wang '11<br>\
    Lulu Wang '11<br>\
    Cathy Wu '11<br>\
    Kellie Young '11<br>\
    Sammy Chu '10<br>\
    Evan Chan '08<br>\
    Kathleen Cui '08<br>\
    Lydia Gu '08<br>\
    Amanda Shing '08<br>\
    Sai Hei Yeung '08<br>\
    Elizabeth Au '07<br>\
    Jason Chen '07<br>\
    Kerry Cheung '07<br>\
    Christine Fanchiang '07<br>\
    Kimberly Kam '07<br>\
    Lauren Leung '07<br>\
    Ling Xu '07<br>\
    Maxine Yang '07<br>\
    Christine Yu '07<br>\
    Joseph Cheng '06<br>\
    George Huo '06<br>\
    Lauri Kauppila '06<br>\
    Yao King '06<br>\
    Andrew Lee '06<br>\
    Vivian Leung '06<br>\
    Forrest Liau '06<br>\
    Meng Mao '06<br>\
    Jacqueline Tio '06<br>\
    Kelvin Chan '05<br>\
    Ken Chang '05<br>\
    Alice Chou '05<br>\
    Kathryn Der '05<br>\
    Jeff Hsu '05<br>\
    Yuan Shu '05<br>\
    Amy Wong '05<br>\
    Sherry Kan '04<br>\
    John King '04<br>\
    Diana Lam '04<br>\
    Sean Liu '04<br>\
    Pon Pon Yeh '04<br>\
    Brian Hong '03<br>\
    Delia Hou '03<br>\
    Janet Hsiao '03<br>\
    Pei - Hsin Lin '03<br>\
    Spencer Seung '02<br>\
    Ailin Yang '02<br>\
    Ying Cao '01<br>\
    Alan Chen '01<br>\
    Fred Huang '01<br>\
    Yi - fungar Lin '01<br>\
    Rich Moy '01<br>\
    Alice Chau '00<br>\
    Win Chevapravatdumrong '00<br>\
    Lillian Kiang '00<br>\
    Laurie Leong '00<br>\
    Susan Lin '00<br>\
    K.Cherry Liu '00<br>\
    Xiaomin Mou '00<br>\
    Jean Yang '00<br>\
    Anita Chung '99<br>\
    Sandy Jen '99<br>\
    Grace Liu '99<br>\
    Brian Wong '99<br>\
    Anita Wu '99<br>\
    Janet Chieh '98<br>\
    Jean Hsu '98<br>\
    Jimmy Lin '98<br>\
    Amy Kimura '97<br>\
    Douglas Yeung '97";
}
