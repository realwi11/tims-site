var sshowingmobileMenuTable = false;
var smobileHead = document.getElementById('roof_mobile_header');
var smobileHeadLogo = document.getElementById('roof_mobile_header_logo');
var spcHead = document.getElementById('roof_pc_header');
var mobileMenuTable = document.getElementById('mobile_menu_table');
var smobileContactButtonWrapper = document.getElementById('roof_mobile_menu_button_wrapper');
var sbody = document.getElementsByTagName('BODY')[0];
var shtml = document.getElementsByTagName('HTML')[0];
var sscrollUp = 0;
var mobileMenuItems = document.getElementsByClassName('mobile_menu_item');
var sshowingMobilLogo = true;

window.onscroll = function(e) {
    if(this.oldScroll > this.scrollY){      //if scrolling up
        if(isGallery){checkFilter("up");}
        if(isMobile()){
            if(!sshowingmobileMenuTable && Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop) < 30){
                showMobileLogo();
                scrolledDown = false;
            }
        }else{
            if(Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop) < 30){
                scrolledDown = false;
            }
        }
    }else{                                  //else scrolling down
    // console.log("calling functions");
    	sectionAnimations();
        threePicAnimations();
        separatorAnimations();
        // threePicAnimationsSimultanious();
        if(isGallery){checkFilter("down");}
        if(isMobile()){
            if(!sshowingmobileMenuTable && sshowingMobilLogo && Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop) > 30){
                hideMobileLogo();
                scrolledDown = true;
            }
        }else{

        }
    }
    this.oldScroll = this.scrollY;
}


function showOneMobMenuItem(mobMenuItem) {
    mobMenuItem.style.display = "inline-block";
}

function goHome() {
    window.scrollTo(0,0);
}

// big pic copy reveal
function showOneBigPicCopy(singlePic) {
    singlePic.style.display = "block";
}

function incrementCopyDelay() {
    BigPicCopyDelay = BigPicCopyDelay+300;
}

var bigPicCopy = document.getElementsByClassName("big_pic_copy");
var copyIndex = 0;
var BigPicCopyDelay = 0;
var marginLeft = 3;
var marginLeftPX;
var mobileMarginDiff = 10;
var isGallery = false;

function showBigPicCopy(pageNameIn) {
    goHome();
    if(pageNameIn == "about"){
        marginLeft = 7;
    }
    if(pageNameIn == "gallery"){
        isGallery = true;
    }
    for(copyIndex; copyIndex < bigPicCopy.length; copyIndex++){
        if(pageNameIn != "contact"){
            bigPicCopy[copyIndex].style.marginLeft = marginLeftPX;
        }
        setTimeout(showOneBigPicCopy.bind(null, bigPicCopy[copyIndex]), BigPicCopyDelay);
        incrementCopyDelay();
    }
}


window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

function isMobile(){
    if(smobileHead.clientHeight > spcHead.clientHeight){
        return true;
    }
    return false;
}

function lockMenuScroll(directive){
    if(directive == 'lock'){            //going to show the mobile menu
        sbody.style.overflow = "hidden";
        shtml.style.overflow = "hidden";
        mobileMenuTable.style.overflowY = "auto";
    }else{                              //going to hide the mobile menu
        sbody.style.overflowY = "auto";
        shtml.style.overflowY = "auto";
        mobileMenuTable.style.overflowY = "auto";
    }
}

function changesmobileHeadColors(dir){

    if(dir == "down"){
        smobileContactButtonWrapper.style.backgroundColor = "#065a32";
    }else{
        smobileContactButtonWrapper.style.backgroundColor = "transparent";
    }
}

function hidesmobileHeadClick(dir){
    if(dir == "down"){
        smobileHeadLogo.style.position = "fixed";
        sscrollUp = 0;
     }else{
        sscrollUp++;
        if(sscrollUp >= 3){
            smobileHeadLogo.style.position = "relative";
            smobileHeadLogo.style.top = "0";
            smobileContactButtonWrapper.style.border = "none";
         }
     }
}

var waitTime = 300;

function showMobileMenuItems(showHide) {
    if(showHide==="show"){
        for(var i=0; i < mobileMenuItems.length; i++){
            setTimeout(showOneMobMenuItem.bind(null, mobileMenuItems[i]), waitTime);
            waitTime = waitTime+250;
        }
        waitTime = 300;
    }else{
        for(var i=0; i<mobileMenuItems.length; i++){
            mobileMenuItems[i].style.display = "none";
        }
    }
}

function mobileMenuButtonClicked(){             //show the mobile menu table
    if(!sshowingmobileMenuTable){           //if not showing mobile table
        lockMenuScroll('lock');
        sshowingmobileMenuTable = true;
        hidesmobileHeadClick('down');
        mobileMenuTable.style.top = "0";  //show mobile menu table
        smobileHead.style.backgroundColor = "rgba(255, 255, 255, 1.0)";
        changesmobileHeadColors('up');
        smobileHeadLogo.style.left = "50%";
        smobileHeadLogo.style.transform = "translateX(-50%)";
        showMobileMenuItems('show');
    }else{                                      //else currently showing mobile menu table
        lockMenuScroll('unlock');
        sshowingmobileMenuTable = false;
        sscrollUp = 3;
        if(Math.max(window.pageYOffset, document.documentElement.scrollTop, document.body.scrollTop) < 10){
            hidesmobileHeadClick('up');
            changesmobileHeadColors('up');
        }else{
            changesmobileHeadColors('down');
        }
        mobileMenuTable.style.top = "-100vh";  //hide mobile menu table
        smobileHead.style.backgroundColor = "transparent";
        showMobileMenuItems('hide');
    }
}

function pageSelected(pageIn){
    var newPage = "https://smartfiresprinklers.com/" + pageIn;
    window.location.href = newPage;
}

function hideMobileLogo(){
    sshowingMobilLogo = false;
    smobileHeadLogo.style.left = "50%";
    smobileHeadLogo.style.transform = "translateX(-50%)";
    smobileHeadLogo.style.position = "fixed";
    smobileHeadLogo.style.top = "-250px";
    sscrollUp = 0;
    changesmobileHeadColors('down');
}

function showMobileLogo() {
    sscrollUp++;
    sshowingMobilLogo = true;
    smobileHeadLogo.style.position = "relative";
    smobileHeadLogo.style.top = "0";
    changesmobileHeadColors('up');
}

var scrolledDown = false;

function checkMobHeader(){
    if(isMobile()){
        if(scrolledDown){
            hideMobileLogo();
        }
    }else{

    }
}


var mobileDrop = document.getElementById('mobile_drop');
var showingMobileDrop = false;
function showServices(){
    if(showingMobileDrop){
        mobileDrop.style.display = "none";
        showingMobileDrop = false;
    }else{
        mobileDrop.style.display = "block";
        showingMobileDrop = true;
    }
}






























var sections = document.getElementsByClassName("entrance_animation");
var sectionWraps = document.getElementsByClassName("entrance_animation_wrap");
var sectionIndex = 0;
var windowHeight = window.innerHeight;

function sectionAnimations() {
    if(!isGallery){
        for(sectionIndex; sectionIndex < sectionWraps.length; sectionIndex++){
            if(windowHeight-20 > sectionWraps[sectionIndex].getBoundingClientRect().top){
                sections[sectionIndex].style.display = "inline-block";
            }
        }
        sectionIndex = 0;
    }
}


var threePics = document.getElementsByClassName("three_pics");
var threePicsSimultanious = document.getElementsByClassName("three_pics_now");
var threePicIndex = 0;
var threePicChildren;
var threePicDelay = 0;

function threePicAnimations() {
    // console.log('threePicDelay is ' + threePicDelay);
    for(threePicIndex; threePicIndex < threePics.length; threePicIndex++){
        if(windowHeight-20 > threePics[threePicIndex].getBoundingClientRect().top){
            threePicChildren = threePics[threePicIndex].childNodes;

            if(threePicChildren[0]){
                setTimeout(showOnePic.bind(null, threePicChildren[0]), threePicDelay);
                incrementDelay();
            }
            if(threePicChildren[1]){
                setTimeout(showOnePic.bind(null, threePicChildren[1]), threePicDelay);
                incrementDelay();
            }
            if(threePicChildren[2]){
                setTimeout(showOnePic.bind(null, threePicChildren[2]), threePicDelay);
                incrementDelay();
            }
            if(threePicChildren[3]){
                setTimeout(showOnePic.bind(null, threePicChildren[3]), threePicDelay);
                incrementDelay();
            }
            if(threePicChildren[4]){
                setTimeout(showOnePic.bind(null, threePicChildren[4]), threePicDelay);
                incrementDelay();
            }
        }
        threePicDelay = 0;
    }
    threePicIndex = 0;
}

function threePicAnimationsSimultanious() {
    // console.log('threePicDelay is ' + threePicDelay);
    for(threePicIndex; threePicIndex < threePicsSimultanious.length; threePicIndex++){
        if(windowHeight-20 > threePicsSimultanious[threePicIndex].getBoundingClientRect().top){
            threePicChildren = threePicsSimultanious[threePicIndex].childNodes;

            if(threePicChildren[0]){
                setTimeout(showOnePic.bind(null, threePicChildren[0]), threePicDelay);
                // incrementDelay();
            }
            if(threePicChildren[1]){
                setTimeout(showOnePic.bind(null, threePicChildren[1]), threePicDelay);
                // incrementDelay();
            }
            if(threePicChildren[2]){
                setTimeout(showOnePic.bind(null, threePicChildren[2]), threePicDelay);
                // incrementDelay();
            }
            if(threePicChildren[3]){
                setTimeout(showOnePic.bind(null, threePicChildren[3]), threePicDelay);
                // incrementDelay();
            }
            if(threePicChildren[4]){
                setTimeout(showOnePic.bind(null, threePicChildren[4]), threePicDelay);
                // incrementDelay();
            }
        }
        threePicDelay = 0;
    }
    threePicIndex = 0;
}

var separatorWraps = document.getElementsByClassName("separator_wrap");
var separatorIndex = 0;
var separatorChildren;
var separatorDelay = 0;

function separatorAnimations() {
    for(separatorIndex; separatorIndex < separatorWraps.length; separatorIndex++){
        // console.log("separatorwraps len is " + separatorWraps.length);
        if(windowHeight-20 > separatorWraps[separatorIndex].getBoundingClientRect().top){
            separatorChildren = separatorWraps[separatorIndex].childNodes;
            // console.log("separatorwraps len is " + separatorWraps.length);
            if(separatorChildren[0]){
                showOneSeparator(separatorChildren[0]);
            }
            if(separatorChildren[1]){
                showOneSeparator(separatorChildren[1]);
            }
        }
    }
    separatorIndex = 0;
}

function showOnePic(singlePic) {
    singlePic.style.display = "inline-block";
}

function incrementDelay() {
    threePicDelay = threePicDelay+200;
}


function showOneSeparator(singlePic) {
    singlePic.style.display = "inline-block";
}