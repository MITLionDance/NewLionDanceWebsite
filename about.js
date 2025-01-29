window.onload = () => {
    aboutel = document.getElementById("about");
    aboutel.classList.add("active");
    aboutel.style.color="gray";
    aboutel.setAttribute("href","#");
    general();
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

function general() {
    switchActive("gen");
    document.getElementById("descriptions").innerHTML = "<h1>Overview</h1>\
    <p>Lion dance is one of China's most distinctive cultural arts. This form of traditional dance dates is believed to have appeared in either the Tang, Han, or Qin dynasties.\
    Some  legends associated with lion dance include using the dance to chase away the \"Nian\" monster.  Often performed by kung fu schools,\
    lion dancing brings good fortune, prosperity, and longevity. It is usually performed during cultural celebrations such as Lunar New Year, as well as to \
    bless the opening of new shops, weddings, or births.<br><br>\
    </p>";
    // include site for more info
}

function costume() {
    switchActive("cos");
    document.getElementById("descriptions").innerHTML = "<h1>Costumes</h1>\
    <p>Lion dance costumes often don't look like the lions we're familiar with. Lions were not common in Ancient China, resulting in the differences in appearance. The costume was designed to have bright colors \
    to chase away evil spirits and bad luck. The horn is used to ward off bad spirits, but beware -- touching the horn will bring you bad luck!<br><br>\
    There are different styles of lions, with the Northern and Southern being the main types in China. The Northern lion looks more realistic, with fur all over the body and a more anatomically correct head. The performers often wear leggings \
    that add to the realism. The Southern lion head is more ornate and fancy. The body and tail is made of silk and has almost \
    no fur.<br><br>\
    This Wikipedia page details various other regional lion types, for the curious reader: <a href=\"https://en.wikipedia.org/wiki/Lion_dance#Regional_types\">https://en.wikipedia.org/wiki/Lion_dance#Regional_types</a></p>";
}

function dance() {
    switchActive("dan");
    document.getElementById("descriptions").innerHTML = "<h1>Dance</h1><p>\
    There are several elements that can be found in a typical lion dance performance. Often, the introduction will include a bow to show respect,\
    and the remainder may include fighting if more than one lion is performing, sleeping, grooming, eating, or drinking. Many dances will also add \
    in tricks such as lifts and rolls.<br><br>\
    Generally, each dance contains a sequence, called choy cheng, where the lion eats lettuce or other greens. In the United States, the\
    green has come to mean prosperity because it is the color of money. Traditionally, however, this sequence is done because dealing out lettuce in Mandarin Chinese \
    (\"fa tsai\") sounds like the phrase for “become prosperous”. Often a red envelope, called hong bao, is attached as payment. After \
    eating the lettuce, the lion crouches for a moment and then sprays the audience with it. Sometimes the lettuce is placed behind \
    obstacles that the lion needs to pass to get it.<br><br>\
    Other exotic objects have been eaten with different meanings. Sometimes scrolls with lucky sayings are used when spraying lettuce \
    is unsuitable.<br><br>\
    Other choreographed sequences may include a dancing Buddhist monk, called the Little Buddha, that provokes the lion, plays with it,\
    and/or feeds it. Sometimes the lion will bite the monk. \
    </p>";
    //INCLUDE A VIDEO!!!!!!
}

function legend() {
    switchActive("or");
    document.getElementById("descriptions").innerHTML = "<h1>Legend & Origin</h1>\
    <p>Despite being a large part of Chinese culture today, lions are not native to Ancient China and were likely introduced by other Asian countries. \
    In fact, lion dance was described in the Tang Dynasty as a \"foreign dance\". Even then, there are several legends about the origin of lion dancing. \
    One of the more popular legends details the chasing away of the \"Nian\" monster.<br><br>\
    <i>Nian was a fierce monster that especially liked kidnapping children.\
    He terrorized villages annually right as one year turned into the next. Finally, one year, a lion defeated and chased the monster away, but Nian vowed to return the next \
    year. This time, unfortunately, the villagers did not have a lion to protect themselves. They solved the problem by creating a costume \
    in the likeness of a lion and two villagers used it to scare Nian away. Legend also says that loud noises from the drum, other instruments, and firecrackers \
    helped to scare Nian away. Red is worn during New Years celebrations because it was also believed that Nian was afraid of the color red.</i><br><br>\
    \
    The Little Buddha originates from the Buddhist/Shaolin monks that were thought to have trained the first lion dancers. The Little Buddha \
    is sometimes referred to as the dai tou fut, or big headed monk.\
    <\p>";
}

function mit() {
    switchActive("atmit");
    document.getElementById("descriptions").innerHTML = "<h1>About MIT Lion Dance Team</h1>\
    <p>The MIT Lion Dance Team is a troupe based at the Massachusetts Institute of Technology. The group has been \
    performing since 1994, and was recognized as an official club at MIT in 1997.<br><br>\
    Our troupe uses the Southern Lion and mostly perform choreographed sequences with two or three lions. We generally perform in what is known as \
    the Hong Gar (also Hung Gar) style to mostly three-star but some seven-star movements/beats.<br><br>\
    <a href=\"./media.html\">See examples of MIT Lion Dance performances.</a><br><br>\
    If you would like to request a performance, <a href=\"./contact.html\">use this form</a>.\
    </p>";
}

