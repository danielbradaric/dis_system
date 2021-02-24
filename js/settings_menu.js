// to main_settings

function ToMs() {
    document.getElementById("account_settings").style.display = "none";
    document.getElementById("password_change").style.display = "none";
    document.getElementById("database_access").style.display = "none";
    document.getElementById("access_denied").style.display = "none";
    document.getElementById("main-settings").style.display = "block";
    document.getElementById("start-button").style.color = "blue";
    document.getElementById("account_button").style.color = "black";
    document.getElementById("password_button").style.color = "black";
    document.getElementById("database_button").style.color = "black";
    document.getElementById("ad_button").style.color = "black";

}


// to account_settings

function ToAs() {
    document.getElementById("account_settings").style.display = "block";
    document.getElementById("password_change").style.display = "none";
    document.getElementById("database_access").style.display = "none";
    document.getElementById("access_denied").style.display = "none";
    document.getElementById("main-settings").style.display = "none";
    document.getElementById("start-button").style.color = "black";
    document.getElementById("account_button").style.color = "blue";
    document.getElementById("password_button").style.color = "black";
    document.getElementById("database_button").style.color = "black";
    document.getElementById("ad_button").style.color = "black";
}


// to password_settings

function ToPs() {
    document.getElementById("account_settings").style.display = "none";
    document.getElementById("password_change").style.display = "block";
    document.getElementById("database_access").style.display = "none";
    document.getElementById("access_denied").style.display = "none";
    document.getElementById("main-settings").style.display = "none";
    document.getElementById("start-button").style.color = "black";
    document.getElementById("account_button").style.color = "black";
    document.getElementById("password_button").style.color = "blue";
    document.getElementById("database_button").style.color = "black";
    document.getElementById("ad_button").style.color = "black";
}


// to database_settings

function ToDs() {
    document.getElementById("account_settings").style.display = "none";
    document.getElementById("password_change").style.display = "none";
    document.getElementById("database_access").style.display = "block";
    document.getElementById("access_denied").style.display = "none";
    document.getElementById("main-settings").style.display = "none";
    document.getElementById("start-button").style.color = "black";
    document.getElementById("account_button").style.color = "black";
    document.getElementById("password_button").style.color = "black";
    document.getElementById("database_button").style.color = "blue";
    document.getElementById("ad_button").style.color = "black";
}


// to ad_settings

function ToADs() {
    document.getElementById("account_settings").style.display = "none";
    document.getElementById("password_change").style.display = "none";
    document.getElementById("database_access").style.display = "none";
    document.getElementById("access_denied").style.display = "block";
    document.getElementById("main-settings").style.display = "none";
    document.getElementById("start-button").style.color = "black";
    document.getElementById("account_button").style.color = "black";
    document.getElementById("password_button").style.color = "black";
    document.getElementById("database_button").style.color = "black";
    document.getElementById("ad_button").style.color = "blue";
}
